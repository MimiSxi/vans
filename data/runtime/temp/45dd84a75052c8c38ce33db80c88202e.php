<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:36:"./template/pc/users\article_edit.htm";i:1608892143;s:74:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\template\pc\users\skin\css\diy_css.htm";i:1608270448;s:70:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\template\pc\users\users_header.htm";i:1571728724;s:49:"./public/static/template/users/users_leftmenu.htm";i:1571728724;s:68:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\template\pc\users\users_left.htm";i:1571728724;s:70:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\template\pc\users\users_footer.htm";i:1600607651;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>文章投稿-<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></title>
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
    <script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js"></script>
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
<!-- 头部结束 --> 
<script type="text/javascript">
    window.UEDITOR_HOME_URL = "/public/plugins/Ueditor/";
</script> 
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/plugins/Ueditor/ueditor.config.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/plugins/Ueditor/ueditor.all.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/plugins/Ueditor/lang/zh-cn/zh-cn.js","","",""); echo $__VALUE__; ?>
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

 
        <!-- 侧边结束 --> 
        <!-- 中部 -->
        <div class="col-xs-12 col-sm-10 ey-member-safety" >
              <div class="panel m-b-0">
            <div class="panel-body ey-member-index ey-member-profile">
                  <div class="panel panel-default m-b-0 basic"> 
                <!-- 顶部导航栏 -->
                <div class="panel-heading"> <strong><?php echo $MenuTitle; ?></strong> <a class="btn btn-primary heading-bt" href="<?php echo url("user/UsersRelease/release_centre","list=1",true,false,null,null,null);?>">返回投稿列表</a></div>
                <!-- 顶部导航栏结束 --> 
     
                <!-- 内容栏 --> 
                <div class="panel-body" style="padding-top:0">
                      <form class="form-horizontal" id="post_form">
                    <input type="hidden" name="aid" value="<?php echo $ArchivesData['aid']; ?>">
                    <input type="hidden" name="channel" value="<?php echo $channel_id; ?>">
                    <div class="row">
                          <div class="col-xs-2">
                        <label for="title">文章标题<em style="color: red;">*</em></label>
                      </div>
                          <div class="col-xs-9">
                        <input type="text" name="title" id="title" class="input-txt" maxlength="100" value="<?php echo $ArchivesData['title']; ?>">
                      </div>
                        </div>
                    <div class="row">
                          <div class="col-xs-2">
                        <label for="title">所属栏目2<em style="color: red;">*</em></label>
                      </div>
                            <div class="col-xs-9">
                                <?php echo $arctype_html; ?>
                            </div>
                        </div>
                    <div class="row">
                          <div class="col-xs-2">
                        <label for="title">TAG标签</label>
                      </div>
                          <div class="col-xs-9">
                        <input type="text" value="<?php echo $ArchivesData['tags']; ?>" name="tags" id="tags" class="input-txt">
                      </div>
                        </div>
                    <?php if($is_litpic_users_release == '1'): ?>
                    <div class="row">
                          <div class="col-xs-2">
                        <label for="title">缩略图</label>
                      </div>
                          <div class="col-xs-9">
                        <div class="input-file-show div_litpic_local"  <?php if($is_mobile == '1'): ?> onClick="GetUploadify_mobile(1,'','缩略图')" <?php else: ?> onClick="GetUploadify(1,'','allimg','litpic_call_back','','缩略图')" <?php endif; ?>> <img id='litpic_img' src="<?php if(!(empty($ArchivesData['litpic']) || (($ArchivesData['litpic'] instanceof \think\Collection || $ArchivesData['litpic'] instanceof \think\Paginator ) && $ArchivesData['litpic']->isEmpty()))): ?><?php echo $ArchivesData['litpic']; else: ?>/public/static/common/images/not_adv.jpg<?php endif; ?>"/><span >修改缩略图</span>
                              <input type="hidden" name="litpic_inpiut" id='litpic_inpiut' value="<?php echo $ArchivesData['litpic']; ?>">
                            </div>
                      </div>
                        </div>
                    <?php endif; ?>
                      <div class="row" style="display: none;" id="tupianji">
                          <div class="col-xs-2">
                              <label>图片集</label>
                          </div>
                          <div class="col-xs-9">
                              <div class="tab-pane pics" id="tab_imgupload">
                                  <a href="javascript:void(0);" onClick="GetUploadify(30,'','allimg','imgupload_call_back');" class="imgupload" title="拖动修改排序">
                                      <i class="fa fa-photo"></i>上传图片
                                  </a>
                                  <table class="table table-bordered">
                                      <tbody>
                                      <tr>
                                          <td class="sort-list">
                                              <?php if(is_array($imgupload_list) || $imgupload_list instanceof \think\Collection || $imgupload_list instanceof \think\Paginator): $k = 0; $__LIST__ = $imgupload_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                              <div class="images_upload">
                                                  <div style="position: relative; height: 130px;">
                                                      <input type="hidden" name="imgupload[]" value="<?php echo $vo['image_url']; ?>">
                                                      <a href="<?php echo $vo['image_url']; ?>" onclick="" class="upimg" target="_blank" title="拖动修改排序">
                                                          <img src="<?php echo $vo['image_url']; ?>" width="120" height="120">
                                                      </a>
                                                      <a href="javascript:void(0)" onclick="ClearPicArr2(this,'<?php echo $vo['image_url']; ?>')" class="delect">删除</a>
                                                  </div>
                                                  <textarea rows="5" cols="60" name="imgintro[]" style="height:28px; width: 136px;" placeholder="图片注释" title="标签调用：{$field.intro}"><?php echo $vo['intro']; ?></textarea>
                                              </div>
                                              <?php endforeach; endif; else: echo "" ;endif; ?>
                                              <div class="images_upload">
                                              </div>
                                          </td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </div>
                              <!-- 上传图片显示的样板 start -->
                              <div class="images_upload_tpl none">
                                  <div class="images_upload">
                                      <div style="position: relative; height: 130px;">
                                          <input type="hidden" name="imgupload[]" value="" />
                                          <a href="javascript:void(0);" onClick="" class="upimg" title="拖动修改排序">
                                              <img src="/public/static/admin/images/add-button.jpg" width="120" height="120" />
                                          </a>
                                          <a href="javascript:void(0)" class="delect">&nbsp;&nbsp;</a>
                                      </div>
                                      <textarea rows="5" cols="60" name="imgintro[]" style="height:28px; width: 136px;" placeholder="图片注释" ></textarea>

                                  </div>
                              </div>
                              <!-- 上传图片显示的样板 end -->
                          </div>
                      </div>
                      <script type="text/javascript">

                          function img_call_back(fileurl_tmp)
                          {
                              $("#litpic_local").val(fileurl_tmp);
                              $("#img_a").attr('href', fileurl_tmp);
                              $("#img_i").attr('onmouseover', "layer_tips=layer.tips('<img src="+fileurl_tmp+" class=\\'layer_tips_img\\'>',this,{tips: [1, '#fff']});");
                              $("input[name=is_litpic]").attr('checked', true); // 自动勾选属性[图片]
                          }

                          // 上传图集相册回调函数
                          function imgupload_call_back(paths){

                              var  last_div = $(".images_upload_tpl").html();
                              // var  last_div = $(".images_upload:last").prop("outerHTML");
                              for (var i=0;i<paths.length ;i++ )
                              {
                                  $(".images_upload:eq(0)").before(last_div);  // 插入一个 新图片
                                  $(".images_upload:eq(0)").find('a:eq(0)').attr('href',paths[i]).attr('onclick','').attr('target', "_blank");// 修改他的链接地址
                                  $(".images_upload:eq(0)").find('img').attr('src',paths[i]);// 修改他的图片路径
                                  $(".images_upload:eq(0)").find('a:eq(1)').attr('onclick',"ClearPicArr2(this,'"+paths[i]+"')").text('删除');
                                  $(".images_upload:eq(0)").find('input').val(paths[i]); // 设置隐藏域 要提交的值
                              }
                          }
                          /*
                           * 上传之后删除组图input
                           * @access   public
                           * @val      string  删除的图片input
                           */
                          function ClearPicArr2(obj,path)
                          {
                              // 删除数据库记录
                              $.ajax({
                                  type:'POST',
                                  url:"<?php echo url('user/UsersRelease/del_channelimgs', ['_ajax'=>1]); ?>",
                                  data:{filename:path},
                                  success:function(){
                                      $(obj).parent().parent().remove(); // 删除完服务器的, 再删除 html上的图片
                                      $.ajax({
                                          type:'POST',
                                          url:"<?php echo url('Uploadify/delupload', ['_ajax'=>1]); ?>",
                                          data:{action:"del", filename:path},
                                          success:function(){}
                                      });
                                  }
                              });
                          }

                          /** 以下 图集相册的拖动排序相关 js*/

                          $( ".sort-list" ).sortable({
                              start: function( event, ui) {

                              }
                              ,stop: function( event, ui ) {
                              }
                          });
                          //因为他们要拖动，所以尽量设置他们的文字不能选择。
                          $( ".sort-list" ).disableSelection();
                      </script>
                    <span id="FieldAddonextitem"></span>
                    <script type="text/javascript">
                        $(function() {
                            var typeidNew = <?php echo (isset($ArchivesData['typeid']) && ($ArchivesData['typeid'] !== '')?$ArchivesData['typeid']:'0'); ?>;
                            var aidNew = <?php echo (isset($ArchivesData['aid']) && ($ArchivesData['aid'] !== '')?$ArchivesData['aid']:'0'); ?>;
                            GetAddonextitem(0, typeidNew, aidNew, false);

                            $('#typeid').change(function() {
                                GetAddonextitem(1, $(this).val(), aidNew, true);
                            });
                        });
                        
                        function GetAddonextitem(init, typeidNew, aidNew, is_destroy) {
                            var channel = $("#typeid option:selected").attr('data-channel');
                            $("input[name='channel']").val(channel)
                            if (channel == 3){
                                $("#tupianji").show()
                            }else{
                                $("#tupianji").hide()
                            }

                            var loadingTxt = '正在加载';
                            if (1 == init) {
                                loadingTxt = '正在切换';
                            }
                            layer_loading(loadingTxt);
                            
                            $.ajax({
                                url: "<?php echo url('user/UsersRelease/get_addonextitem'); ?>",
                                data: {typeid: typeidNew, aid: aidNew, _ajax:1},
                                type:'post',
                                success:function(res) {
                                    layer.closeAll();
                                    if (res.code == 0) {
                                        layer.alert(res.msg, {icon: 2, title:false});
                                    } else {
                                        $('#FieldAddonextitem').empty().html(res.data.html);
                                        if (1 == init) {
                                            $.each(res.data.htmltextField, function (index, value) {
                                                showEditor_1597892187('addonFieldExt_'+value);
                                            });
                                        }
                                    }
                                },
                                error: function(e){
                                    layer.closeAll();
                                    layer.alert(ey_unknown_error, {icon: 2, title:false});
                                }
                            });
                        }
                    </script>

                    <div class="row" style="border-bottom:none;">
                          <div class="col-xs-2"></div>
                          <div class="col-xs-9">
                        <input type="button" data-url="<?php echo url('UsersRelease/article_edit'); ?>" onclick="EditArticle(this);" class="btn btn-primary" value="确认提交"/>
                      </div>
                        </div>
                    <!-- 表单验证 --> 
                    <?php echo $TokenValue; ?>
                  </form>
                    </div>
                <!-- 内容栏结束 --> 
              </div>
                </div>
          </div>
            </div>
        
        <!-- 中部结束 --> 
      </div>
        </div>
  </div>
    </div>
<script type="text/javascript">
    // 去除 select中值相同的option(去重)，配合<?php echo $arctype_html; ?>使用
    $(function(){
        var channel = $("#typeid option:selected").attr('data-channel');
        if (channel == 3){
            $("#tupianji").show()
        }
        $("#typeid option").each(function() {
            var val = $(this).val();
            if ($("#typeid option[value='" + val + "']").length > 1){
                $("#typeid option[value='" + val + "']:eq(0)").remove();
            }
        });
    });

    function MobileAddArticle(url = null){
        $.getScript('/public/plugins/layer_mobile/layer.js?v=<?php echo $version; ?>', function(){
            // 提示信息，2秒自动关闭
            function MsgOpen(msgs){
                layer.open({
                    content: msgs,
                    skin: 'msg',
                    time: 2,
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

            OnMobileAddArticle();
            function OnMobileAddArticle(){
                if (!$('#title').val()) {
                    MsgOpen('请填写文章标题！');
                    $('#title').focus();
                    return false;
                }

                if (0 == $('#typeid').val()) {
                    MsgOpen('请选择所属栏目！');
                    $('#typeid').focus();
                    return false;
                }
                LoaDing();
                $.ajax({
                    url: url,
                    data: $('#post_form').serialize(),
                    type:'post',
                    dataType:'json',
                    success:function(res){
                        layer.closeAll();
                        if (1 == res.code) {
                            MsgOpen(res.msg);
                            window.location.href = res.url;
                        } else {
                            MsgOpen(res.msg);
                            if (res.data) $('#'+res.data).focus(); 
                        }
                    }
                });
            }
        })
    }

    function EditArticle(obj){
        var url = $(obj).attr('data-url');
        if ('1' == '<?php echo $is_mobile; ?>' && $('#litpic_inpiut').val()) {
            MobileAddArticle(url);return false;
        }

        if (!$('#title').val()) {
            layer.msg('请填写文章标题！', {time: 1500, icon: 2});
            $('#title').focus();
            return false;
        }
        if (0 == $('#typeid').val()) {
            layer.msg('请选择所属栏目！', {time: 1500, icon: 2});
            $('#typeid').focus();
            return false;
        }
     
        layer_loading('正在处理');
        $.ajax({
            url: url,
            data: $('#post_form').serialize(),
            type:'post',
            dataType:'json',
            success:function(res){
                layer.closeAll();
                if (1 == res.code) {
                    layer.msg(res.msg, {time: 1000},function(){
                        window.location.href = res.url;
                    });
                } else {
                    layer.msg(res.msg, {time: 1500, icon: 2});
                    if (res.data) $('#'+res.data).focus(); 
                }
            },
            error : function() {
                layer.closeAll();
                layer.alert('网络失败，请刷新页面后重试', {icon: 5});
            }
        });

    }

    function litpic_call_back(fileurl_tmp)
    {
        $("#litpic_inpiut").val(fileurl_tmp);
        $("#litpic_img").attr('src', fileurl_tmp);
    }

</script> 
<!-- 底部 -->
    <div class="ey-footer">
        <footer class="container">
            <p><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?></p>
        </footer>
    </div>
</body>
</html> 

<!-- 底部结束 --> 
