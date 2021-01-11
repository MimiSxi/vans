<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:44:"./application/admin/template/weapp\index.htm";i:1586627582;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\layout.htm";i:1596507477;s:76:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\weapp\bar.htm";i:1591581341;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
<body class="bodystyle" style="cursor: default; -moz-user-select: inherit;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
        <div class="fixed-bar">
        <div class="item-title">
            <div class="subject">
                <h3>插件应用</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <?php if(is_check_access(CONTROLLER_NAME.'@index') == '1'): ?>
                <li><a href="<?php echo url('Weapp/index'); ?>" class="tab <?php if(\think\Request::instance()->action() == 'index'): ?>current<?php endif; ?>"><span>我的插件</span></a></li>
                <?php endif; if(is_check_access(CONTROLLER_NAME.'@plugin') == '1'): if($weapp_plugin_open == '1'): ?>
                    <li><a href="<?php echo url('Weapp/plugin'); ?>" class="tab <?php if(\think\Request::instance()->action() == 'plugin'): ?>current<?php endif; ?>"><span>云插件库</span></a></li>
                    <?php endif; endif; if(\think\Request::instance()->action() == 'mybuy'): ?>
                <li><a href="<?php echo url('Weapp/mybuy', ['install'=>0]); ?>" class="tab <?php if(\think\Request::instance()->action() == 'mybuy'): ?>current<?php endif; ?>"><span>已购买插件</span></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="flexigrid">
        <div class="mDiv">
            <div class="ftitle">
                <h3>插件列表</h3>
                <h5>(共<?php echo $pager->totalRows; ?>条数据)</h5>
            </div>
            <div title="刷新数据" class="pReload"><i class="fa fa-refresh"></i></div>
            <form class="navbar-form form-inline" action="<?php echo url('Weapp/index'); ?>" method="get" onsubmit="layer_loading('正在处理');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                <div class="sDiv">
                    <div class="fl" style="margin-right: 30px;">
                        <a href="<?php echo url('Weapp/mybuy', ['install'=>0]); ?>" class="tab <?php if(\think\Request::instance()->action() == 'mybuy'): ?>current<?php endif; ?>"><span>已购买的插件</span></a>
                    </div>
                    <!-- <div class="sDiv2 fl" style="margin-right: 6px;">
                        <input type="text" size="30" name="keywords" class="qsbox" placeholder="搜索相关数据...">
                        <input type="submit" class="btn" value="搜索">
                    </div> -->
                </div>
            </form>
        </div>
        <div class="plug-list">
            <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
            <div class="bDiv" style="height: auto;">
                <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td class="no-data" align="center" axis="col0" colspan="50">
                                    <i class="fa fa-exclamation-circle"></i>没有符合条件的记录
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="iDiv" style="display: none;"></div>
            </div>
            <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                <div class="plug-item-content">
                    <div class="plug-item-top">
                        <div class="plug-img">
                            <a href="<?php echo url('Weapp/execute',array('sm'=>$vo['code'],'sc'=>$vo['code'],'sa'=>'index')); ?>"><img src="<?php echo get_default_pic($vo['config']['litpic']); ?>?v=<?php echo $vo['config']['version']; ?>" ></a>
                        </div>
                        <div class="plug-text">
                            <div class="plug-text-title">
                                <a href="<?php echo url('Weapp/execute',array('sm'=>$vo['code'],'sc'=>$vo['code'],'sa'=>'index')); ?>"><?php echo $vo['name']; ?></a>
                            </div>
                            <div class="plug-text-versions">
                                <span>版本：<?php echo (isset($vo['config']['version']) && ($vo['config']['version'] !== '')?$vo['config']['version']:'未知'); ?></span>
                                <?php $weapp_upgrade_info = $weapp_upgrade[$vo['code']]; if($weapp_upgrade_info['code'] == '2'): ?>
                                <span>
                                    <textarea id="<?php echo $vo['code']; ?>_upgrade" class="none"><?php echo (isset($weapp_upgrade_info['msg']['upgrade']) && ($weapp_upgrade_info['msg']['upgrade'] !== '')?$weapp_upgrade_info['msg']['upgrade']:''); ?></textarea> 
                                    <textarea id="<?php echo $vo['code']; ?>_intro" class="none"><?php echo (isset($weapp_upgrade_info['msg']['intro']) && ($weapp_upgrade_info['msg']['intro'] !== '')?$weapp_upgrade_info['msg']['intro']:''); ?></textarea>
                                    <textarea id="<?php echo $vo['code']; ?>_notice" class="none"><?php echo (isset($weapp_upgrade_info['msg']['notice']) && ($weapp_upgrade_info['msg']['notice'] !== '')?$weapp_upgrade_info['msg']['notice']:''); ?></textarea>
                                    <a href="javascript:void(0);" class="a_upgrade red" data-version="<?php echo $vo['version']; ?>" data-code="<?php echo $vo['code']; ?>" data-status="<?php echo (isset($vo['status']) && ($vo['status'] !== '')?$vo['status']:'0'); ?>" data-name="<?php echo $vo['name']; ?>" onclick="weapp_upgrade(this);"><?php echo (isset($weapp_upgrade_info['msg']['tips']) && ($weapp_upgrade_info['msg']['tips'] !== '')?$weapp_upgrade_info['msg']['tips']:'[新版本更新]'); ?></a>
                                </span>
                                <?php endif; ?>
                            </div>  
                            <div class="plug-text-des">
                              <?php echo (isset($vo['config']['description']) && ($vo['config']['description'] !== '')?$vo['config']['description']:'暂无描述~'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="plug-item-bottm">
                        <?php if(empty($vo['status']) || (($vo['status'] instanceof \think\Collection || $vo['status'] instanceof \think\Paginator ) && $vo['status']->isEmpty())): if(empty($vo['is_buy']) || (($vo['is_buy'] instanceof \think\Collection || $vo['is_buy'] instanceof \think\Paginator ) && $vo['is_buy']->isEmpty())): if(is_check_access('Weapp@install') == '1'): ?>
                                <a href="javascript:void(0);" onclick="install(this);" data-id="<?php echo $vo['id']; ?>" class="btn blue">安装</a>
                                <?php endif; if(is_check_access('Weapp@del') == '1'): ?>
                                <a href="javascript:void(0);" data-url="<?php echo url('Weapp/del'); ?>" data-id="<?php echo $vo['id']; ?>" data-name="<?php echo $vo['name']; ?>" onClick="delfun(this);">删除</a>
                                <?php endif; else: if(is_check_access('Weapp@install') == '1'): ?>
                                <a href="javascript:void(0);" onclick="remoteInstall('<?php echo $vo['code']; ?>', '<?php echo $vo['min_version']; ?>');">安装</a>
                                <?php endif; if(is_check_access('Weapp@del_remote') == '1'): ?>
                                <a href="javascript:void(0);" data-url="<?php echo url('Weapp/del_remote'); ?>" data-id="<?php echo $vo['id']; ?>" data-name="<?php echo $vo['name']; ?>" onClick="del_remote(this);">删除</a>
                                <?php endif; endif; else: if(is_check_access('Weapp@execute') == '1'): if(empty($vo['config']['management']['href'])): ?>
                                <a href="<?php echo url('Weapp/execute',array('sm'=>$vo['code'],'sc'=>$vo['code'],'sa'=>'index')); ?>">管理</a>
                                <?php else: ?>
                                <a href="<?php echo $vo['config']['management']['href']; ?>" target="<?php echo (isset($vo['config']['management']['target']) && ($vo['config']['management']['target'] !== '')?$vo['config']['management']['target']:'_self'); ?>">管理</a>
                                <?php endif; endif; if(is_check_access('Weapp@uninstall') == '1'): ?>
                                <a href="javascript:void(0);" onclick="uninstall(this);" data-id="<?php echo $vo['id']; ?>" data-name="<?php echo $vo['name']; ?>">卸载</a>
                            <?php endif; endif; ?>

                        <div class="plug-status">
                            <?php if($vo['status'] == 1): ?>
                                <span style="cursor: pointer;" class="yes" <?php if(is_check_access('Weapp@disable') == '1'): ?>onClick="changeTableVal('weapp','id','<?php echo $vo['id']; ?>','status',this);"<?php endif; ?> data-value="-1" data-weapp_code="<?php echo $vo['code']; ?>" data-yestext="<i class='fa fa-check-circle'></i>已启用" data-notext="<i class='fa fa-ban'></i>已禁用"><i class="fa fa-check-circle"></i>已启用</span>
                            <?php else: ?>
                                <span style="cursor: pointer;" class="no" <?php if(is_check_access('Weapp@disable') == '1'): ?>onClick="changeTableVal('weapp','id','<?php echo $vo['id']; ?>','status',this);"<?php endif; ?> data-value="1" data-weapp_code="<?php echo $vo['code']; ?>" data-yestext="<i class='fa fa-check-circle'></i>已启用" data-notext="<i class='fa fa-ban'></i>已禁用"><i class="fa fa-ban"></i>已禁用</span>
                            <?php endif; if($vo['code'] == 'Diyminipro'): ?>
                            <script type="text/javascript">
                                $(function(){
                                    var diymimipro_status = "<?php echo $vo['status']; ?>";
                                    if ('1' == diymimipro_status) {
                                        $('#Diyminipro_theme_index', window.parent.document).show();
                                    } else {
                                        $('#Diyminipro_theme_index', window.parent.document).hide();
                                    }
                                });
                            </script>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
        </div>
        <?php echo $page; ?>
    </div>
</div>
<form name="form2" id="form2" method="post" action="">
    <input type="hidden" name="id" value="" />
    <input type="hidden" name="code" value=""/>
    <input type="hidden" name="min_version" value=""/>
    <input type="hidden" name="thorough" value="1" />
</form>
<script>
    $(document).ready(function(){

        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });
    });

    function weapp_upgrade(obj)
    {
        var name = $(obj).attr('data-name');
        var status = $(obj).attr('data-status');
        if (0 == status) {
            layer.alert('请先安装该插件！', {
                title:false,//name,
                icon: 0
            });
            return false;
        }

        var code = $(obj).attr('data-code');
        var v = $("#"+code+"_upgrade").val();    
        var intro = $("#"+code+"_intro").val();   
        intro += '<style type="text/css">.layui-layer-content{height:270px!important}</style>';
        var notice = $("#"+code+"_notice").val(); 
        v = notice + intro + '<br/>' + v;
        //询问框
        layer.confirm(v, {
            title: false,//'检测插件更新',
            area: ['580px','400px'],
            btn: ['升级','取消'] //按钮
            
        }, function(){
            layer.closeAll();
            setTimeout(function(){
                upgrade(code); // 请求后台
            },200);
            
        }, function(){  
            layer.msg('不升级可能有安全隐患', {
                btnAlign: 'c',
                time: 20000, //20s后自动关闭
                btn: ['明白了']
            });
            return false;
        });    
    }

    function upgrade(code){
        layer_loading('升级中');
        $.ajax({
            type : "GET",
            url  : "<?php echo url('Weapp/OneKeyUpgrade'); ?>",
            timeout : 360000, //超时时间设置，单位毫秒 设置了 1小时
            data : {code:code, _ajax:1},
            error: function(request) {
                layer.closeAll();
                layer.alert("升级失败，请第一时间联系技术协助！", {icon: 2, closeBtn: false, title:false}, function(){
                    window.location.reload();
                });
            },
            success: function(res) {
                layer.closeAll();
                if(1 == res.code){
                    layer.alert('已升级最新版本!', {icon: 1, closeBtn: false, title:false}, function(){
                        window.location.reload();
                    });
                }
                else{
                    layer.alert(res.msg, {icon: 2, closeBtn: false, title:false}, function(){
                        window.location.reload();
                    });
                }
            }
        });                 
    }

    function install(obj)
    {
        var id = $(obj).attr('data-id');
        var form2 = $('#form2');
        form2.find('input[name=id]').val(id);
        var url = "<?php echo url('Weapp/install'); ?>";
        form2.attr('action', url);
        layer_loading('正在处理');
        form2.submit();
    }

    function uninstall(obj)
    {
        //询问框
        var confirm = layer.confirm('<font color="red">此操作数据不可恢复</font>，是否卸载移除？', {
                title: false,
                btn: ['确定', '取消'] //按钮

            }, function(){
                layer.close(confirm);
                uninstall_true(obj);
            }, function(){
                layer.close(confirm);
            }
        );
        
        return false;
    }

    function uninstall_true(obj)
    {
        var id = $(obj).attr('data-id');

        layer_loading('正在处理');
        // 确定
        $.ajax({
            type : 'post',
            url : "<?php echo url('Weapp/uninstall'); ?>",
            data : {id:id, thorough:0, _ajax:1},
            dataType : 'json',
            success : function(res){
                layer.closeAll();
                if(res.code == 1){
                    layer.msg(res.msg, {icon: 1, time: 1500}, function(){
                        window.location.reload();
                    });
                }else{
                    layer.alert(res.msg, {icon: 2, title:false});
                }
            },
            error: function(e) {
                layer.closeAll();
                // 处理插件行为app_end影响到的卸载问题
                if (e.responseText.indexOf("\\behavior\\admin\\") >= 0 && e.responseText.indexOf("not found") >= 0) {
                    layer.msg('卸载成功', {icon: 1, time: 1000}, function(){
                        window.location.reload();
                    });
                } else {
                    layer.alert(e.responseText, {icon: 2, title:false});
                }
            }
        });
    }

    function delfun(obj){
        var name = $(obj).attr('data-name');
        layer.confirm('<font color="#ff0000">将移除该插件相关文件</font>，确认移除？', {
            title: false,//name,
            btn: ['确定','取消'] //按钮
        }, function(){
            layer_loading('正在处理');
            // 确定
            $.ajax({
                type : 'post',
                url : $(obj).attr('data-url'),
                data : {del_id:$(obj).attr('data-id'), _ajax:1},
                dataType : 'json',
                success : function(data){
                    layer.closeAll();
                    if(data.code == 1){
                        layer.msg(data.msg, {icon: 1});
                        window.location.reload();
                    }else{
                        layer.alert(data.msg, {icon: 2, title:false});  //alert(data);
                    }
                }
            })
        }, function(index){
            layer.close(index);
        });
        return false;
    }

    function del_remote(obj){
        var name = $(obj).attr('data-name');
        layer.confirm('<font color="#ff0000">将移除'+name+'相关文件</font>，确认移除？', {
            title: false,//name,
            btn: ['确定','取消'] //按钮
        }, function(){
            layer_loading('正在处理');
            // 确定
            $.ajax({
                type : 'post',
                url : $(obj).attr('data-url'),
                data : {del_id:$(obj).attr('data-id'), _ajax:1},
                dataType : 'json',
                success : function(data){
                    layer.closeAll();
                    if(data.code == 1){
                        layer.msg(data.msg, {icon: 1});
                        window.location.reload();
                    }else{
                        layer.alert(data.msg, {icon: 2, title:false});  //alert(data);
                    }
                }
            })
        }, function(index){
            layer.close(index);
        });
        return false;
    }

    function jump() {
        location.reload()
    }

    function remoteInstall(code, min_version) {
        var form2 = $('#form2');
        form2.find('input[name=code]').val(code);
        form2.find('input[name=min_version]').val(min_version);
        var url = "<?php echo url('Weapp/remoteInstall'); ?>";
        form2.attr('action', url);
        layer_loading('远程安装');
        form2.submit();
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