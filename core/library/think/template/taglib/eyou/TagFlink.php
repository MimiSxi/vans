<?php


namespace think\template\taglib\eyou;


/**
 * 友情链接
 */
class TagFlink extends Base
{
    //初始化
    protected function _initialize()
    {
        parent::_initialize();
    }

    /**
     * 获取友情链接
     * @author wengxianhu by 2018-4-20
     */
    public function getFlink($type = 'text', $limit = '')
    {
        if ($type == 'text') {
            $typeid = 1;
        } elseif ($type == 'image') {
            $typeid = 2;
        }

        $map = array();
        if (!empty($typeid)) {
            $map['typeid'] = array('eq', $typeid);
        }
        $map['lang'] = $this->home_lang;
        $map['status'] = 1;
        $result = M("links")->where($map)
            ->order('sort_order asc')
            ->limit($limit)
            ->cache(true,EYOUCMS_CACHE_TIME,"links")
            ->select();
        foreach ($result as $key => $val) {
            $val['logo'] = get_default_pic($val['logo']);
            $val['target'] = ($val['target'] == 1) ? 'target="_blank"' : 'target="_self"';
            $result[$key] = $val;
        }

        return $result;
    }
}