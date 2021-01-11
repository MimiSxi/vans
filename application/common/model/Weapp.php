<?php


namespace app\common\model;

use think\Db;
use think\Model;

/**
 * 插件模型
 */
class Weapp extends Model
{
    //初始化
    protected function initialize()
    {
        // 需要调用`Model`的`initialize`方法
        parent::initialize();
    }

    /**
     * 获取插件列表所有信息，方便系统其它地方使用
     */
    public function getWeappList($code = '')
    {
        $result = extra_cache('common_weapp_getWeappList');
        if (empty($result)) {
            $result = Db::name('weapp')->getAllWithIndex('code');
            foreach ($result as $key => &$value) {
                try {
                    if (!empty($value['data']) && $value['data']!="[]") {
                        $value['data'] = unserialize($value['data']);
                    }
                    if (!empty($value['config'])) {
                        $value['config'] = json_decode($value['config'], true);
                    }
                } catch (\Exception $e) {}
            }
            extra_cache('common_weapp_getWeappList', $result);
        }

        !empty($code) && $result = $result[$code];

        return $result;
    }
}