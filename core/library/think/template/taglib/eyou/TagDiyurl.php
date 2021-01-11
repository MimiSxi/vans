<?php


namespace think\template\taglib\eyou;

class TagDiyurl extends Base
{
    protected function _initialize()
    {
        parent::_initialize();
    }

    public function getDiyurl($type = 'tags')
    {
        $parseStr = "";
        
        switch ($type){
            case "tags":     // 标签主页
                $parseStr = url('home/Tags/index');
                break;
            case "login":     // 登录
                $parseStr = url('user/Users/login');
                break;
            case "reg":     // 注册
                $parseStr = url('user/Users/reg');
                break;
            case "mobile":     // 发送手机短信方法
            case "Mobile":     // 发送手机短信方法
                $parseStr = url('api/Ajax/SendMobileCode');
                break;
            case "sindex":     // 搜索主页
                $parseStr = url('home/Search/index');
                break;
            default:
                $parseStr = "";
                break;
        }

        return $parseStr;
    }
}