<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:38:"./template/pc/users\release_centre.htm";i:1610098782;s:74:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\template\pc\users\skin\css\diy_css.htm";i:1608270448;s:70:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\template\pc\users\users_header.htm";i:1571728724;s:49:"./public/static/template/users/users_leftmenu.htm";i:1571728724;s:68:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\template\pc\users\users_left.htm";i:1571728724;s:69:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\template\pc\users\release_bar.htm";i:1571728724;s:70:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\template\pc\users\users_footer.htm";i:1610071753;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo $MenuTitle; ?>-<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/bootstrap.min.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/basic.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/eyoucms.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/shop.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/tb_style.css","","",""); echo $__VALUE__; ?>
    
<!-- 官方内置样式表，升级会覆盖变动，请勿修改，否则后果自负 -->

<style>
    .panel-default .panel-heading strong{border-bottom: 2px solid <?php echo $theme_color; ?>;color: <?php echo $theme_color; ?>;}
    .panel-default .panel-heading span{color:<?php echo $theme_color; ?>}
    .btn-primary{background: <?php echo $theme_color; ?> !important; color:#ffffff !important;}
    .btn-primary:hover,.btn-primary:focus,.btn-primary:active{background: <?php echo $theme_color; ?> !important;}
    .ey-head .user-info .breadcrumb a{ color:<?php echo $theme_color; ?>;}
    .reg .header{background-color: <?php echo $theme_color; ?>; }
    .radio-primary input[type=radio]:checked+label::before{border-color: <?php echo $theme_color; ?>;}
    .checkbox-primary input[type=radio]:checked+label::before, .checkbox-primary input[type=checkbox]:checked+label::before{border-color: <?php echo $theme_color; ?>; background:<?php echo $theme_color; ?>}
    a.list-group-item.active, a.list-group-item.active:focus, a.list-group-item.active:hover{background: <?php echo $theme_color; ?>;}
    footer.container a{ color:<?php echo $theme_color; ?>  }
    input.form-control:hover,input.form-control:active,input.form-control:focus,input.input-txt:hover,input.input-txt:active,input.input-txt:focus{border-color:<?php echo $theme_color; ?>;outline:none }
    .hamburger.is-closed .hamb-top,.hamburger.is-closed .hamb-middle,.hamburger.is-closed .hamb-bottom,.hamburger.is-open .hamb-bottom,.hamburger.is-open .hamb-top{background:<?php echo $theme_color; ?>}
    .btn-outline.btn-success{color: <?php echo $theme_color; ?>;border-color: <?php echo $theme_color; ?>;}
    .btn-outline.btn-success.active, .btn-outline.btn-success:active, .btn-outline.btn-success:focus, .btn-outline.btn-success:hover, .open>.btn-outline.btn-success.dropdown-toggle {border-color:<?php echo $theme_color; ?>;background-color:<?php echo $theme_color; ?>;}
    .list-group-item a{ text-align:center; padding-left:0; }
    .panel-heading span.fr a{ color:<?php echo $theme_color; ?>;}
    .shop .shop-order-top .ting h4{color:<?php echo $theme_color; ?>;}
    .shop .shop-order-top .ting .price{color:<?php echo $theme_color; ?>;}
    .shop-address li.selected a.addr-list{border: 1px solid <?php echo $theme_color; ?>}

    /*图集上传 bug修正 2019.4.25*/
    .ui-sortable-placeholder{ display: inline-block; }
    .tab-pane .images_upload {
        float: left;
        width: 19%;
        margin-right: 1%;
        margin-top: 15px;
        display: inline-block;
    }

    .tab-pane .images_upload .ic{
        border: 1px solid #ddd;
        padding: 5px;
        border-radius: 4px;
        position: relative;
        float: left;
        background: #fff;
    }
    .tab-pane .images_upload .cover-bg{ background: #000; opacity: 0.5; width:100%; height: 100%; position: absolute; z-index: 2 }
    .tab-pane .images_upload .icaction{position: absolute; top:50%; margin-top: -15px; text-align: center; width:100%; z-index: 111}
    .tab-pane .images_upload .icaction span{ height: 28px; line-height: 28px; padding: 0 8px; background: #FF6666;  color: #fff; display: inline-block; cursor: pointer;}

    .tab-pane .images_upload .upimg img{
        vertical-align: middle;
        max-width: 100%;
        max-height: 140px;
    }
    .tab-pane .images_upload .ic img{
        position:absolute;
        top:50%;
        transform:translate(-50%,-50%);
        z-index: 1;
        left:50%;
    }
    .tab-pane .images_upload textarea{
        width:100%;
        box-sizing:
                border-box;
        margin-top: 5px;
        font-size: 13px;
        height: 50px;
        float: left;
        color: #999;
        border-color: #ddd;
        border-radius: 3px;
        -webkit-appearance: none;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.065) inset;
        transition: all 1s cubic-bezier(0.175, 0.885, 0.32, 1) 0s;
    }
    .tab-pane .table-bordered{ width:100%; }
    .tab-pane a.upimg,.tab-pane div.upimg{
        height: 140px;
        background: #fafafa;
        overflow: hidden;
        text-align: center;
        position: relative;
        display: block;
    }

    .tab-pane .operation a{
        text-align: center;
        color: #666;
        outline: none;
        width: 33.3333%;
        float: left;
        font-size: 14px;

    }
    .tab-pane .operation a input{ display: inline-block; margin-right: 3px; vertical-align:middle; margin-top: -3px;}
    a.imgupload{
        display: inline-block;
        padding: .5em 1em;
        vertical-align: middle;
        font-size: 1.0rem;
        font-weight: 400;
        line-height: 1.2;
        text-align: center;
        white-space: nowrap;
        border-radius: 0;
        cursor: pointer;
        outline: 0;
        -webkit-transition: background-color .3s ease-out,border-color .3s ease-out;
        transition: background-color .3s ease-out,border-color .3s ease-out;
    }
    .tab-pane .operation a label{
        cursor: pointer;
    }
    a.imgupload i{font-size: 1.0rem;}

    @media (max-width:1680px) {
        .tab-pane .images_upload{width: 24%;}
        .tab-pane .operation a{ font-size: 12px; }
        .tab-pane .operation a label{cursor: pointer;}
    }
    div.tab-pane.pics a.upimg{ height: auto; padding: 8px; padding-bottom:0px; }
    div.tab-pane.pics .images_upload{ width:auto;position: relative; }
    div.tab-pane.pics .delect{ text-align: center; display: block; background: #fafafa;position: absolute;bottom: -3px;left: 0;color: #fff;  background-color:rgba(0,0,0,0.5);z-index: 2;width: 100%; }

    .template_div{margin: 5px 0px;}
    /*图集上传 end bug修正 2019.4.25*/

    /* 自定义开关字段 start */
    .onoff { font-size: 0; position: relative; overflow: hidden; display: block; float: left; }
    .onoff label { vertical-align: top; display: inline-block; *display: inline;
    *zoom: 1;
    cursor: pointer; }
    .onoff input[type="radio"] { position: absolute; top: 0; left: -999px; }
    .onoff .cb-enable
    { color: #777; font-size: 12px; line-height: 20px; background-color: #f8f8f8; height: 24px; padding: 1px 9px; border-style: solid; border-color: #ddd;border-radius:4px 0 0 4px; }
    .onoff .cb-disable { color: #777; font-size: 12px; line-height: 20px; background-color: #f8f8f8; height: 24px; padding: 1px 9px; border-style: solid; border-color: #ddd;border-radius:0 4px 4px 0; }

    .onoff .cb-enable { border-width: 1px 0 1px 1px; }
    .onoff .cb-disable { border-width: 1px 1px 1px 0;  }
    .onoff .cb-disable.selected { color: #FFF;background-color: <?php echo $theme_color; ?>;border-color: <?php echo $theme_color; ?>;border-radius: 0 4px 4px 0; }
    .onoff .cb-enable.selected { color: #FFF; background-color: <?php echo $theme_color; ?>;border-color: <?php echo $theme_color; ?>;border-radius:4px 0 0 4px; }
    /* 自定义开关字段 end */
</style>

<script type="text/javascript">
    var __root_dir__ = "";
    var __version__ = "<?php echo $version; ?>";
    var __lang__ = "<?php echo $home_lang; ?>";
</script>
    
    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/static/common/js/jquery.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/plugins/layer-v3.1.0/layer.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/static/common/js/tag_global.js","","",""); echo $__VALUE__; ?>
</head>

<body class="centre shop">
<!-- 头部 -->
<?php if($is_mobile == '1'): ?>
    <!-- 头像上传 -->
    <div id="update_mobile_file" style="display: none;">
        <form id="form1" style="text-align: center;" >
            <input type="button" value="点击上传" onclick="up_f.click();" class="btn btn-primary"/><br>
            <p><input type="file" id="up_f" name="up_f" onchange="MobileHeadPic();" style="display:none"/></p>
        </form>
    </div>

    <script type="text/javascript">
        function MobileHeadPic(){
            $.getScript('/public/plugins/layer_mobile/layer.js?v=<?php echo $version; ?>', function(){
                // 提示信息，2秒自动关闭
                function MsgOpen(msgs){
                    layer.open({
                        content: msgs,
                        skin: 'msg',
                        time: 2,
                    });
                }

                // 提示信息，估计在底部提示，点击空白处关闭
                function FooterOpen(msgs){
                    layer.open({
                        content: msgs,
                        skin: 'footer',
                    });
                }

                // 提示动画
                function LoaDing(){
                    var loading = layer.open({
                        type:2,
                        content: '正在处理',
                    });
                    return loading;
                }

                UpdateMobileHeadPic();

                // 移动端更换头像
                function UpdateMobileHeadPic()
                {
                    // 正在处理提示动画
                    var loading = LoaDing();
                    // 获取表单对象
                    var data = new FormData($('#form2')[0]);
                    // 上传类型
                    var UpFileType = $('#UpFileType').val();
                    $.ajax({
                        url: "<?php echo url("user/Uploadify/imageUp","savepath=allimg&pictitle=head_pic&dir=images",true,false,null,null,null);?>", 
                        type: 'post',  
                        data: data,  
                        dataType: 'json',
                        cache: false,  
                        processData: false,  
                        contentType: false,
                        success:function(res){
                            if (res.state == 'SUCCESS') {
                                layer.closeAll();
                                MsgOpen('上传成功！');
                                if (1 == UpFileType) {
                                    parent.$("#litpic_inpiut").val(res.url);
                                    parent.$("#litpic_img").attr('src', res.url);
                                }else{
                                    MobileHeadPic(res.url);
                                }
                            }else{
                                layer.close(loading);
                                MsgOpen(res.state);
                            }
                        },
                        error : function() {
                            layer.close(loading);
                            FooterOpen('网络失败，请刷新页面后重试');
                        }
                    });
                };

                // 上传头像成功后加载到页面
                function MobileHeadPic(fileurl_tmp)
                {
                    $("#head_pic").val(fileurl_tmp);
                    $("#head_pic_a").attr('src', fileurl_tmp);
                    // 正在处理提示动画
                    var loading = LoaDing();
                    $.ajax({
                        url: "<?php echo url("user/Users/edit_users_head_pic","",true,false,null,null,null);?>",
                        data: {filename:fileurl_tmp},
                        type:'post',
                        dataType:'json',
                        success:function(res){
                            if (1 == res.code) {
                                layer.closeAll();
                                MsgOpen(res.msg);
                            } else {
                                layer.close(loading);
                                MsgOpen(res.msg);
                            }
                        }
                    });
                }
            })
        }
    </script>
    <!-- 头像上传结束 -->

    <!-- 弹出侧边栏 -->
    <div id="wrapper">
        <div class="overlay" style="display: none;"></div>
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper">
              <div class="sidebar-header d-flex align-items-center">
                <div class="avatar">
                    <a href="javascript:void(0);">
                        <img id="head_pic_a" class="img-fluid rounded-circle" style="width: 100%;" src="<?php echo get_head_pic($users['head_pic']); ?>" <?php if($is_mobile == '1'): ?> onClick="GetUploadify_mobile(1)" <?php else: ?> onClick="GetUploadify(1,'','allimg','head_pic_call_back_mobile')" <?php endif; ?>/>
                    </a>
                    <input type="hidden" name="head_pic" id="head_pic" value="<?php echo $users['head_pic']; ?>">
                </div>
                <div class="title">
                  <h1 class="h4"><?php echo $nickname; ?></h1>
                  <p><?php echo $users['level_name']; ?></p>
                </div>
              </div>
            <div class="list-group">
                <!-- 插件菜单 -->
                    
    <?php  $tagUsermenu = new \think\template\taglib\eyou\TagUsermenu; $_result = $tagUsermenu->getUsermenu("active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li class="list-group-item ">
            <a href="<?php echo $field['url']; ?>" class="list-group-item icon<?php echo $i; ?> <?php echo $field['currentstyle']; ?>"><i></i><?php echo $field['title']; ?></a>
        </li>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                <!-- 插件菜单 -->
                <li class="list-group-item ">
                    <a href="<?php echo url("user/Users/logout","",true,false,null,null,null);?>" class="list-group-item">退出登录</a>
                </li>
            </div>
        </nav>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
          var trigger  = $('.hamburger'),
              overlay  = $('.overlay'),
              isClosed = false;

            trigger.click(function () {
                hamburger_cross();      
            });

            function hamburger_cross() {
                if (isClosed == true) {
                    overlay.hide();
                    trigger.removeClass('is-open');
                    trigger.addClass('is-closed');
                    isClosed = false;
                    window.location.reload();
                } else {
                    overlay.show();
                    trigger.removeClass('is-closed');
                    trigger.addClass('is-open');
                    isClosed = true;
                }
            }
          
            $('[data-toggle="offcanvas"]').click(function () {
                $('#wrapper').toggleClass('toggled');
            });
        });
    </script>
    <!-- 弹出侧边栏结束 -->
<?php endif; ?>

<!-- 头像默认更换路径 -->
<script type="text/javascript">
    var GetUploadify_url = "<?php echo url("user/Uploadify/upload","",true,false,null,null,null);?>";
</script>

<!-- 头部信息 -->
<div class="ey-head">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 logo">
                <ul class="list-none">
                    <li><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" class="ey-logo"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" /></a></li>
                    <li>用户中心</li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 user-info">
                <ol class="breadcrumb pull-right">
                    <li><a href="<?php echo url("user/Users/centre","",true,false,null,null,null);?>"><?php echo $nickname; ?></a></li>
                    <li><a href="<?php echo url("user/Users/logout","",true,false,null,null,null);?>" title="退出登录">退出登录</a></li>
                </ol>
                <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- 头部信息结束 -->
<!-- END -->
<div class="member-profile ey-member">
    <div class="container">
        <div class="member-profile-content">
            <div class="row">
                <!-- 侧边 -->
                <?php if($is_mobile == '2'):  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/plugins/layer-v3.1.0/layer.js","","",""); echo $__VALUE__; ?>
    <script type="text/javascript">
        // 头像加载
        function head_pic_call_back(fileurl_tmp)
        {
            $("#head_pic").val(fileurl_tmp);
            $("#head_pic_a").attr('src', fileurl_tmp);
            layer_loading('正在处理');
            $.ajax({
                url: "<?php echo url("user/Users/edit_users_head_pic","",true,false,null,null,null);?>",
                data: {filename:fileurl_tmp},
                type:'post',
                dataType:'json',
                success:function(res){
                    if (1 == res.code) {
                        layer.msg(res.msg, {icon:6, time:1500});
                    } else {
                        layer.closeAll();
                        layer.alert(res.msg, {icon:5});
                    }
                }
            });
        }
    </script>

    <div class="col-sm-2 sidebar panel" >
        <div class="sidebar-box">
              <div class="sidebar-header d-flex align-items-center">
                <div class="avatar">
                    <a href="javascript:void(0);">
                        <img id="head_pic_a" class="img-fluid rounded-circle" style="width: 100%;" src="<?php echo get_head_pic($users['head_pic']); ?>" <?php if($is_mobile == '1'): ?> onClick="GetUploadify_mobile(1)" <?php else: ?> onClick="GetUploadify(1,'','allimg','head_pic_call_back')" <?php endif; ?>/>
                    </a>
                    <input type="hidden" name="head_pic" id="head_pic" value="<?php echo $users['head_pic']; ?>">
                </div>
                <div class="title">
                  <h1 class="h4"><?php echo $nickname; ?></h1>
                  <p><?php echo $users['level_name']; ?></p>
                </div>
              </div>
              
            <div class="list-group">
                <!-- 扩展菜单 -->
                    
    <?php  $tagUsermenu = new \think\template\taglib\eyou\TagUsermenu; $_result = $tagUsermenu->getUsermenu("active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li class="list-group-item ">
            <a href="<?php echo $field['url']; ?>" class="list-group-item icon<?php echo $i; ?> <?php echo $field['currentstyle']; ?>"><i></i><?php echo $field['title']; ?></a>
        </li>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                <!-- 扩展菜单 -->
            </div>
        </div>
    </div>
<?php endif; ?>


                <!-- END -->
                <!-- 中部 -->
                <div class="col-xs-12 col-sm-10 ey-member-safety" >
                    <div class="panel m-b-0">
                        <div class="panel-body ey-member-index ey-member-profile">
                            <div class="panel panel-default m-b-0 basic">
                                 <!-- 顶部导航栏 -->
                                <div class="panel-heading">
                                    <strong><?php echo $MenuTitle; ?></strong>
                                </div>
                                <!-- END -->  
                                <div class="tb-body">
                                    <!-- 导航栏 --> 
                                    <ul class="tb-nav">
	<?php if($is_release == '1'): ?>
    <li>
    	<a href="<?php echo url("user/UsersRelease/article_add","",true,false,null,null,null);?>" <?php if(in_array(ACTION_NAME, ['article_add','article_edit'])): ?> class="current" <?php endif; ?>>文章发布</a>
    </li>
    <?php endif; ?>

    <li>
        <a href="<?php echo url("user/UsersRelease/release_centre","list=1",true,false,null,null,null);?>" <?php if($Method == 'release_centre'): ?> class="current" <?php endif; ?>>
            投稿列表
        </a>
    </li>
</ul> 
                                    <!-- END --> 
                                    <table class="table" style="word-break:break-all;word-wrap:break-word; ">
                                        <thead>
                                            <tr>
                                                <th class="col-sm-1">ID</th>
                                                <th class="col-sm-5 tl">文章标题</th>
                                                <th class="col-sm-2">所属栏目</th>
                                                <th class="col-sm-2">上传时间</th>
                                                <th class="col-sm-1">审核状态</th>
                                                <th class="col-sm-2">操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(empty($eyou['field']['data']) || (($eyou['field']['data'] instanceof \think\Collection || $eyou['field']['data'] instanceof \think\Paginator ) && $eyou['field']['data']->isEmpty())): ?>
                                            <tr class="trSelected">
                                                <td class="no-data" align="center" axis="col0" colspan="50">
                                                    <i class="fa fa-exclamation-circle"></i>没有符合条件的记录
                                                </td>
                                            </tr>
                                        <?php else: if(is_array($eyou['field']['data']) || $eyou['field']['data'] instanceof \think\Collection || $eyou['field']['data'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $eyou['field']['data'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>    
                                            <tr>
                                                <td class="col-sm-1 col-xs-1" >
                                                    <input type="checkbox" name="aids[]" value="<?php echo $vo['aid']; ?>">
                                                </td>

                                                <td class="col-sm-5 col-xs-8 txt tl">
                                                    <a  href="javascript:void(0);" data-arurl="<?php echo $vo['arcurl']; ?>" onclick="ArcUrl(this);">
                                                        <?php echo $vo['title']; ?>
                                                    </a>
                                                </td>

                                                <td class="col-sm-2 col-xs-3 ">
                                                    <?php echo $vo['typename']; ?>
                                                </td>

                                                <td class="col-sm-1 td-state">
                                                    <?php echo date('Y-m-d H:i:s',$vo['add_time']); ?>
                                                </td>

                                                <td class="col-sm-2 td-state">
                                                    <?php echo (isset($home_article_arcrank[$vo['arcrank']]) && ($home_article_arcrank[$vo['arcrank']] !== '')?$home_article_arcrank[$vo['arcrank']]:''); ?>
                                                </td>

                                                <td class="col-sm-2 crud">
                                                    <a href="javascript:void(0);" style="margin-right: 0;" data-editurl="<?php echo $vo['editurl']; ?>" onclick="EditData(this);">
                                                        编辑
                                                    </a>
                                                    <a href="javascript:void(0);" style="margin-right: 0;" data-id='<?php echo $vo['aid']; ?>' data-url="<?php echo $eyou['field']['delurl']; ?>" onclick="DelData(this);">
                                                        删除
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="wap">
                                                <td class="col-xs-1" ></td>
                                                <td class="col-xs-8 td-state-m">
                                                    <?php echo (isset($home_article_arcrank[$vo['arcrank']]) && ($home_article_arcrank[$vo['arcrank']] !== '')?$home_article_arcrank[$vo['arcrank']]:''); ?>
                                                    <br/>
                                                    <?php echo date('Y-m-d H:i:s',$vo['add_time']); ?>
                                                </td>
                                                <td class="col-xs-3 tc">
                                                    <a href="javascript:void(0);" data-editurl="<?php echo $vo['editurl']; ?>" onclick="EditData(this);">
                                                        编辑
                                                    </a>
                                                    <a href="javascript:void(0);" data-id='<?php echo $vo['aid']; ?>' data-url="<?php echo $eyou['field']['delurl']; ?>" onclick="DelData(this);">
                                                        删除
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php echo isset($vo["ey_1563185380"])?$vo["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($vo["ey_1563185376"]))?$vo["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; endif; ?>
                                            <tr class="del">
                                                <td><input type="checkbox" onclick="javascript:$('input[name*=aids]').prop('checked',this.checked);"></td>
                                                <td class="dels" >
                                                    <a href="javascript:void(0);" onclick="BatchDelData(this, 'aids');" data-url="<?php echo $eyou['field']['delurl']; ?>">
                                                        <i class="glyphicon glyphicon-remove"></i>批量删除
                                                    </a> 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table> 
                                </div>
                            </div>
                            <div style="text-align: center;"><?php echo $page; ?></div>
                        </div>
                    </div>
                <!-- END -->
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    // 内容查看
    function ArcUrl(obj) {
        window.open($(obj).attr('data-arurl'));
    }
    // 编辑内容
    function EditData(obj) {
        window.location.href = $(obj).attr('data-editurl');
    }
    // 单个删除发布的内容
    function DelData(obj) {
        layer.confirm('是否删除该投稿？', {
            title: false,
            btn: ['是','否'] //按钮
        }, function(){
            layer_loading('正在处理');
            // 确定
            $.ajax({
                type: "POST",
                url: $(obj).attr('data-url'),
                data: {del_id:$(obj).attr('data-id')},
                dataType: 'json',
                success: function (data) {
                    layer.closeAll();
                    if(data.code == 1){
                        layer.msg(data.msg, {icon: 1});
                        window.location.reload();
                    }else{
                        layer.alert(data.msg, {icon: 2, title:false});
                    }
                },
                error:function(){
                    layer.closeAll();
                    layer.alert('网络失败，请刷新页面后重试', {icon: 2, title:false});
                }
            });
        }, function(index){
            layer.close(index);
        });
    }
    // 批量删除发布的内容
    function BatchDelData(obj, name) {
        var a = [];
        $('input[name^='+name+']').each(function(i,o){
            if($(o).is(':checked')){
                a.push($(o).val());
            }
        })
        if(a.length == 0){
            layer.alert('请至少选择一项', {icon: 2, title:false});
            return;
        }
        // 删除按钮
        layer.confirm('确认批量彻底删除？', {
            title: false,
            btn: ['确定', '取消'] //按钮
        }, function () {
            layer_loading('正在处理');
            $.ajax({
                type: "POST",
                url: $(obj).attr('data-url'),
                data: {del_id:a},
                dataType: 'json',
                success: function (data) {
                    layer.closeAll();
                    if(data.code == 1){
                        layer.msg(data.msg, {icon: 1});
                        window.location.reload();
                    }else{
                        layer.alert(data.msg, {icon: 2, title:false});
                    }
                },
                error:function(){
                    layer.closeAll();
                    layer.alert('网络失败，请刷新页面后重试', {icon: 2, title:false});
                }
            });
        }, function (index) {
            layer.closeAll(index);
        });
    }
</script>
<!-- 底部 -->
    <div class="ey-footer">
        <footer class="container">
            <p></p>
        </footer>
    </div>
</body>
</html>
<!-- END -->