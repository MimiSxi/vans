<?php

namespace app\user\controller;

use think\Db;
use think\Page;


class Info extends Base
{

    public function _initialize()
    {
        parent::_initialize();

    }

    public function index()
    {
        return $this->fetch('users/info_index');
    }

    // 更改密码
    public function change_pwd($op, $np, $nnp)
    {
        $aa = "";
        if (empty($op)) {
            $aa = "原密码不能为空！";
            return $aa;
        } else if (empty($np)) {
            $aa = "新密码不能为空！";
            return $aa;
        } else if ($np != $nnp) {
            $aa = "重复密码与新密码不一致！";
            return $aa;
        }

        $u = DB::name('users')->where('users_id', session('users_id'))->find();

        if (!empty($u)) {
            if (strval($u['password']) !== strval(func_encrypt($op))) {
                $aa = "原密码错误，请重新输入！";
                return $aa;
            }

            if (strval($u['password']) == strval(func_encrypt($np))) {
                $aa = "新密码不能与原密码相同，请重新输入！";
                return $aa;
            }

            $data = array(
                'password' => func_encrypt($np),
                'update_time' => getTime(),
            );
            $r = Db::name('users')->where('users_id', session('users_id'))->update($data);

            if ($r) {
                $aa = "修改成功";
                return $aa;
            }
            $aa = "修改失败";
            return $aa;
        }

        return $aa;
    }
}