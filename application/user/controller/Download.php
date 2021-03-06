<?php

namespace app\user\controller;

use think\Db;
use think\Page;

/**
 * 我的下载
 */
class Download extends Base
{
    public function _initialize() {
        parent::_initialize();
    }

    public function index()
    {
        $list = array();

        $condition = array();

        $condition['users_id'] = $this->users_id;

        $count = Db::name('download_log')->where($condition)->count('log_id');// 查询满足要求的总记录数
        $Page = $pager = new Page($count, config('paginate.list_rows'));// 实例化分页类 传入总记录数和每页显示的记录数
        $list = Db::name('download_log')->where($condition)->group('aid')->order('log_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        $aids = [];
        foreach ($list as $key => $val) {
            array_push($aids, $val['aid']);
        }

        $channeltype_row = \think\Cache::get('extra_global_channeltype');

        $archivesList = DB::name('archives')
            ->field("b.*, a.*, a.aid as aid")
            ->alias('a')
            ->join('__ARCTYPE__ b', 'a.typeid = b.id', 'LEFT')
            ->where('a.aid', 'in', $aids)
            ->getAllWithIndex('aid');
        foreach ($archivesList as $key => $val) {
            $controller_name = $channeltype_row[$val['channel']]['ctl_name'];
            $val['arcurl'] = arcurl('home/'.$controller_name.'/view', $val);
            $archivesList[$key] = $val;
        }
        $this->assign('archivesList', $archivesList);

        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('list',$list);// 赋值数据集
        $this->assign('pager',$pager);// 赋值分页对象
        return $this->fetch('users/download_index');
    }
}