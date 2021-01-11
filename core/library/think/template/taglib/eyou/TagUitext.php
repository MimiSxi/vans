<?php


namespace think\template\taglib\eyou;


/**
 * 纯文本编辑
 */
class TagUitext extends Base
{
    //初始化
    protected function _initialize()
    {
        parent::_initialize();
    }

    /**
     * 纯文本编辑
     * @author wengxianhu by 2018-4-20
     */
    public function getUitext($e_id = '', $e_page = '')
    {
        if (empty($e_id) || empty($e_page)) {
            echo '标签uitext报错：缺少属性 e-id | e-page 。';
            return false;
        }

        $result = false;
        $inc = get_ui_inc_params($e_page);
        $inckey = $this->home_lang."_text_{$e_id}";
        if (empty($inc[$inckey])) {
            $inckey = "text_{$e_id}"; // 兼容v1.2.1之前的数据
        }
        
        $info = false;
        if ($inc && !empty($inc[$inckey])) {
            $data = json_decode($inc[$inckey], true);
            $info = $data['info'];
        }

        $value = '';
        if (is_array($info) && !empty($info)) {
            $value .= isset($info['value']) ? $info['value'] : '';
            $value = htmlspecialchars_decode($value);
        }

        $result = array(
            'value'  => $value,
        );

        return $result;
    }
}