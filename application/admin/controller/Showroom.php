<?php


namespace app\admin\controller;

use think\Page;
use think\Db;

class Showroom extends Base
{
    private $showroom_system_id = array(); // 系统默认位置ID，不可删除

    public function _initialize()
    {
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
                    $tmp_key = 'a.' . $key;
                    $condition[$tmp_key] = array('eq', $get[$key]);
                }
            }
        }

        $showRoomM = M('showroom');
        $count = $showRoomM->alias('a')->where($condition)->count();// 查询满足要求的总记录数
        $Page = new Page($count, config('paginate.list_rows'));// 实例化分页类 传入总记录数和每页显示的记录数
        $list = $showRoomM->alias('a')->where($condition)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

        $show = $Page->show();// 分页显示输出
        $this->assign('page', $show);// 赋值分页输出
        $this->assign('list', $list);// 赋值数据集
        $this->assign('pager', $Page);// 赋值分页对象
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

            // 添加区域位置表信息
            $data = array(
                'title' => trim($post['title']),
                'area_id' => trim($post['area_id']),
                'order' => trim($post['order']),
                'remarks' => trim($post['remarks']),
                'create_time' => getTime(),
                'create_people' => session('admin_id'),
            );
            $insertId = M('showroom')->insertGetId($data);

            if ($insertId) {
                adminLog('新增展厅：' . $post['title']);
                $this->success("操作成功", url('Showroom/index'));
            } else {
                $this->error("操作失败", url('Showroom/index'));
            }
            exit;
        }
        $nowArr = Db::name('area_tab')->where('status', 1)->select();

        foreach ($nowArr as $key => $val) {
            $select_html .= '<option value="' . $val['id'] . '">' . $val['title'] . '-' . $val['country'] . '-' . $val['city'] . '-' . $val['counties'] . '</option>';
        }
        $this->assign('area_html', $select_html);
        return $this->fetch();
    }

    /**
     * 编辑
     */
    public function edit()
    {
        if (IS_POST) {
            $post = input('post.');
            if (!empty($post['id'])) {
                if (array_key_exists($post['id'], $this->showroom_system_id)) {
                    $this->error("不可更改系统预定义位置", url('Showroom/edit', array('id' => $post['id'])));
                }
                $data = array(
                    'id' => $post['id'],
                    'title' => trim($post['title']),
                    'area_id' => trim($post['area_id']),
                    'order' => trim($post['order']),
                    'remarks' => trim($post['remarks']),
                );
                $r = Db::name('showroom')->update($data);
            }

            if ($r) {
                adminLog('编辑展厅：' . $post['title']);
                $this->success("操作成功", url('Showroom/index'));
            } else {
                $this->error("操作失败");
            }
        }

        $assign_data = array();

        $id = input('id/d');
        $field = M('showroom')->field('a.*')
            ->alias('a')
            ->where(array('a.id' => $id))
            ->find();
        if (empty($field)) {
            $this->error('展厅不存在，请联系管理员！');
            exit;
        }

        $abc = Db::name('showroom')->where('id', $id)->find();
        $selected = $abc['area_id'];
        $nowArr = Db::name('area_tab')->where('status', 1)->select();

        foreach ($nowArr as $key => $val) {
            if ($val['id'] == $selected) {
                $select_html .= '<option value="' . $val['id'] . '" selected>' . $val['title'] . '-' . $val['country'] . '-' . $val['city'] . '-' . $val['counties'] . '</option>';
            } else {
                $select_html .= '<option value="' . $val['id'] . '">' . $val['title'] . '-' . $val['country'] . '-' . $val['city'] . '-' . $val['counties'] . '</option>';
            }
        }
        $this->assign('area_html', $select_html);

        $assign_data['field'] = $field;

        $this->assign($assign_data);
        return $this->fetch();
    }

    /**
     * 删除
     */
    public function del()
    {
        $this->language_access(); // 多语言功能操作权限

        $id_arr = input('del_id/a');
        $id_arr = eyIntval($id_arr);
        if (IS_POST && !empty($id_arr)) {
            foreach ($id_arr as $key => $val) {
                if (array_key_exists($val, $this->showroom_system_id)) {
                    $this->error('系统预定义，不能删除');
                }
            }

            $r = M('showroom')->where('id', 'IN', $id_arr)->delete();
            if ($r) {
                M('showroom')->where('id', 'IN', $id_arr)->delete();
                adminLog('删除展厅-id：' . implode(',', $id_arr));
                $this->success('删除成功');
            } else {
                $this->error('删除失败');
            }
        } else {
            $this->error('参数有误');
        }
    }
}