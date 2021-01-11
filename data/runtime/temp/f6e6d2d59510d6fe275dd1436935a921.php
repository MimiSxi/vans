<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:46:"./application/admin/template/product\index.htm";i:1596507477;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\layout.htm";i:1596507477;s:84:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\archives\tags_btn.htm";i:1600337629;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="/public/plugins/layui/css/layui.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/page.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/font/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/admin/font/css/font-awesome-ie7.min.css">
<![endif]-->
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var GetUploadify_url = "<?php echo url('Uploadify/upload'); ?>";
    var __root_dir__ = "";
    var __lang__ = "<?php echo $admin_lang; ?>";
</script>  
<link href="/public/static/admin/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/static/admin/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<link type="text/css" rel="stylesheet" href="/public/plugins/tags_input/css/jquery.tagsinput.css?v=<?php echo $version; ?>">
<style type="text/css">html, body { overflow: visible;}</style>
<script type="text/javascript" src="/public/static/admin/js/jquery.js"></script>
<script type="text/javascript" src="/public/plugins/tags_input/js/jquery.tagsinput.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/public/static/admin/js/admin.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/common.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/public/plugins/layui/layui.js"></script>
<script src="/public/static/admin/js/myFormValidate.js"></script>
<script src="/public/static/admin/js/myAjax2.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>
<link href="/public/static/admin/css/diy_style.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css" />
</head>

<body style="background-color: rgb(255, 255, 255); overflow: auto; cursor: default; -moz-user-select: inherit;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="box-shadow:none;">
    <div class="flexigrid">
        <div class="mDiv">
            <div class="ftitle">
                <h3><?php echo (isset($arctype_info['typename']) && ($arctype_info['typename'] !== '')?$arctype_info['typename']:'全部文档'); ?></h3>
                <h5>(共<?php echo $pager->totalRows; ?>条数据)</h5>
            </div>
            <div title="刷新数据" class="pReload"><i class="fa fa-refresh"></i></div>
            <form class="navbar-form form-inline" id="searchForm" action="<?php echo url('Product/index'); ?>" method="get" onsubmit="layer_loading('正在处理');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                <div class="sDiv">
                    <!-- 扩展 -->
    <?php if(is_check_access(CONTROLLER_NAME.'@add') == '1'): ?>
        <div class="fbutton" style="float: none;">
            <a href="<?php if(\think\Request::instance()->param('typeid') > '0'): ?><?php echo url(CONTROLLER_NAME.'/add', ['channel'=>\think\Request::instance()->param('channel'), 'typeid'=>\think\Request::instance()->param('typeid')]); else: ?>javascript:quick_release();<?php endif; ?>">
                <div class="add">
                    <?php if(CONTROLLER_NAME == 'Special'): ?>
                    <span><i class="fa fa-plus"></i>发布专题</span>
                    <?php else: ?>
                    <span><i class="fa fa-plus"></i>发布文档</span>
                    <?php endif; ?>
                </div>
            </a>
        </div>
    <?php endif; if(is_check_access('Tags@index') == '1'): ?>
        <div class="fbutton" style="float: none; display: none;">
            <a href="javascript:void(0);" onClick="tags_list();">
                <div class="add">
                    <span><i class="fa fa-tag"></i>TAG标签管理</span>
                </div>
            </a>
        </div>
        <script type="text/javascript">
            function tags_list(obj)
            {
                var url = "<?php echo url('Tags/index'); ?>";
                //iframe窗
                layer.open({
                    type: 2,
                    title: 'TAG标签管理',
                    fixed: true, //不固定
                    shadeClose: false,
                    shade: 0.3,
                    maxmin: true, //开启最大化最小化按钮
                    area: ['80%', '80%'],
                    content: url
                });
            }
        </script>
    <?php endif; 
        $users_open_release = getUsersConfigData('users.users_open_release');
        $web_users_switch = tpCache('web.web_users_switch');
     ?>
    <div class="sDiv2">  
        <select name="flag" class="select" style="margin:0px 5px;">
            <option value="">--属性--</option>
            <option value="is_head" <?php if(\think\Request::instance()->param('flag') == 'is_head'): ?>selected<?php endif; ?>>头条</option>
            <option value="is_recom" <?php if(\think\Request::instance()->param('flag') == 'is_recom'): ?>selected<?php endif; ?>>推荐</option>
            <option value="is_special" <?php if(\think\Request::instance()->param('flag') == 'is_special'): ?>selected<?php endif; ?>>特荐</option>
            <option value="is_b" <?php if(\think\Request::instance()->param('flag') == 'is_b'): ?>selected<?php endif; ?>>加粗</option>
            <option value="is_litpic" <?php if(\think\Request::instance()->param('flag') == 'is_litpic'): ?>selected<?php endif; ?>>图片</option>
            <option value="is_jump" <?php if(\think\Request::instance()->param('flag') == 'is_jump'): ?>selected<?php endif; ?>>跳转</option>
            <?php if($users_open_release == 1 AND $web_users_switch == 1): ?>
            <option value="is_release" <?php if(\think\Request::instance()->param('flag') == 'is_release'): ?>selected<?php endif; ?>>投稿</option>
            <?php endif; ?>
        </select>
    </div>
<!-- 扩展 -->

    <script type="text/javascript">
        $(document).ready(function(){
            $('#searchForm select[name=flag]').change(function(){
                $('#searchForm').submit();
            });
        });

        function jump_is_release()
        {
            var is_release = $('#searchForm input[name=is_release]').val();
            if (1 == is_release) {
                $('#searchForm input[name=is_release]').val('');
            } else {
                $('#searchForm input[name=is_release]').val('1');
            }
            $('#searchForm').submit();
        }

        function quick_release()
        {
            //iframe窗
            layer.open({
                type: 2,
                title: '快捷发布文档',
                fixed: true, //不固定
                shadeClose: false,
                shade: 0.3,
                maxmin: true, //开启最大化最小化按钮
                area: ['600px', '520px'],
                content: "//<?php echo \think\Request::instance()->host(); ?><?php echo \think\Request::instance()->baseFile(); ?>?m=admin&c=Archives&a=release&iframe=2&lang=<?php echo \think\Request::instance()->param('lang'); ?>",
                success: function(layero, index){
                    // var body = layer.getChildFrame('body', index);
                    // var gourl = $('.curSelectedNode').attr('href');
                    // if (!$.trim(gourl)) {
                    //     gourl = "<?php echo url('Archives/index_archives'); ?>";
                    // }
                    // body.find('input[name=gourl]').val(gourl);
                }
            });
        }
    </script>
                    <div class="sDiv2">
                        <input type="hidden" name="typeid" id="typeid" value="<?php echo (\think\Request::instance()->param('typeid') ?: ''); ?>">
                        <input type="text" size="30" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" class="qsbox" placeholder="标题搜索...">
                        <input type="submit" class="btn" value="搜索">
                    </div>
                    <!-- <div class="sDiv2">
                        <input type="button" class="btn" value="重置" onClick="window.location.href='<?php echo url('Product/index', array("typeid"=>\think\Request::instance()->param('typeid'))); ?>';">
                    </div> -->
                </div>
            </form>
        </div>
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0" style="width: 100%">
                    <thead>
                    <tr>
                        <th class="sign w40" axis="col0">
                            <div class="tc">选择</div>
                        </th>
                        <th abbr="article_title" axis="col3" class="w40">
                            <div class="tc">ID</div>
                        </th>
                        <th align="left" abbr="article_title" axis="col3" class="">
                            <div style="padding-left: 10px;" class="">标题</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">所属栏目</div>
                        </th>
                        <th align="center" abbr="article_time" axis="col6" class="w50">
                            <div class="tc">推荐</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w60">
                            <div class="tc">浏览量</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">发布时间</div>
                        </th>
                        <th axis="col1" class="w180">
                            <div class="tc">操作</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w60">
                            <div class="tc">排序</div>
                        </th>
                       
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="bDiv" style="height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table style="width: 100%;">
                    <tbody>
                    <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                        <tr>
                            <td class="no-data" align="center" axis="col0" colspan="50">
                                <i class="fa fa-exclamation-circle"></i>没有符合条件的记录
                            </td>
                        </tr>
                    <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                        <tr>
                            <td class="sign">
                                <div class="tc w40"><input type="checkbox" name="ids[]" value="<?php echo $vo['aid']; ?>"></div>
                            </td>
                           
                            <td class="sort">
                                <div class="tc w40">
                                    <?php echo $vo['aid']; ?>
                                </div>
                            </td>
                            <td class="" style="width: 100%;">
                                <div class="tl" style="padding-left: 10px;">
                                    <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>
                                    <a href="<?php echo url('Product/edit',array('id'=>$vo['aid'])); ?>" style="<?php if($vo['is_b'] == '1'): ?> font-weight: bold;<?php endif; ?>"><?php echo $vo['title']; ?></a>
                                    <?php else: ?>
                                    <?php echo $vo['title']; endif; $showArcFlagData = showArchivesFlagStr($vo); if(is_array($showArcFlagData) || $showArcFlagData instanceof \think\Collection || $showArcFlagData instanceof \think\Paginator): $i = 0; $__LIST__ = $showArcFlagData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;if($i == '1'): ?><span style="color: red;">[<?php endif; ?>
                                        <i style="font-size: 12px;"><?php echo $vo1['small_name']; ?></i>
                                        <?php if($i == count($showArcFlagData)): ?>]</span><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </td>
                            <td>
                                <div class="w100 tc"><a href="<?php echo url('Product/index', array('typeid'=>$vo['typeid'], 'tab'=>3)); ?>"><?php echo (isset($vo['typename']) && ($vo['typename'] !== '')?$vo['typename']:'<i class="red">数据出错！</i>'); ?></a></div>
                            </td>
                            <td class="">
                                <div class="tc w50">
                                    <?php if($vo['is_recom'] == 1): ?>
                                        <span class="yes" <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>onClick="changeTableVal('archives','aid','<?php echo $vo['aid']; ?>','is_recom',this);"<?php endif; ?> ><i class="fa fa-check-circle"></i>是</span>
                                    <?php else: ?>
                                        <span class="no" <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>onClick="changeTableVal('archives','aid','<?php echo $vo['aid']; ?>','is_recom',this);"<?php endif; ?> ><i class="fa fa-ban"></i>否</span>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="tc w60">
                                    <?php echo $vo['click']; ?>
                                </div>
                            </td>
                            <td align="center" class="">
                                <div class="w100 tc">
                                    <?php echo date('Y-m-d',$vo['add_time']); ?>
                                </div>
                            </td>
                            <td align="center" class="">
                                <div class="w180 tc">
                                    <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>
                                    <a href="<?php echo url('Product/edit',array('id'=>$vo['aid'])); ?>" class="btn blue"><i class="fa fa-pencil-square-o"></i>编辑</a>
                                    <?php endif; if(is_check_access(CONTROLLER_NAME.'@del') == '1'): ?>
                                    <a class="btn red"  href="javascript:void(0);" data-url="<?php echo url('Product/del'); ?>" data-id="<?php echo $vo['aid']; ?>" data-deltype="pseudo" onClick="delfun(this);"><i class="fa fa-trash-o"></i>删除</a>
                                    <?php endif; ?>
                                    <a href="<?php echo $vo['arcurl']; ?>" target="_blank" class="btn blue"><i class="fa fa-pencil-square-o"></i>浏览</a>
                                </div>
                            </td>
                            <td class="sort">
                                <div class="w60 tc">
                                    <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>
                                    <input type="text" onchange="changeTableVal('archives','aid','<?php echo $vo['aid']; ?>','sort_order',this);"  size="4"  value="<?php echo $vo['sort_order']; ?>" />
                                    <?php else: ?>
                                    <?php echo $vo['sort_order']; endif; ?>
                                </div>
                            </td>
                           
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="iDiv" style="display: none;"></div>
        </div>
        <div class="footer-oper">
            <span class="ml15">
                <input type="checkbox" onclick="javascript:$('input[name*=ids]').prop('checked',this.checked);">
            </span>
            <div class="nav-dropup">
                <button class="layui-btn layui-btn-primary dropdown-bt">批量操作<i class="layui-icon layui-icon-up"></i></button>
                <div class="dropdown-menus" style="display:none;">
                    <?php if(is_check_access('Archives@batch_attr') == '1'): ?>
                    <a href="javascript:void(0);" onclick="batch_attr(this, 'ids', '批量新增属性');" data-url="<?php echo url('Archives/batch_attr', ['opt'=>'add']); ?>"><i class="fa fa-plus"></i>新增属性</a>
                    <a href="javascript:void(0);" onclick="batch_attr(this, 'ids', '批量删除属性');" data-url="<?php echo url('Archives/batch_attr', ['opt'=>'del']); ?>"><i class="fa fa-close"></i>删除属性</a>
                    <hr class="layui-bg-gray">
                    <?php endif; if(is_check_access('Archives@batch_copy') == '1'): ?>
                    <a href="javascript:void(0);" onclick="func_batch_copy(this, 'ids');" data-url="<?php echo url('Archives/batch_copy', array('typeid'=>\think\Request::instance()->param('typeid'))); ?>"><i class="fa fa-copy"></i>复制文档</a>
                    <?php endif; if(is_check_access('Archives@move') == '1'): ?>
                    <a href="javascript:void(0);" onclick="func_move(this, 'ids');" data-url="<?php echo url('Archives/move', array('typeid'=>\think\Request::instance()->param('typeid'))); ?>"><i class="fa fa-hdd-o"></i>移动文档</a>
                    <?php endif; if(is_check_access(CONTROLLER_NAME.'@del') == '1'): ?>
                    <a href="javascript:void(0);" onclick="batch_del(this, 'ids');" data-url="<?php echo url('Product/del'); ?>" data-deltype="pseudo"><i class="fa fa-close"></i>删除文档</a>
                    <?php endif; if(is_check_access('Archives@check') == '1'): ?>
                    <a href="javascript:void(0);" onclick="batch_check(this, 'ids');" data-url="<?php echo url('Archives/check'); ?>"><i class="fa fa-check-square-o"></i>审核文档</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php if(is_check_access('RecycleBin@archives_index') == '1'): ?>
            <a href="<?php echo url('RecycleBin/archives_index'); ?>" class="layui-btn layui-btn-primary" title="回收站"><i class="layui-icon layui-icon-delete"></i>回收站</a>
            <?php endif; ?>
        </div>
        <!--分页位置-->
        <?php echo $page; ?>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){

        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });

        // 批量操作
        $(".dropdown-bt").click(function(){
            $(".dropdown-menus").slideToggle(200);
            event.stopPropagation();
        })
        $(document).click(function(){
            $(".dropdown-menus").slideUp(200);
            event.stopPropagation();
        })
    });

    var aids = '';
    function func_move(obj, name)
    {
        var a = [];
        var k = 0;
        aids = '';
        $('input[name^='+name+']').each(function(i,o){
            if($(o).is(':checked')){
                a.push($(o).val());
                if (k > 0) {
                    aids += ',';
                }
                aids += $(o).val();
                k++;
            }
        })
        if(a.length == 0){
            layer.alert('请至少选择一项', {icon: 2, title:false});
            return;
        }

        var url = $(obj).attr('data-url');
        //iframe窗
        layer.open({
            type: 2,
            title: '移动文档',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            maxmin: false, //开启最大化最小化按钮
            area: ['350px', '260px'],
            content: url
        });
    }

    /**
     * 获取修改之前的内容
     */
    function get_aids()
    {
        return aids;
    }
</script>

<br/>
<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop">
        <i class="fa fa-angle-up"></i>
    </a>
    <a href="JavaScript:void(0);" id="btnbottom">
        <i class="fa fa-angle-down"></i>
    </a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#think_page_trace_open').css('z-index', 99999);
    });
</script>
</body>
</html>