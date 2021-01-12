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
            $post    = input('post.');

            /* 处理TAG标签 */
            if (!empty($post['tags_new'])) {
                $post['tags'] = !empty($post['tags']) ? $post['tags'] . ',' . $post['tags_new'] : $post['tags_new'];
                unset($post['tags_new']);
            }

            $post['tags'] = explode(',', $post['tags']);
            $post['tags'] = array_unique($post['tags']);
            $post['tags'] = implode(',', $post['tags']);
            /* END */

            $workid = input('post.addonFieldExt.workid', 0);
            $modifier = input('post.addonFieldExt.modifier', '', null);
            $in_out = input('post.addonFieldExt.inventoryLocation', '', null);
            $BriefIntroduction = input('post.addonFieldExt.BriefIntroduction', '', null);
            $BriefIntroductions = input('post.addonFieldExt.BriefIntroductions', '', null);
            $doTime = input('post.addonFieldExt.doTime', '', null);
            // --存储数据
            $newData = array(
                'productid' => $workid,
                'operator' => $modifier,
                'inorout' => $in_out,
                'operating_time' => strtotime($doTime),
                'description' => $BriefIntroduction,
                'remark' => $BriefIntroductions,
                'add_time' => getTime(),
                'update_time' => getTime(),
            );
            $data    = array_merge($post, $newData);

            $r = Db::name('inandout')->save($data);

            if ($r) {
                $this->success("操作成功!");
                exit;
            }

            $this->error("操作失败!");
            exit;
        }

        $aid = input('param.id/d', 0);
        $this->assign([
            'aid' => $aid,
        ]);

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