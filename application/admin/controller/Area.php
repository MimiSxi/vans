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

        $this->language_access(); // 多语言功能操作权限

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
                'create_people'    => session('admin_id'),
                'create_time'    => getTime(),
                'change_time' => getTime(),
            );
            $insertId = M('area_tab')->insertGetId($data);

            if ($insertId) {
                // 同步区域位置ID到多语言的模板变量里，添加多语言区域位
                $this->syn_add_language_attribute($insertId);
                // 读取组合区域位的图片及信息
                $i = '1';
                foreach ($post['img_litpic'] as $key => $value) {
                        // 主要参数
                        $AdData['id']         = $insertId;
                        $AdData['title']       = trim($post['img_title'][$key]);
                        // 其他参数
                        $AdData['create_people']    = session('admin_id');
                        $AdData['sort_order']  = $i++;
                        $AdData['add_time']    = getTime();
                        $AdData['update_time'] = getTime();
                        // 添加到区域图表
                        $ad_id = Db::name('ad')->add($AdData);
                        // 同步多语言
                        $this->syn_add_ad_language_attribute($ad_id);
                }
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
                    'lang'  => $this->admin_lang,
                );

                if(Db::name('area_tab')->where($map)->count() > 0){
                    $this->error('该区域名称已存在，请检查', url('Area/index'));
                }

                $data = array(
                    'id'          => $post['id'],
                    'title'       => trim($post['title']),
                    'intro'       => $post['intro'],
                    'update_time' => getTime(),
                );
                $r = Db::name('area_tab')->update($data);
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
                        }else{
                            $target = '0';
                        }
                        // 区域位ID，为空则表示添加
                        $ad_id = $post['img_id'][$key];
                        if (!empty($ad_id)) {
                            // 查询更新条件
                            $where = [
                                'id'   => $ad_id,
                                'lang' => $this->admin_lang,
                            ];
                            if ($ad_db->where($where)->count() > 0) {
                                // 主要参数
                                $AdData['litpic']      = $value;
                                $AdData['title']       = $post['img_title'][$key];
                                $AdData['links']       = $post['img_links'][$key];
                                $AdData['intro']       = $post['img_intro'][$key];
                                $AdData['target']      = $target;
                                // 其他参数
                                $AdData['sort_order']  = $i++;
                                $AdData['update_time'] = getTime();
                                // 更新，不需要同步多语言
                                $ad_db->where($where)->update($AdData);
                            }else{
                                // 主要参数
                                $AdData['litpic']      = $value;
                                $AdData['pid']         = $post['id'];
                                $AdData['title']       = $post['img_title'][$key];
                                $AdData['links']       = $post['img_links'][$key];
                                $AdData['intro']       = $post['img_intro'][$key];
                                $AdData['target']      = $target;
                                // 其他参数
                                $AdData['media_type']  = 1;
                                $AdData['admin_id']    = session('admin_id');
                                $AdData['lang']        = $this->admin_lang;
                                $AdData['sort_order']  = $i++;
                                $AdData['add_time']    = getTime();
                                $AdData['update_time'] = getTime();
                                $ad_id = $ad_db->add($AdData);
                                // 同步多语言
                                $this->syn_add_ad_language_attribute($ad_id);
                            }
                        }else{
                            // 主要参数
                            $AdData['litpic']      = $value;
                            $AdData['pid']         = $post['id'];
                            $AdData['title']       = $post['img_title'][$key];
                            $AdData['links']       = $post['img_links'][$key];
                            $AdData['intro']       = $post['img_intro'][$key];
                            $AdData['target']      = $target;
                            // 其他参数
                            $AdData['media_type']  = 1;
                            $AdData['admin_id']    = session('admin_id');
                            $AdData['lang']        = $this->admin_lang;
                            $AdData['sort_order']  = $i++;
                            $AdData['add_time']    = getTime();
                            $AdData['update_time'] = getTime();
                            $ad_id = $ad_db->add($AdData);
                            // 同步多语言
                            $this->syn_add_ad_language_attribute($ad_id);
                        }
                    }
                }

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
        $ad_data = Db::name('ad')->where(array('pid'=>$field['id']))->order('sort_order asc')->select();
        foreach ($ad_data as $key => $val) {
            $ad_data[$key]['litpic'] = handle_subdir_pic($val['litpic']); // 支持子目录
        }
        $assign_data['ad_data'] = $ad_data;
        
        $this->assign($assign_data);
        return $this->fetch();
    }

    /**
     * 删除区域图片
     */
    public function del_imgupload()
    {
        $this->language_access(); // 多语言功能操作权限
        $id_arr = input('del_id/a');
        $id_arr = eyIntval($id_arr);
        if(IS_POST && !empty($id_arr)){
            /*多语言*/
            $attr_name_arr = [];
            foreach ($id_arr as $key => $val) {
                $attr_name_arr[] = 'ad'.$val;
            }

            if (is_language()) {
                $new_id_arr = Db::name('language_attr')->where([
                        'attr_name'  => ['IN', $attr_name_arr],
                        'attr_group'    => 'ad',
                    ])->column('attr_value');
                !empty($new_id_arr) && $id_arr = $new_id_arr;
            }
            /*--end*/

            $r = Db::name('ad')->where([
                    'id' => ['IN', $id_arr],
                ])
                ->cache(true,null,'ad')
                ->delete();
            if ($r) {
                /*多语言*/
                if (!empty($attr_name_arr)) {
                    Db::name('language_attr')->where([
                            'attr_name' => ['IN', $attr_name_arr],
                            'attr_group'    => 'ad',
                        ])->delete();

                    Db::name('language_attribute')->where([
                            'attr_name' => ['IN', $attr_name_arr],
                            'attr_group'    => 'ad',
                        ])->delete();
                }
                /*--end*/
                adminLog('删除区域-id：'.implode(',', $id_arr));
            }
        }
    }

    /**
     * 删除
     */
    public function del()
    {
        $this->language_access(); // 多语言功能操作权限

        $id_arr = input('del_id/a');
        $id_arr = eyIntval($id_arr);
        if(IS_POST && !empty($id_arr)){
            foreach ($id_arr as $key => $val) {
                if(array_key_exists($val, $this->area_system_id)){
                    $this->error('系统预定义，不能删除');
                }
            }

            /*多语言*/
            $attr_name_arr = [];
            foreach ($id_arr as $key => $val) {
                $attr_name_arr[] = 'adp'.$val;
            }
            if (is_language()) {
                $new_id_arr = Db::name('language_attr')->where([
                        'attr_name' => ['IN', $attr_name_arr],
                        'attr_group'    => 'area_tab',
                    ])->column('attr_value');
                !empty($new_id_arr) && $id_arr = $new_id_arr;
            }
            /*--end*/

            $r = M('area_tab')->where('id','IN',$id_arr)->delete();
            if ($r) {

                /*多语言*/
                if (!empty($attr_name_arr)) {
                    M('language_attr')->where([
                            'attr_name' => ['IN', $attr_name_arr],
                            'attr_group'    => 'area_tab',
                        ])->delete();
                    M('language_attribute')->where([
                            'attr_name' => ['IN', $attr_name_arr],
                            'attr_group'    => 'area_tab',
                        ])->delete();
                }
                /*--end*/

                M('ad')->where('pid','IN',$id_arr)->delete();

                adminLog('删除区域-id：'.implode(',', $id_arr));
                $this->success('删除成功');
            } else {
                $this->error('删除失败');
            }
        }else{
            $this->error('参数有误');
        }
    }

    /**
     * 同步新增区域位置ID到多语言的模板变量里
     */
    private function syn_add_language_attribute($adp_id)
    {
        /*单语言情况下不执行多语言代码*/
        if (!is_language()) {
            return true;
        }
        /*--end*/

        $attr_group = 'area_tab';
        $admin_lang = $this->admin_lang;
        $main_lang = $this->main_lang;
        $languageRow = Db::name('language')->field('mark')->order('id asc')->select();
        if (!empty($languageRow) && $admin_lang == $main_lang) { // 当前语言是主体语言，即语言列表最早新增的语言
            $area_db = Db::name('area_tab');
            $result = $area_db->find($adp_id);
            $attr_name = 'adp'.$adp_id;
            $r = Db::name('language_attribute')->save([
                'attr_title'    => $result['title'],
                'attr_name'     => $attr_name,
                'attr_group'    => $attr_group,
                'add_time'      => getTime(),
                'update_time'   => getTime(),
            ]);
            if (false !== $r) {
                $data = [];
                foreach ($languageRow as $key => $val) {
                    /*同步新区域位置到其他语言区域位置列表*/
                    if ($val['mark'] != $admin_lang) {
                        $addsaveData = $result;
                        $addsaveData['lang']  = $val['mark'];
                        $addsaveData['title'] = $val['mark'].$addsaveData['title'];
                        unset($addsaveData['id']);
                        $adp_id = $area_db->insertGetId($addsaveData);
                    }
                    /*--end*/
                    
                    /*所有语言绑定在主语言的ID容器里*/
                    $data[] = [
                        'attr_name' => $attr_name,
                        'attr_value'    => $adp_id,
                        'lang'  => $val['mark'],
                        'attr_group'    => $attr_group,
                        'add_time'      => getTime(),
                        'update_time'   => getTime(),
                    ];
                    /*--end*/
                }
                if (!empty($data)) {
                    model('LanguageAttr')->saveAll($data);
                }
            }
        }
    }

    /**
     * 同步新增区域ID到多语言的模板变量里
     */
   private function syn_add_ad_language_attribute($ad_id)
    {
        /*单语言情况下不执行多语言代码*/
        if (!is_language()) {
            return true;
        }
        /*--end*/

        $attr_group = 'ad';
        $admin_lang = $this->admin_lang;
        $main_lang = get_main_lang();
        $languageRow = Db::name('language')->field('mark')->order('id asc')->select();
        if (!empty($languageRow) && $admin_lang == $main_lang) { // 当前语言是主体语言，即语言列表最早新增的语言
            $ad_db = Db::name('ad');
            $result = $ad_db->find($ad_id);
            $attr_name = 'ad'.$ad_id;
            $r = Db::name('language_attribute')->save([
                'attr_title'    => $result['title'],
                'attr_name'     => $attr_name,
                'attr_group'    => $attr_group,
                'add_time'      => getTime(),
                'update_time'   => getTime(),
            ]);
            if (false !== $r) {
                $data = [];
                foreach ($languageRow as $key => $val) {
                    /*同步新区域到其他语言区域列表*/
                    if ($val['mark'] != $admin_lang) {
                        $addsaveData = $result;
                        $addsaveData['lang'] = $val['mark'];
                        $newPid = Db::name('language_attr')->where([
                                'attr_name' => 'adp'.$result['pid'],
                                'attr_group'    => 'area_tab',
                                'lang'  => $val['mark'],
                            ])->getField('attr_value');
                        $addsaveData['pid']   = $newPid;
                        $addsaveData['title'] = $val['mark'].$addsaveData['title'];
                        unset($addsaveData['id']);
                        $ad_id = $ad_db->insertGetId($addsaveData);
                    }
                    /*--end*/
                    
                    /*所有语言绑定在主语言的ID容器里*/
                    $data[] = [
                        'attr_name'   => $attr_name,
                        'attr_value'  => $ad_id,
                        'lang'        => $val['mark'],
                        'attr_group'  => $attr_group,
                        'add_time'    => getTime(),
                        'update_time' => getTime(),
                    ];
                    /*--end*/
                }
                if (!empty($data)) {
                    model('LanguageAttr')->saveAll($data);
                }
            }
        }
    }
}