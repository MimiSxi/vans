<?php


namespace app\home\logic;

use think\Model;
use think\Db;
/**
 * 字段逻辑定义
 * Class CatsLogic
 * @package home\Logic
 */
class FieldLogic extends Model
{
    /**
     * 查询解析模型数据用以页面展示
     * @param array $data 表数据
     * @param intval $channel_id 模型ID
     * @param array $batch 是否批量列表
     * @author 小虎哥 by 2018-7-25
     */
    public function getChannelFieldList($data, $channel_id = '', $batch = false)
    {
        if (!empty($data) && !empty($channel_id)) {
            /*获取模型对应的附加表字段信息*/
            $map = array(
                'channel_id'    => $channel_id,
            );
            $fieldInfo = model('Channelfield')->getListByWhere($map, '*', 'name');
            /*--end*/
            $data = $this->handleAddonFieldList($data, $fieldInfo, $batch);
        } else {
            $data = array();
        }
        
        return $data;
    }

    /**
     * 查询解析单个数据表的数据用以页面展示
     * @param array $data 表数据
     * @param intval $channel_id 模型ID
     * @param array $batch 是否批量列表
     * @author 小虎哥 by 2018-7-25
     */
    public function getTableFieldList($data, $channel_id = '', $batch = false)
    {
        if (!empty($data) && !empty($channel_id)) {
            /*获取自定义表字段信息*/
            $map = array(
                'channel_id'    => $channel_id,
            );
            $fieldInfo = model('Channelfield')->getListByWhere($map, '*', 'name');
            /*--end*/
            $data = $this->handleAddonFieldList($data, $fieldInfo, $batch);
        } else {
            $data = array();
        }

        return $data;
    }

    /**
     * 处理自定义字段的值
     * @param array $data 表数据
     * @param array $fieldInfo 自定义字段集合
     * @param array $batch 是否批量列表
     * @author 小虎哥 by 2018-7-25
     */
    public function handleAddonFieldList($data, $fieldInfo, $batch = false)
    {
        if (false !== $batch) {
            return $this->handleBatchAddonFieldList($data, $fieldInfo);
        }

        if (!empty($data) && !empty($fieldInfo)) {
            foreach ($data as $key => $val) {
                $dtype = !empty($fieldInfo[$key]) ? $fieldInfo[$key]['dtype'] : '';
                $dfvalue_unit = !empty($fieldInfo[$key]) ? $fieldInfo[$key]['dfvalue_unit'] : '';
                switch ($dtype) {
                    case 'int':
                    case 'float':
                    case 'decimal':
                    case 'text':
                    {
                        $data[$key.'_unit'] = $dfvalue_unit;
                        break;
                    }

                    case 'imgs':
                    {
                        if (!is_array($val)) {
                            $eyou_imgupload_list = @unserialize($val);
                            if (false === $eyou_imgupload_list) {
                                $eyou_imgupload_list = [];
                                $eyou_imgupload_data = explode(',', $val);
                                foreach ($eyou_imgupload_data as $k1 => $v1) {
                                    $eyou_imgupload_list[$k1] = [
                                        'image_url' => handle_subdir_pic($v1),
                                        'intro'     => '',
                                    ];
                                }
                            }
                        } else {
                            $eyou_imgupload_list = [];
                            $eyou_imgupload_data = $val;
                            foreach ($eyou_imgupload_data as $k1 => $v1) {
                                $v1['image_url'] = handle_subdir_pic($v1['image_url']);
                                isset($v1['intro']) && $v1['intro'] = htmlspecialchars_decode($v1['intro']);
                                $eyou_imgupload_list[$k1] = $v1;
                            }
                        }
                        $val = $eyou_imgupload_list;
                        break;
                    }

                    case 'checkbox':
                    case 'files':
                    {
                        if (!is_array($val)) {
                            $val = !empty($val) ? explode(',', $val) : array();
                        }
                        /*支持子目录*/
                        foreach ($val as $k1 => $v1) {
                            $val[$k1] = handle_subdir_pic($v1);
                        }
                        /*--end*/
                        break;
                    }

                    case 'htmltext':
                    {
                        $val = htmlspecialchars_decode($val);

                        /*追加指定内嵌样式到编辑器内容的img标签，兼容图片自动适应页面*/
                        $titleNew = !empty($data['title']) ? $data['title'] : '';
                        $val = img_style_wh($val, $titleNew);
                        /*--end*/

                        /*支持子目录*/
                        $val = handle_subdir_pic($val, 'html');
                        /*--end*/
                        break;
                    }

                    case 'decimal':
                    {
                        $val = number_format($val,'2','.',',');
                        break;
                    }

                    case 'region':
                    {
                        // 先在默认值里寻找是否存在对应区域ID的名称
                        $dfvalue = !empty($fieldInfo[$key]['dfvalue']) ? $fieldInfo[$key]['dfvalue'] : '';
                        if (!empty($dfvalue)) {
                            $dfvalue_tmp = unserialize($dfvalue);
                            $region_ids = !empty($dfvalue_tmp['region_ids']) ? explode(',', $dfvalue_tmp['region_ids']) : [];
                            if (!empty($region_ids)) {
                                $arr_index = array_search($val, $region_ids);
                                if (false !== $arr_index && 0 <= $arr_index) {
                                    $dfvalue_tmp['region_names'] = str_replace('，', ',', $dfvalue_tmp['region_names']);
                                    $region_names = explode(',', $dfvalue_tmp['region_names']);
                                    $val = $region_names[$arr_index];
                                }
                            }
                        }
                        // 默认值里不存在，则去区域表里获取
                        if (!empty($val) && is_numeric($val)) {
                            $city_list = get_city_list();
                            if (!empty($city_list[$val])) {
                                $val = $city_list[$val]['name'];
                            } else {
                                $province_list = get_province_list();
                                if (!empty($province_list[$val])) {
                                    $val = $province_list[$val]['name'];
                                } else {
                                    $area_list = get_area_list();
                                    $val = !empty($area_list[$val]) ? $area_list[$val]['name'] : '';
                                }
                            }
                        }
                        break;
                    }
                    
                    default:
                    {
                        /*支持子目录*/
                        if (is_string($val)) {
                            $val = handle_subdir_pic($val, 'html');
                            $val = handle_subdir_pic($val);
                        }
                        /*--end*/
                        break;
                    }
                }
                $data[$key] = $val;
            }
        }
        return $data;
    }

    /**
     * 列表批量处理自定义字段的值
     * @param array $data 表数据
     * @param array $fieldInfo 自定义字段集合
     * @author 小虎哥 by 2018-7-25
     */
    public function handleBatchAddonFieldList($data, $fieldInfo)
    {
        if (!empty($data) && !empty($fieldInfo)) {
            foreach ($data as $key => $subdata) {
                $data[$key] = $this->handleAddonFieldList($subdata, $fieldInfo);
            }
        }
        return $data;
    }
}
