<?php


namespace app\admin\model;

use think\Db;
use think\Model;

/**
 * 视频文件
 */
class MediaFile extends Model
{
    //初始化
    protected function initialize()
    {
        // 需要调用`Model`的`initialize`方法
        parent::initialize();
    }

    /**
     * 删除单条视频文章的所有视频
     * @author 小虎哥 by 2018-4-3
     */
    public function delVideoFile($aid = array())
    {
        if (!is_array($aid)) {
            $aid = array($aid);
        }
        $file_url_list = Db::name('media_file')->where(['aid'=>['IN', $aid]])->column('file_url');
        $result = Db::name('media_file')->where(['aid'=>['IN', $aid]])->delete();
        if ($result !== false) {
            Db::name('media_log')->where(['aid'=>['IN', $aid]])->delete();
            foreach ($file_url_list as $key => $val) {
                $file_url_tmp = preg_replace('#^(/[/\w]+)?(/uploads/media/)#i', '.$2', $val);
                if (!is_http_url($val) && file_exists($file_url_tmp)) {
                    @unlink($file_url_tmp);
                }
            }
        }
        \think\Cache::clear('media_file');

        return $result;
    }
    
    /**
     * 获取指定下载文章的所有文件
     * @author 小虎哥 by 2018-4-3
     */
    public function getMediaFile($aid, $field = '*')
    {
        $result = Db::name('media_file')->field($field)
            ->where('aid', $aid)
            ->order('file_id asc')
            ->select();

        return $result;
    }

    /**
     * 保存视频文章的视频
     * @author 小虎哥 by 2018-4-3
     */
    public function savefile($aid, $video_files = [], $opt = 'add')
    {
        if (!empty($video_files)) {
            if ('add' == $opt) {
                Db::name('media_file')->insertAll($video_files);
            } else if ('edit' == $opt) {
                $file_url_list = Db::name('media_file')->where('aid',$aid)->column('file_url');
                Db::name('media_file')->where('aid',$aid)->delete();
                $r = Db::name('media_file')->insertAll($video_files);
                if ($r !== false) {
                    \think\Cache::clear('media_file');
                    foreach ($video_files as $k => $v) {
                        $index_key = array_search($v['file_url'], $file_url_list);
                        if (false !== $index_key && 0 <= $index_key) {
                            unset($file_url_list[$index_key]);
                        }
                    }
                    try {
                        foreach ($file_url_list as $key => $val) {
                            $file_url_tmp = preg_replace('#^(/[/\w]+)?(/uploads/media/)#i', '.$2', $val);
                            if (!is_http_url($val) && file_exists($file_url_tmp)) {
                                @unlink($file_url_tmp);
                            }
                        }
                    } catch (\Exception $e) {}
                }
            }
        }
    }
}