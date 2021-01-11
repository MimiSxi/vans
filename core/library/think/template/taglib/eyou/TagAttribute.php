<?php


namespace think\template\taglib\eyou;

use think\Db;

/**
 * 栏目属性
 */
class TagAttribute extends Base
{
    public $aid = '';
    
    //初始化
    protected function _initialize()
    {
        parent::_initialize();
        /*应用于文档列表*/
        $this->aid = input('param.aid/d', 0);
        /*--end*/
    }

    /**
     * 获取每篇文章的属性
     * @author wengxianhu by 2018-4-20
     */
    public function getAttribute($aid = '', $type = '', $attrid = '')
    {
        $aid = !empty($aid) ? $aid : $this->aid;
        if (empty($aid)) {
            echo '标签attribute报错：缺少属性 aid 值。';
            return false;
        }
        $result = false;

        if ('newattr' == $type) {

            if (empty($attrid)) {
                $attrid = Db::name('archives')->where(['aid'=>$aid])->getField('attrlist_id');
            }

            // 新版参数
            $where = [
                'a.list_id' => $attrid,
                'a.status'  => 1,
                'b.aid'     => $aid
            ];
            $result = M('shop_product_attribute')
                ->alias('a')
                ->field('a.attr_name as name, b.attr_value as value')
                ->join('__SHOP_PRODUCT_ATTR__ b', 'a.attr_id = b.attr_id', 'LEFT')
                ->where($where)
                ->order('sort_order asc')
                ->select();
        } else {
            // 旧版参数
            /*当前栏目下的属性*/
            $row = M('product_attr')->alias('a')
                ->field('a.attr_value,b.attr_id,b.attr_name')
                ->join('__PRODUCT_ATTRIBUTE__ b', 'a.attr_id = b.attr_id', 'LEFT')
                ->where([
                    'a.aid'     => $aid,
                    'b.lang'    => $this->home_lang,
                    'b.is_del'  => 0,
                ])
                ->order('b.sort_order asc, a.attr_id asc')
                ->select();
            /*--end*/
            if (empty($row)) {
                return $result;
            } else {
                /*获取多语言关联绑定的值*/
                $row = model('LanguageAttr')->getBindValue($row, 'product_attribute', $this->main_lang); // 多语言
                /*--end*/

                if ('default' == $type) {
                    $newAttribute = array();
                    foreach ($row as $key => $val) {
                        $attr_id = $val['attr_id'];
                        /*字段名称*/
                        $name = 'value_'.$attr_id;
                        $newAttribute[$name] = $val['attr_value'];
                        /*--end*/
                        /*表单提示文字*/
                        $itemname = 'name_'.$attr_id;
                        $newAttribute[$itemname] = $val['attr_name'];
                        /*--end*/
                    }
                    $result[0] = $newAttribute;
                } else if ('auto' == $type) {
                    foreach ($row as $key => $val) {
                        $row[$key] = [
                            'name'  => $val['attr_name'],
                            'value'  => $val['attr_value'],
                        ];
                    }
                    $result = $row;
                }
            }
        }
        return $result;
    }
}