<?php


namespace app\admin\controller;

use think\Db;
use think\Page;
use app\common\logic\ArctypeLogic;

class InAndOut extends Base
{
    // 允许发布文档的模型ID
    public $allowReleaseChannel = array();

    public function _initialize()
    {
        parent::_initialize();
        $this->allowReleaseChannel = config('global.allow_release_channel');
    }

    public function index()
    {
        $aid = input('param.id/d', 0);
        var_dump($aid);
        var_dump("出入库");
        return $this->fetch("inandout/index");
    }

    // todo 处理参数
    public function add()
    {
        if (IS_POST) {
            $post = input('post.');
            /* 处理TAG标签 */
            if (!empty($post['tags_new'])) {
                $post['tags'] = !empty($post['tags']) ? $post['tags'] . ',' . $post['tags_new'] : $post['tags_new'];
                unset($post['tags_new']);
            }
            $post['tags'] = explode(',', $post['tags']);
            $post['tags'] = array_unique($post['tags']);
            $post['tags'] = implode(',', $post['tags']);
            /* END */

            /*获取第一个html类型的内容，作为文档的内容来截取SEO描述*/
            $contentField = Db::name('channelfield')->where([
                'channel_id' => $this->channeltype,
                'dtype' => 'htmltext',
            ])->getField('name');
            $content = input('post.addonFieldExt.' . $contentField, '', null);
            /*--end*/

            // 根据标题自动提取相关的关键字
            $seo_keywords = $post['seo_keywords'];
            if (!empty($seo_keywords)) {
                $seo_keywords = str_replace('，', ',', $seo_keywords);
            } else {
                // $seo_keywords = get_split_word($post['title'], $content);
            }

            // 自动获取内容第一张图片作为封面图
            $is_remote = !empty($post['is_remote']) ? $post['is_remote'] : 0;
            $litpic = '';
            if ($is_remote == 1) {
                $litpic = $post['litpic_remote'];
            } else {
                $litpic = $post['litpic_local'];
            }
            if (empty($litpic)) {
                $litpic = get_html_first_imgurl($content);
            }
            $post['litpic'] = $litpic;

            /*是否有封面图*/
            if (empty($post['litpic'])) {
                $is_litpic = 0; // 无封面图
            } else {
                $is_litpic = 1; // 有封面图
            }

            // SEO描述
            $seo_description = '';
            if (empty($post['seo_description']) && !empty($content)) {
                $seo_description = @msubstr(checkStrHtml($content), 0, config('global.arc_seo_description_length'), false);
            } else {
                $seo_description = $post['seo_description'];
            }

            // 外部链接跳转
            $jumplinks = '';
            $is_jump = isset($post['is_jump']) ? $post['is_jump'] : 0;
            if (intval($is_jump) > 0) {
                $jumplinks = $post['jumplinks'];
            }

            // 模板文件，如果文档模板名与栏目指定的一致，默认就为空。让它跟随栏目的指定而变
            if ($post['type_tempview'] == $post['tempview']) {
                unset($post['type_tempview']);
                unset($post['tempview']);
            }

            //处理自定义文件名,仅由字母数字下划线和短横杆组成,大写强制转换为小写
            if (!empty($post['htmlfilename'])) {
                $post['htmlfilename'] = preg_replace("/[^a-zA-Z0-9_-]+/", "", $post['htmlfilename']);
                $post['htmlfilename'] = strtolower($post['htmlfilename']);
                //判断是否存在相同的自定义文件名
                $filenameCount = Db::name('archives')->where('htmlfilename', $post['htmlfilename'])->count();
                if (!empty($filenameCount)) {
                    $this->error("自定义文件名已存在，请重新设置！");
                }
            }

            // --存储数据
            $newData = array(
                'typeid' => empty($post['typeid']) ? 0 : $post['typeid'],
                // 作品id
                'workid' => empty($post['workid']) ? 0 : $post['workid'],
                'channel' => $this->channeltype,
                'is_b' => empty($post['is_b']) ? 0 : $post['is_b'],
                'is_head' => empty($post['is_head']) ? 0 : $post['is_head'],
                'is_special' => empty($post['is_special']) ? 0 : $post['is_special'],
                'is_recom' => empty($post['is_recom']) ? 0 : $post['is_recom'],
                'is_jump' => $is_jump,
                'is_litpic' => $is_litpic,
                'jumplinks' => $jumplinks,
                'seo_keywords' => $seo_keywords,
                'seo_description' => $seo_description,
                'admin_id' => session('admin_info.admin_id'),
                'lang' => $this->admin_lang,
                'sort_order' => 100,
                'add_time' => strtotime($post['add_time']),
                'update_time' => strtotime($post['add_time']),
                'designername' => $post['designername'],
            );
            $data = array_merge($post, $newData);

            $aid = $this->archives_db->insertGetId($data);
            $_POST['aid'] = $aid;
            if ($aid) {
                // ---------后置操作
                model('Custom')->afterSave($aid, $data, 'add');
                // ---------end
                adminLog('新增数据：' . $data['title']);

                // 生成静态页面代码
                $successData = [
                    'aid' => $aid,
                    'tid' => $post['typeid'],
                ];
                $this->success("操作成功!", null, $successData);
                exit;
            }

            $this->error("操作失败!");
            exit;
        }
        $aid = input('param.id/d', 0);
        var_dump($aid);
        var_dump("添加出入库");
        return $this->fetch("inandout/add");
    }

    public function edit()
    {
        var_dump("编辑出入库");
    }

    public function del()
    {
        var_dump("删除出入库");
    }
}