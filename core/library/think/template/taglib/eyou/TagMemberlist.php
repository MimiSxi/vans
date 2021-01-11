<?php


namespace think\template\taglib\eyou;

use think\Db;

/**
 * 用户列表
 */
class TagMemberlist extends Base
{
    //初始化
    protected function _initialize()
    {
        parent::_initialize();
    }

    /**
     * 获取用户列表
     * @author 小虎哥 by 2018-4-20
     */
    public function getMemberlist($limit = '', $orderby = '', $orderway = '', $js = '', $attarray = '')
    {
        /*加载js*/
        if (empty($js)) {
            $data = $this->getMemberlistJs($attarray);
            return $data;
        }
        /*end*/

        $condition = [
            'admin_id'  => 0,
            'lang'      => $this->home_lang,
        ];

        switch ($orderby) {
            case 'logintime': // 兼容织梦的写法
            case 'last_login':
                $orderby = "last_login {$orderway}";
                break;

            case 'users_id':
                $orderby = "users_id {$orderway}";
                break;
                
            case 'regtime':
            case 'reg_time':
                $orderby = "reg_time {$orderway}";
                break;

            default:
            {
                $fieldList = Db::name('users')->getTableFields();
                if (in_array($orderby, $fieldList)) {
                    $orderby = "{$orderby} {$orderway}";
                } else {
                    $orderby = "users_id desc";
                }
                break;
            }
        }

        $list = Db::name("users")->field('password,paypwd', true)
            ->where($condition)
            ->order($orderby)
            ->limit($limit)
            ->select();
        if (empty($list)) {
            return false;
        }

        foreach ($list as $key => $val) {
            $val['head_pic'] = get_head_pic($val['head_pic']);
            $list[$key] = $val;
        }

        return $list;
    }

    /**
     * 获取用户列表的JS
     * @author 小虎哥 by 2018-4-20
     */
    private function getMemberlistJs($attarray = '')
    {
        $result = [];
        $t_uniqid = md5(getTime().uniqid(mt_rand(), TRUE));
        $txtid = "ey_".md5("memberlist_txt_{$t_uniqid}");
        $result['txtid'] = $txtid;
        $result['root_dir'] = $this->root_dir;
        $result['attarray'] = $attarray;
        $result_json = json_encode($result);
        $version = getCmsVersion();
        $hidden = <<<EOF
<script type="text/javascript" src="{$this->root_dir}/public/static/common/js/tag_memberlist.js?v={$version}"></script>
<script type="text/javascript">
    var tag_memberlist_result_json = {$result_json};
    tag_memberlist(tag_memberlist_result_json);
</script>
EOF;

        $data = [
            'txtid'     => $txtid,
            'hidden'    => $hidden,
        ];

        return $data;
    }
}