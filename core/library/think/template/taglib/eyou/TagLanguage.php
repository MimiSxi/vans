<?php


namespace think\template\taglib\eyou;

/**
 * 多语言列表
 */
class TagLanguage extends Base
{
    public $currentstyle = '';
    
    //初始化
    protected function _initialize()
    {
        parent::_initialize();
    }

    /**
     * 获取多语言列表
     * @author 小虎哥 by 2018-4-20
     */
    public function getLanguage($type = 'default', $limit = '', $currentstyle = '')
    {
        $this->currentstyle = $currentstyle;
        
        $map = ['status'=>1];
        if ('default' == $type) {
            $map['mark'] = ['NEQ', $this->home_lang];
        }

        /*关闭多语言*/
        $web_language_switch = tpCache('web.web_language_switch');
        if (0 == intval($web_language_switch)) {
            return [];
        }
        /*--end*/

        $result = M("language")->where($map)
            ->order('sort_order asc')
            ->limit($limit)
            // ->cache(true,EYOUCMS_CACHE_TIME,"language")
            ->select();

        /*去掉入口文件*/
        $inletStr = '/index.php';
        $seo_inlet = config('ey_config.seo_inlet');
        1 == intval($seo_inlet) && $inletStr = '';
        /*--end*/

        foreach ($result as $key => $val) {
            $val['target'] = ($val['target'] == 1) ? 'target="_blank"' : 'target="_self"';
            $val['logo'] = get_default_pic("/public/static/common/images/language/{$val['mark']}.gif");

            /*单独域名*/
            $url = $val['url'];
            if (empty($url)) {
                if (1 == $val['is_home_default']) {
                    $url = $this->root_dir.'/'; // 支持子目录
                } else {
                    $seoConfig = tpCache('seo', [], $val['mark']);
                    $seo_pseudo = !empty($seoConfig['seo_pseudo']) ? $seoConfig['seo_pseudo'] : config('ey_config.seo_pseudo');
                    if (1 == $seo_pseudo) {
                        $url = request()->domain().$this->root_dir.$inletStr; // 支持子目录
                        if (!empty($inletStr)) {
                            $url .= '?';
                        } else {
                            $url .= '/?';
                        }
                        $url .= http_build_query(['lang'=>$val['mark']]);
                    } else {
                        $url = $this->root_dir.$inletStr.'/'.$val['mark']; // 支持子目录
                    }
                }
            }
            $val['url'] = $url;
            /*--end*/
            
            /*标记被选中效果*/
            if ($val['mark'] == $this->home_lang) {
                $val['currentstyle'] = $this->currentstyle;
            } else {
                $val['currentstyle'] = '';
            }
            /*--end*/

            $result[$key] = $val;
        }

        return $result;
    }
}