<?php


namespace app\admin\controller;

use think\Page;
use think\Db;

class Area extends Base
{
    private $area_system_id = array(); // 系统默认位置ID，不可删除

    public function _initialize() {
        parent::_initialize();
    }

    public function index()
    {
        $list = array();
        $get = input('get.');
        $keywords = input('keywords/s');
        $condition = [];
        // 应用搜索条件
        foreach (['keywords'] as $key) {
            if (isset($get[$key]) && $get[$key] !== '') {
                if ($key == 'keywords') {
                    $condition['a.title'] = array('LIKE', "%{$get[$key]}%");
                } else {
                    $tmp_key = 'a.'.$key;
                    $condition[$tmp_key] = array('eq', $get[$key]);
                }
            }
        }
        
        $areaM =  M('area_tab');
        $count = $areaM->alias('a')->where($condition)->count();// 查询满足要求的总记录数
        $Page = new Page($count, config('paginate.list_rows'));// 实例化分页类 传入总记录数和每页显示的记录数
        $list = $areaM->alias('a')->where($condition)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        // 获取指定位置的区域数目
        $cid = get_arr_column($list, 'id');
        $ad_list = M('ad')->field('pid, count(id) AS has_children')
            ->where([
                'pid'   => ['IN', $cid],
                'lang'  => $this->admin_lang,
            ])->group('pid')
            ->getAllWithIndex('pid');
        $this->assign('ad_list', $ad_list);

        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('list',$list);// 赋值数据集
        $this->assign('pager',$Page);// 赋值分页对象
        return $this->fetch();
    }
    
    /**
     * 新增
     */
    public function add()
    {
        //防止php超时
        function_exists('set_time_limit') && set_time_limit(0);

        if (IS_POST) {
            $post = input('post.');

            $map = array(
                'title' => trim($post['title']),
            );
            if(M('area_tab')->where($map)->count() > 0){
                $this->error('该区域名称已存在，请检查', url('Area/index'));
            }

            // 添加区域位置表信息
            $data = array(
                'title'       => trim($post['title']),
                'status'       => 1,
                'create_people'    => session('admin_id'),
                'create_time'    => getTime(),
                'change_time' => getTime(),
            );
            $insertId = M('area_tab')->insertGetId($data);

            if ($insertId) {
                adminLog('新增区域：'.$post['title']);
                $this->success("操作成功", url('Area/index'));
            } else {
                $this->error("操作失败", url('Area/index'));
            }
            exit;
        }

        return $this->fetch();
    }

    /**
     * 编辑
     */
    public function edit()
    {
        if (IS_POST) {
            $post = input('post.');
            if(!empty($post['id'])){
                if(array_key_exists($post['id'], $this->area_system_id)){
                    $this->error("不可更改系统预定义位置", url('Area/edit',array('id'=>$post['id'])));
                }

                $map = array(
                    'id'    => array('NEQ', $post['id']),
                    'title' => trim($post['title']),
                );

                if(Db::name('area_tab')->where($map)->count() > 0){
                    $this->error('该区域名称已存在，请检查', url('Area/index'));
                }

                $data = array(
                    'id'          => $post['id'],
                    'title'       => trim($post['title']),
                    'change_people'    => session('admin_id'),
                    'change_time' => getTime(),
                );
                $r = Db::name('area_tab')->update($data);
            }

            if ($r) {
                adminLog('编辑区域：'.$post['title']);
                $this->success("操作成功", url('Area/index'));
            } else {
                $this->error("操作失败");
            }
        }

        $assign_data = array();

        $id = input('id/d');
        $field = M('area_tab')->field('a.*')
            ->alias('a')
            ->where(array('a.id'=>$id))
            ->find();
        if (empty($field)) {
            $this->error('区域不存在，请联系管理员！');
            exit;
        }
        $assign_data['field'] = $field;

        // 区域
        $area_data = Db::name('area_tab')->where(array('id'=>$field['id']))->order('sort_order asc')->select();
        foreach ($area_data as $key => $val) {
            $area_data[$key]['litpic'] = handle_subdir_pic($val['litpic']); // 支持子目录
        }
        $assign_data['area_data'] = $area_data;
        
        $this->assign($assign_data);
        return $this->fetch();
    }

    /**
     * 删除
     */
    public function del()
    {
        $id_arr = input('del_id/a');
        $id_arr = eyIntval($id_arr);
        if(IS_POST && !empty($id_arr)){
            foreach ($id_arr as $key => $val) {
                if(array_key_exists($val, $this->area_system_id)){
                    $this->error('系统预定义，不能删除');
                }
            }
            $r = M('area_tab')->where('id','IN',$id_arr)->delete();
            if ($r) {
                adminLog('删除区域-id：'.implode(',', $id_arr));
                $this->success('删除成功');
            } else {
                $this->error('删除失败');
            }
        }else{
            $this->error('参数有误');
        }
    }
}