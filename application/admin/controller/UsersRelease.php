<?php

namespace app\admin\controller;

use think\Db;
use think\Config;

class UsersRelease extends Base {
    /**
     * 构造方法
     */
    public function __construct(){
        parent::__construct();

        // 用户中心配置信息
        $this->UsersConfigData = getUsersConfigData('all');
        $this->assign('userConfig',$this->UsersConfigData);

        // 模型是否开启
        $channeltype_row = \think\Cache::get('extra_global_channeltype');
        $this->assign('channeltype_row',$channeltype_row);
    }

    /**
     * 商城设置
     */
    public function conf(){
        if (IS_POST) {
            $post = input('post.');
            /*栏目处理*/
            $typeids = $post['typeids'];
            unset($post['typeids']);
            /* END */
            if (!empty($post)) {
                foreach ($post as $key => $val) {
                    getUsersConfigData($key, $val);
                }

                /*设置可投稿的栏目*/
                $where = [
                    'id' => ['IN', $typeids],
                ];
                if (0 == $typeids[0]) {
                    $where = [
                        'current_channel' => ['in',[1,2,3,4,5,6,7,8,101,102,103]],
                        'lang' => $this->admin_lang,
                    ];
                }
                $update = [
                    'is_release' => 1,
                    'update_time' => getTime(),
                ];
                if (!empty($where) && !empty($update)) {
                    /*将全部设置为不可投稿*/
                    Db::name('arctype')->where([
                        'current_channel' => ['in',[1,2,3,4,5,6,7,8,101,102,103]],
                        'lang' => $this->admin_lang,
                    ])->update([
                        'is_release' => 0,
                        'update_time' => getTime(),
                    ]);
                    /* END */

                    /*设置选择的栏目为可投稿*/
                    Db::name('arctype')->where($where)->update($update);
                    /* END */
                }
                /* END */
                
                $this->success('设置成功！');
            }
        }

        // 资料上传配置信息
        $UsersC = getUsersConfigData('users');
        $this->assign('UsersC',$UsersC);

        /*允许发布文档列表的栏目*/
        $arctype = Db::name('arctype')->where([
            'current_channel' => ['in',[1,2,3,4,5,6,7,8,101,102,103]],
            'is_release' => 1,
            'lang' => $this->admin_lang,
        ])->field('id')->select();
        $arctype = get_arr_column($arctype,'id');
        $select_html = allow_release_arctype($arctype, [1,2,3,4,5,6,7,8,101,102,103]);
        $this->assign('select_html',$select_html);
        /*--end*/
        return $this->fetch('conf');
    }

    public function ajax_users_level_bout()
    {
        $UsersLevel = Db::name('users_level')->where('lang',$this->admin_lang)->select();
        $LevelCount = count($UsersLevel);

        $this->assign('list',$UsersLevel);
        $this->assign('LevelCount',$LevelCount);
        return $this->fetch();   
    }
}