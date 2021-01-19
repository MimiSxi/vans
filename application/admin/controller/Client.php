<?php


namespace app\admin\controller;

use think\Page;
use think\Db;

class Client extends Base
{
    private $client_system_id = array(); // 系统默认位置ID，不可删除

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

        $clientM = M('client_tab');
        $count = $clientM->alias('a')->where($condition)->count();// 查询满足要求的总记录数
        $Page = new Page($count, config('paginate.list_rows'));// 实例化分页类 传入总记录数和每页显示的记录数
        $list = $clientM->alias('a')->where($condition)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

        // 获取指定位置的区域数目
        $cid = get_arr_column($list, 'id');
        $ad_list = M('ad')->field('pid, count(id) AS has_children')
            ->where([
                'pid' => ['IN', $cid],
                'lang' => $this->admin_lang,
            ])->group('pid')
            ->getAllWithIndex('pid');
        $this->assign('ad_list', $ad_list);

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

//        $this->language_access(); // 多语言功能操作权限

        if (IS_POST) {
            $post = input('post.');

            $map = array(
                'title' => trim($post['title']),
            );
            if (M('client_tab')->where($map)->count() > 0) {
                $this->error('该区域名称已存在，请检查', url('Client/index'));
            }

            // 添加区域位置表信息
            $data = array(
                'title' => trim($post['title']),
                'create_people' => session('admin_id'),
                'create_time' => getTime(),
                'change_time' => getTime(),
            );
            $insertId = M('client_tab')->insertGetId($data);

            if ($insertId) {
                // 读取组合区域位的图片及信息
                $i = '1';
                foreach ($post['img_litpic'] as $key => $value) {
                    // 主要参数
                    $AdData['id'] = $insertId;
                    $AdData['title'] = trim($post['img_title'][$key]);
                    // 其他参数
                    $AdData['create_people'] = session('admin_id');
                    $AdData['sort_order'] = $i++;
                    $AdData['add_time'] = getTime();
                    $AdData['update_time'] = getTime();
                    // 添加到区域图表
                    $ad_id = Db::name('ad')->add($AdData);
                }
                adminLog('新增区域：' . $post['title']);
                $this->success("操作成功", url('Client/index'));
            } else {
                $this->error("操作失败", url('Client/index'));
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
            if (!empty($post['id'])) {
                if (array_key_exists($post['id'], $this->client_system_id)) {
                    $this->error("不可更改系统预定义位置", url('Client/edit', array('id' => $post['id'])));
                }

                $map = array(
                    'id' => array('NEQ', $post['id']),
                    'title' => trim($post['title']),
                    'lang' => $this->admin_lang,
                );

                if (Db::name('client_tab')->where($map)->count() > 0) {
                    $this->error('该区域名称已存在，请检查', url('Client/index'));
                }

                $data = array(
                    'id' => $post['id'],
                    'title' => trim($post['title']),
                    'intro' => $post['intro'],
                    'update_time' => getTime(),
                );
                $r = Db::name('client_tab')->update($data);
            }

            if ($r) {
                $i = '1';
                $ad_db = Db::name('ad');
                // 读取组合区域位的图片及信息
                foreach ($post['img_litpic'] as $key => $value) {
                    if (!empty($value)) {
                        // 是否新窗口打开
                        if (!empty($post['img_target'][$key])) {
                            $target = '1';
                        } else {
                            $target = '0';
                        }
                        // 区域位ID，为空则表示添加
                        $ad_id = $post['img_id'][$key];
                        if (!empty($ad_id)) {
                            // 查询更新条件
                            $where = [
                                'id' => $ad_id,
                                'lang' => $this->admin_lang,
                            ];
                            if ($ad_db->where($where)->count() > 0) {
                                // 主要参数
                                $AdData['litpic'] = $value;
                                $AdData['title'] = $post['img_title'][$key];
                                $AdData['links'] = $post['img_links'][$key];
                                $AdData['intro'] = $post['img_intro'][$key];
                                $AdData['target'] = $target;
                                // 其他参数
                                $AdData['sort_order'] = $i++;
                                $AdData['update_time'] = getTime();
                                // 更新，不需要同步多语言
                                $ad_db->where($where)->update($AdData);
                            } else {
                                // 主要参数
                                $AdData['litpic'] = $value;
                                $AdData['pid'] = $post['id'];
                                $AdData['title'] = $post['img_title'][$key];
                                $AdData['links'] = $post['img_links'][$key];
                                $AdData['intro'] = $post['img_intro'][$key];
                                $AdData['target'] = $target;
                                // 其他参数
                                $AdData['media_type'] = 1;
                                $AdData['admin_id'] = session('admin_id');
                                $AdData['lang'] = $this->admin_lang;
                                $AdData['sort_order'] = $i++;
                                $AdData['add_time'] = getTime();
                                $AdData['update_time'] = getTime();
                                $ad_id = $ad_db->add($AdData);
                            }
                        } else {
                            // 主要参数
                            $AdData['litpic'] = $value;
                            $AdData['pid'] = $post['id'];
                            $AdData['title'] = $post['img_title'][$key];
                            $AdData['links'] = $post['img_links'][$key];
                            $AdData['intro'] = $post['img_intro'][$key];
                            $AdData['target'] = $target;
                            // 其他参数
                            $AdData['media_type'] = 1;
                            $AdData['admin_id'] = session('admin_id');
                            $AdData['lang'] = $this->admin_lang;
                            $AdData['sort_order'] = $i++;
                            $AdData['add_time'] = getTime();
                            $AdData['update_time'] = getTime();
                            $ad_id = $ad_db->add($AdData);
                        }
                    }
                }

                adminLog('编辑区域：' . $post['title']);
                $this->success("操作成功", url('Client/index'));
            } else {
                $this->error("操作失败");
            }
        }

        $assign_data = array();

        $id = input('id/d');
        $field = M('client_tab')->field('a.*')
            ->alias('a')
            ->where(array('a.id' => $id))
            ->find();
        if (empty($field)) {
            $this->error('区域不存在，请联系管理员！');
            exit;
        }
        $assign_data['field'] = $field;

        // 区域
        $ad_data = Db::name('ad')->where(array('pid' => $field['id']))->order('sort_order asc')->select();
        foreach ($ad_data as $key => $val) {
            $ad_data[$key]['litpic'] = handle_subdir_pic($val['litpic']); // 支持子目录
        }
        $assign_data['ad_data'] = $ad_data;

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
                if (array_key_exists($val, $this->client_system_id)) {
                    $this->error('系统预定义，不能删除');
                }
            }

            /*多语言*/
            $attr_name_arr = [];
            foreach ($id_arr as $key => $val) {
                $attr_name_arr[] = 'adp' . $val;
            }
            if (is_language()) {
                $new_id_arr = Db::name('language_attr')->where([
                    'attr_name' => ['IN', $attr_name_arr],
                    'attr_group' => 'client_tab',
                ])->column('attr_value');
                !empty($new_id_arr) && $id_arr = $new_id_arr;
            }
            /*--end*/

            $r = M('client_tab')->where('id', 'IN', $id_arr)->delete();
            if ($r) {

                /*多语言*/
                if (!empty($attr_name_arr)) {
                    M('language_attr')->where([
                        'attr_name' => ['IN', $attr_name_arr],
                        'attr_group' => 'client_tab',
                    ])->delete();
                    M('language_attribute')->where([
                        'attr_name' => ['IN', $attr_name_arr],
                        'attr_group' => 'client_tab',
                    ])->delete();
                }
                /*--end*/

                M('ad')->where('pid', 'IN', $id_arr)->delete();

                adminLog('删除区域-id：' . implode(',', $id_arr));
                $this->success('删除成功');
            } else {
                $this->error('删除失败');
            }
        } else {
            $this->error('参数有误');
        }
    }
}