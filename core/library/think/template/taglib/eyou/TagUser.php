<?php


namespace think\template\taglib\eyou;

use think\Db;

/**
 * 用户中心
 */
class TagUser extends Base
{
    /**
     * 用户ID
     */
    public $users_id = 0;

    //初始化
    protected function _initialize()
    {
        parent::_initialize();
        // 用户信息
        $this->users_id = session('users_id');
        $this->users_id = !empty($this->users_id) ? $this->users_id : 0;
    }

    /**
     * 用户中心
     * @author wengxianhu by 2018-4-20
     */
    public function getUser($type = 'default', $img = '', $currentstyle = '', $txt = '', $txtid = '', $afterhtml = '')
    {
        $result = false;

        if ($this->home_lang != $this->main_lang) {
            return false;
        }

        $web_users_switch = tpCache('web.web_users_switch');
        $users_open_register = getUsersConfigData('users.users_open_register');

        if ('open' == $type) {
            if (empty($web_users_switch) || 1 == $users_open_register) {
                return false;
            }
        }

        if (1 == intval($web_users_switch)) {
            if (empty($users_open_register)) {
                $url = '';
                $t_uniqid = '';
                switch ($type) {
                    case 'login':
                    case 'centre':
                    case 'reg':
                    case 'logout':
                    case 'cart':
                        if ('cart' == $type) {
                            $shop_open = getUsersConfigData('shop.shop_open');
                            if (empty($shop_open)) return false; // 关闭商城中心，同时隐藏购物车入口
                            $url = url('user/Shop/shop_cart_list');
                        } else if ('reg' == $type) {
                            $users_open_reg = getUsersConfigData('users.users_open_reg');
                            if (isset($users_open_reg) && 1 == $users_open_reg) return false;
                            $url = url('user/Users/'.$type);
                        } else {
                            $url = url('user/Users/'.$type);
                        } 

                        $t_uniqid = md5(getTime().uniqid(mt_rand(), TRUE));
                        // A标签ID
                        $result['id'] = md5("ey_{$type}_{$this->users_id}_{$t_uniqid}");
                        // A标签里的文案ID
                        $result['txtid'] = !empty($txtid) ? md5($txtid) : md5("ey_{$type}_txt_{$this->users_id}_{$t_uniqid}");
                        // 文字文案
                        $result['txt'] = $txt;
                        // 购物车的数量ID
                        $result['cartid'] = md5("ey_{$type}_cartid_{$this->users_id}_{$t_uniqid}");
                        // IMG标签里的ID
                        // $result['imgid'] = md5("ey_{$type}_img_{$this->users_id}_{$t_uniqid}");
                        // 图片文案
                        $result['img'] = $img;
                        // 链接
                        $result['url'] = $url;
                        // 标签类型
                        $result['type'] = $type;
                        // 图片样式类
                        $result['currentstyle'] = $currentstyle;
                        // 登陆后显示的Html代码
                        $result['afterhtml'] = $afterhtml;
                        break;

                    case 'info':
                        $t_uniqid = md5(getTime().uniqid(mt_rand(), TRUE));
                        $result = $this->getUserInfo();
                        foreach ($result as $key => $val) {
                            $html_key = md5($key.'-'.$t_uniqid);
                            $result[$key] = $html_key;
                        }
                        $result['t_uniqid'] = $t_uniqid;
                        $result['id'] = $t_uniqid;
                        break;

                    case 'open':
                        break;

                    default:
                        return false;
                        break;
                }

                if ('login' == $type) {
                    if (isMobile() && isWeixin()) {
                        // 微信端和小程序则使用这个url
                        $result['url'] = url('user/Users/users_select_login');
                    }
                }

                // 子目录
                $result['root_dir'] = $this->root_dir;

                $result_json = json_encode($result);
                $version = getCmsVersion();

                $hidden = '';
                switch ($type) {
                    case 'login':
                    case 'reg':
                    case 'logout':
                    case 'cart':
                        $hidden = <<<EOF
<script type="text/javascript" src="{$this->root_dir}/public/static/common/js/tag_user.js?v={$version}"></script>
<script type="text/javascript">
    var tag_user_result_json = {$result_json};
    tag_user(tag_user_result_json);
</script>
EOF;
                        break;

                    case 'info':
                        $hidden = <<<EOF
<script type="text/javascript" src="{$this->root_dir}/public/static/common/js/tag_user.js?v={$version}"></script>
<script type="text/javascript">
    var tag_user_result_json = {$result_json};
    tag_user_info(tag_user_result_json);
</script>
EOF;
                        break;
                }
                $result['hidden'] = $hidden;
            }
        }

        return $result;
    }

    /**
     * 获取用户信息
     */
    private function getUserInfo()
    {
        $users = [];
        $tableFields1 = Db::name('users')->getTableFields();
        $tableFields2 = Db::name('users_level')->getTableFields();
        $tableFields = array_merge($tableFields1, $tableFields2);
        foreach ($tableFields as $key => $val) {
            $users[$val] = '';
        }
        $users['url'] = '';
        unset($users['password']);
        unset($users['paypwd']);

        return $users;
    }
}