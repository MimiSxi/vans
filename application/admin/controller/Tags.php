<?php


namespace app\admin\controller;

use think\Db;
use think\Page;

class Tags extends Base
{
    public function index()
    {
        /*纠正tags标签的文档数*/
        $this->correct();
        /*end*/

        $list = array();
        $keywords = input('keywords/s');

        $condition = array();
        if (!empty($keywords)) {
            $condition['tag'] = array('LIKE', "%{$keywords}%");
        }

        // 多语言
        $condition['lang'] = array('eq', $this->admin_lang);

        $tagsM =  M('tagindex');
        $count = $tagsM->where($condition)->count('id');// 查询满足要求的总记录数
        $Page = $pager = new Page($count, config('paginate.list_rows'));// 实例化分页类 传入总记录数和每页显示的记录数
        $list = $tagsM->where($condition)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('list',$list);// 赋值数据集
        $this->assign('pager',$pager);// 赋值分页对象
        return $this->fetch();
    }
 
    public function tag_list()
    {
        /*纠正tags标签的文档数*/
        $this->correct();
        /*end*/

        // 多语言
        $condition['lang'] = array('eq', $this->admin_lang);

        $tagsM =  M('tagindex');

        $count = $tagsM->where($condition)->count('id');
        $Page = $pager = new Page($count, 100);
        $show = $Page->show();

        $order = 'total desc, id desc, monthcc desc, weekcc desc';
        $list = $tagsM->where($condition)->order($order)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        
        $this->assign('page',$show);
        $this->assign('list',$list);
        $this->assign('pager',$pager);

        return $this->fetch();
    }

    /**
     * 编辑
     */    
    public function edit()
    {
        if (IS_POST) {
            $post = input('post.');
            if (empty($post['id'])) $this->error('操作异常');
            $updata = [
                'add_time' => time(),
                'seo_title' => !empty($post['tag_seo_title']) ? $post['tag_seo_title'] : '',
                'seo_keywords' => !empty($post['tag_seo_keywords']) ? $post['tag_seo_keywords'] : '',
                'seo_description' => !empty($post['tag_seo_description']) ? $post['tag_seo_description'] : ''
            ];
            $ResultID = Db::name('tagindex')->where('id', $post['id'])->update($updata);
            if (!empty($ResultID)) {
                $this->success('操作成功');
            } else {
                $this->error('操作异常');
            }
        }

        $id = input('id/d');
        if (empty($id)) $this->error('操作异常');

        $Result = Db::name('tagindex')->where('id', $id)->find();
        if (empty($Result)) $this->error('操作异常');
        $this->assign('tag', $Result);

        $this->assign('backurl', url('Tags/index'));
        return $this->fetch();
    }

    /**
     * 删除
     */
    public function del()
    {
        if (IS_POST) {
            $id_arr = input('del_id/a');
            $id_arr = eyIntval($id_arr);
            if(!empty($id_arr)){
                $result = M('tagindex')->field('tag')
                    ->where([
                        'id'    => ['IN', $id_arr],
                        'lang'  => $this->admin_lang,
                    ])->select();
                $title_list = get_arr_column($result, 'tag');

                $r = M('tagindex')->where([
                        'id'    => ['IN', $id_arr],
                        'lang'  => $this->admin_lang,
                    ])->delete();
                if($r){
                    M('taglist')->where([
                        'tid'    => ['IN', $id_arr],
                        'lang'  => $this->admin_lang,
                    ])->delete();
                    adminLog('删除Tags标签：'.implode(',', $title_list));
                    $this->success('删除成功');
                }else{
                    $this->error('删除失败');
                }
            } else {
                $this->error('参数有误');
            }
        }
        $this->error('非法访问');
    }
    
    /**
     * 清空
     */
    public function clearall()
    {
        $r = M('tagindex')->where([
                'lang'  => $this->admin_lang,
            ])->delete();
        if(false !== $r){
            M('taglist')->where([
                'lang'  => $this->admin_lang,
            ])->delete();
            adminLog('清空Tags标签');
            $this->success('操作成功');
        }else{
            $this->error('操作失败');
        }
    }

    /**
     * 纠正tags文档数
     */
    private function correct()
    {
        $taglistRow = Db::name('taglist')->field('count(tid) as total, tid, add_time')
            ->where(['lang'=>$this->admin_lang])
            ->group('tid')
            ->getAllWithIndex('tid');
        $updateData = [];
        $weekup = getTime();
        foreach ($taglistRow as $key => $val) {
            $updateData[] = [
                'id'    => $val['tid'],
                'total' => $val['total'],
                'weekup'    => $weekup,
                'add_time'  => $val['add_time'] + 1,
            ];
        }
        if (!empty($updateData)) {
            $r = model('Tagindex')->saveAll($updateData);
            if (false !== $r) {
                // Db::name('tagindex')->where(['weekup'=>['lt', $weekup],'lang'=>$this->admin_lang])->delete();
            }
        }
    }
}