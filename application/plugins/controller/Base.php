<?php


namespace app\plugins\controller;
use app\common\controller\Common;
use think\Db;

class Base extends Common {

    /**
     * 析构函数
     */
    function __construct() 
    {
        parent::__construct();
    }
    
    /*
     * 初始化操作
     */
    public function _initialize() 
    {
        parent::_initialize();
    }
}