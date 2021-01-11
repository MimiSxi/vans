<?php

namespace app\common\model;

use think\Db;
use think\Model;

/**
 * 公共用户模型
 */
class EyouUsers extends Model
{
    //初始化
    protected function initialize()
    {
        // 需要调用`Model`的`initialize`方法
        parent::initialize();
    }

    // 更新用户级别信息
    public function UpUsersLevelData($users_id = null)
    {
        $LevelData = [];
        /*查询系统初始的默认级别*/
        $LevelWhere = [
            'level_id'  => 1,
            'is_system' => 1,
            'lang'      => get_home_lang(),
        ];
        $level = M('users_level')->where($LevelWhere)->field('level_id,level_name,level_value')->find();
        if (empty($level)) $level = ['level'=>1, 'level_name'=>'注册用户', 'level_value'=>10];
        /* END */

        /*更新信息*/
        $LevelData = [
            'level'           => $level['level_id'],
            'open_level_time' => 0,
            'level_maturity_days' => 0,
            'update_time'     => getTime(),
        ];
        $return = M('users')->where('users_id', $users_id)->update($LevelData);
        /* END */

        if (!empty($return)) {
            $LevelData['level_name']  = $level['level_name'];
            $LevelData['level_value'] = $level['level_value'];
            return $LevelData;
        }

        return [];
    }

    // 用户登录之后的业务逻辑
    public function loginAfter($users)
    {
        session('users', $users);
        session('users_id', $users['users_id']);
        setcookie('users_id', $users['users_id'], null);

        $data = [
            'last_ip'     => clientIP(),
            'last_login'  => getTime(),
            'login_count' => Db::raw('login_count+1'),
        ];
        Db::name('users')->where('users_id', $users['users_id'])->update($data);
    }
}