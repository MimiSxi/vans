<?php


namespace think\template\taglib\eyou;

use think\Request;

/**
 * 搜索表单
 */
class TagSpsearch extends Base
{
    //初始化
    protected function _initialize()
    {
        parent::_initialize();
    }

    /**
     * 订单获取搜索
     */
    public function getSpsearch()
    {
        $hidden = '';
        $ey_config = config('ey_config'); // URL模式
        if (2 == $ey_config['seo_pseudo'] || (1 == $ey_config['seo_pseudo'] && 1 == $ey_config['seo_dynamic_format'])) {
            $hidden .= '<input type="hidden" name="m" value="user" />';
            $hidden .= '<input type="hidden" name="c" value="Shop" />';
            $hidden .= '<input type="hidden" name="a" value="shop_centre" />';
            /*多语言*/
            $lang = Request::instance()->param('lang/s');
            !empty($lang) && $hidden .= '<input type="hidden" name="lang" value="'.$lang.'" />';
            /*--end*/
        }

        // 搜索的URL
        $searchurl = url('user/Shop/shop_centre');

        $result[0] = array(
            'action'    => $searchurl,
            'hidden'    => $hidden,
        );
        
        return $result;
    }
}