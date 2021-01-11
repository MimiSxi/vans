<?php


namespace think\template\taglib\eyou;

use think\Db;

/**
 * 用户菜单
 */
class TagUsermenu extends Base
{
    //初始化
    protected function _initialize()
    {
        parent::_initialize();
    }

    /**
     * 获取用户菜单
     * @author wengxianhu by 2018-4-20
     */
    public function getUsermenu($currentstyle = '', $limit = '')
    {
        $map = array();
        $map['status'] = 1;
        $map['lang'] = $this->home_lang;

        $menuRow = Db::name("users_menu")->where($map)
            ->order('sort_order asc')
            ->limit($limit)
            ->select();
        $result = [];
        foreach ($menuRow as $key => $val) {
            $val['url'] = url($val['mca']);

            /*标记被选中效果*/
            if (preg_match('/^'.MODULE_NAME.'\/'.CONTROLLER_NAME.'\//i', $val['mca'])) {
                $val['currentstyle'] = $currentstyle;
            } else {
                $val['currentstyle'] = '';
            }
            /*--end*/

            $result[] = $val;
        }

        return $result;
    }
}