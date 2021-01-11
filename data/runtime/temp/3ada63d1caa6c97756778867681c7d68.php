<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:36:"./template/pc/users\users_centre.htm";i:1610099629;s:74:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\template\pc\users\skin\css\diy_css.htm";i:1608270448;s:70:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\template\pc\users\users_header.htm";i:1610099618;s:49:"./public/static/template/users/users_leftmenu.htm";i:1571728724;s:68:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\template\pc\users\users_left.htm";i:1571728724;s:76:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\template\pc\users\users_centre_field.htm";i:1571728724;s:60:"./public/static/template/users/users_centre_field_mobile.htm";i:1587366817;s:60:"./public/static/template/users/users_centre_field_extend.htm";i:1587018567;s:70:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\template\pc\users\users_footer.htm";i:1610071753;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>用户中心-<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/basic.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/eyoucms.css","","",""); echo $__VALUE__; ?>
    
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


    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/static/common/js/jquery.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/js/bootstrap.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/js/global.js","","",""); echo $__VALUE__; ?>
</head>

<body class="centre">
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
                                <div class="panel-heading">
                                    <strong><?php echo $eyou['field']['title']; ?></strong>
                                    <?php if($is_mobile == '1'): ?>
                                        <span onclick="ChangePwdMobile();">
                                    <?php else: ?>
                                        <span onclick="ChangePwd();">
                                    <?php endif; ?>
                                        修改密码
                                    </span>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            用户名
                                        </div>
                                        <div class="col-xs-9">
                                            <?php echo $users['username']; ?>
                                        </div>
                                    </div>
                                    
                                    <form name='theForm' id="theForm">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                昵称
                                            </div>
                                            <div class="col-xs-9">
                                                <input type="text" name="nickname" value="<?php echo $users['nickname']; ?>">
                                            </div>
                                        </div>
                                        <?php if(empty($users['password']) || (($users['password'] instanceof \think\Collection || $users['password'] instanceof \think\Paginator ) && $users['password']->isEmpty())): ?>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                设置密码
                                            </div>
                                            <div class="col-xs-9">
                                                <input type="text" name="password" id="password"><br/>
                                                微信注册用户，请设置密码。
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <!-- 更多资料中的用户属性 -->
                                        <?php if(is_array($users_para) || $users_para instanceof \think\Collection || $users_para instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $users_para;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); switch($vo['dtype']): case "hidden": ?>
                <!-- 隐藏域 start -->
                <div class="row" style="display: none;">
                    <dt class="tit">
                        &nbsp;&nbsp;<label><?php echo $vo['title']; ?></label>
                    </dt>
                    <dd class="opt">
                        <input type="hidden" class="input-txt" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>">
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </div>
                <!-- 隐藏域 start -->
            <?php break; case "mobile": ?>
                <!-- 手机文本框 start -->
                <div class="row">
    <div class="col-xs-3"><?php echo $vo['title']; ?></div>
    <div class="col-xs-9">
        <?php if(1 == $vo['is_required']): ?>
            <span class="redx">*</span>
        <?php else: ?>
            <span class="redx">&nbsp;</span>
        <?php endif; ?>
        <?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); if($is_mobile == '1'): ?>
            <!-- 手机端 -->
            <?php if($users['is_mobile'] == '1'): ?>
                <span class="err"><a href="JavaScript:void(0);" onclick="BindUpdateMobile('更改手机');">（更改手机）</a></span>
            <?php else: ?>
                <span class="err"><a href="JavaScript:void(0);" onclick="BindUpdateMobile('绑定手机');">（绑定手机）</a></span>
            <?php endif; ?>
            <div id="users_bind_mobile_html" style="display: none;">
                <div class="changepass">
                    <eyoucms_form_2020 name='theForm_mobile_form' id="theForm_mobile_form" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" id="bind_mobile_old" name="mobile" <?php if($users['is_mobile'] == '0'): ?> value="<?php echo $users['mobile']; ?>" <?php endif; ?> required class="form-control" placeholder="新的手机号码">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group" style="position: relative;">
                                    <input type="text" class="form-control" id="bind_mobile_code" name="mobile_code" placeholder="手机验证码">
                                    <input type="button" id="bind_mobile_button" onclick="GetMobileCodeMobile();" class="btn btn-primary" value="获取验证码" />
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" style="width:88%;" onclick="SubmitUpdateMobile();">确定</button>
                        </div>
                    </eyoucms_form_2020>
                </div>
            </div>
            <script type="text/javascript">
                // 绑定、更换手机号码
                function BindUpdateMobile(title) {
                    var content = $('#users_bind_mobile_html').html();
                    content = content.replace(/eyoucms_form_2020/g, 'form');
                    content = content.replace(/theForm_mobile_form/g, 'bind_mobile_form_2020');
                    content = content.replace(/bind_mobile_old/, 'bind_mobile_new_2020');
                    content = content.replace(/bind_mobile_code/, 'bind_mobile_code_2020');
                    content = content.replace(/bind_mobile_button/, 'bind_mobile_button_2020');
                    layer.open({
                        type: 1,
                        title: title,
                        style:'position:fixed; bottom:0; left:0; width: 100%; padding:10px 0; border:none;max-width: 100%;',
                        anim:'up',
                        content: content,
                    });
                }

                // 获取手机验证码
                function GetMobileCodeMobile() {
                    // 正在处理提示动画
                    var loading = loa_ding();
                    // 标题
                    var title = $('h3').html();
                    // 手机号码
                    var mobile = $("#bind_mobile_new_2020").val();
                    // 手机号是否为空
                    if (!mobile) {
                        layer.close(loading);
                        $("#bind_mobile_new_2020").focus();
                        msg_open('请输入新的手机号码！');
                        return false;
                    }
                    
                    // 手机格式不正确
                    var mobile_format = /^1[0-9]{10}$/i;
                    if (!mobile_format.test(mobile)) {
                        layer.close(loading);
                        $("#bind_mobile_new_2020").focus();
                        msg_open('请输入正确的新的手机号码！');
                        return false;
                    }

                    // 发送验证码
                    $("#bind_mobile_button_2020").val('发送中…');
                    $.ajax({
                        url: '<?php echo $RootDir; ?>/index.php?m=api&c=Ajax&a=SendMobileCode&_ajax=1',
                        data: {mobile: mobile, is_mobile: true, source: 1},
                        type:'post',
                        dataType:'json',
                        success:function(res) {
                            layer.close(loading);
                            if (res.code == 1) {
                                MobileCountDown();
                                msg_open(res.msg);
                            } else {
                                $("#bind_mobile_button_2020").val('获取验证码').removeAttr("disabled");
                                msg_open(res.msg);
                            }
                        },
                        error : function() {
                            $("#bind_mobile_button_2020").val('获取验证码').removeAttr("disabled");
                            layer.close('发送失败，请尝试重新发送！');
                            msg_open(res.msg);
                        }
                    });
                }

                // 倒计时
                function MobileCountDown() {
                    var setTime;
                    var time = 120;
                    setTime = setInterval(function(){
                        if(0 >= time){
                            clearInterval(setTime);
                            return;
                        }
                        time--;
                        $("#bind_mobile_button_2020").val(time+'秒');
                        $("#bind_mobile_button_2020").attr('disabled', 'disabled');

                        if(time == 0){
                            $("#bind_mobile_button_2020").val('获取验证码');
                            $("#bind_mobile_button_2020").removeAttr("disabled");
                        }
                    }, 1000);
                }

                // 提交手机及验证码进行绑定
                function SubmitUpdateMobile() {   
                    var loading = loa_ding();// 正在处理提示动画

                    var mobile = $("#bind_mobile_new_2020").val();
                    var reg = /^1[0-9]{10}$/i;
                    // 邮箱格式不正确
                    if(!reg.test(mobile)) {
                        layer.close(loading);
                        $("#bind_mobile_new_2020").focus();
                        msg_open('请正确输入手机号码');
                        return false;
                    }

                    var mobile_code = $("#bind_mobile_code_2020").val();
                    if(!mobile_code) {
                        layer.close(loading);
                        $("#bind_mobile_code_2020").focus();
                        msg_open('请输入手机验证码');
                        return false;
                    }

                    $.ajax({
                        url: '<?php echo $RootDir; ?>/index.php?m=user&c=Users&a=bind_mobile&_ajax=1',
                        data: $('#bind_mobile_form_2020').serialize(),
                        type:'post',
                        dataType:'json',
                        success:function(res){
                            if (res.code == 1) {
                                layer.closeAll();
                                msg_open(res.msg);
                                location.reload();
                            } else {
                                layer.close(loading);
                                msg_open(res.msg);
                            }
                        },
                        error : function() {
                            layer.close(loading);
                            footer_open('未知错误，请刷新重试');
                        }
                    });
                };
            </script>
        <?php else: ?>
            <!-- PC端 -->
            <?php if($users['is_mobile'] == '1'): ?>
                <span class="err"><a href="JavaScript:void(0);" onclick="get_<?php echo $vo['fieldArr']; ?><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_mobile_code('更改手机');">（更改手机）</a></span>
            <?php else: ?>
                <span class="err"><a href="JavaScript:void(0);" onclick="get_<?php echo $vo['fieldArr']; ?><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_mobile_code('绑定手机');">（绑定手机）</a></span>
            <?php endif; ?>
            <script type="text/javascript">
                function get_<?php echo $vo['fieldArr']; ?><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_mobile_code(title) {
                    var url = '<?php echo $RootDir; ?>/index.php?m=user&c=Users&a=bind_mobile';
                    if (url.indexOf('?') > -1) {
                        url += '&';
                    } else {
                        url += '?';
                    }
                    url += 'title=' + title;
                    //iframe窗
                    layer.open({
                        type: 2,
                        title: title,
                        shadeClose: false,
                        maxmin: false, //开启最大化最小化按钮
                        area: ['350px', '300px'],
                        content: url
                    });
                }
            </script> 
        <?php endif; ?>
        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
    </div>
</div>
                <!-- 手机文本框 end -->
            <?php break; case "email": ?>
                <!-- 邮箱文本框 start -->
                <div class="row">
                <div class="col-xs-3"><?php echo $vo['title']; ?></div>
                    <div class="col-xs-9">
                        <?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); if($is_mobile == '1'): ?>
                            <!-- 手机端 -->
                            <?php if($users['is_email'] == '1'): ?>
                                <span class="err"><a href="JavaScript:void(0);" onclick="BindEmailMobile('更改邮箱');">（更改邮箱）</a></span>
                            <?php else: ?>
                                <span class="err"><a href="JavaScript:void(0);" onclick="BindEmailMobile('绑定邮箱');">（绑定邮箱）</a></span>
                            <?php endif; else: ?>
                            <!-- PC端 -->
                            <?php if($users['is_email'] == '1'): ?>
                                <span class="err"><a href="JavaScript:void(0);" onclick="get_<?php echo $vo['fieldArr']; ?><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_email_code('更改邮箱');">（更改邮箱）</a></span>
                            <?php else: ?>
                                <span class="err"><a href="JavaScript:void(0);" onclick="get_<?php echo $vo['fieldArr']; ?><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_email_code('绑定邮箱');">（绑定邮箱）</a></span>
                            <?php endif; endif; ?>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </div>
                </div>
                <?php if($is_mobile == '2'): ?>
                    <script type="text/javascript">
                        function get_<?php echo $vo['fieldArr']; ?><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_email_code(title)
                        {
                            var url = "<?php echo url("user/Users/bind_email","",true,false,null,null,null);?>";
                            if (url.indexOf('?') > -1) {
                                url += '&';
                            } else {
                                url += '?';
                            }
                            url += 'title='+title;
                            //iframe窗
                            layer.open({
                                type: 2,
                                title: title,
                                shadeClose: false,
                                maxmin: false, //开启最大化最小化按钮
                                area: ['350px', '300px'],
                                content: url
                            });
                        }
                    </script>
                <?php endif; ?>
                <!-- 邮箱文本框 end -->
            <?php break; case "text": ?>
                <!-- 单行文本框 start -->
                <div class="row">
                    <div class="col-xs-3"><?php echo $vo['title']; ?></div>
                    <div class="col-xs-9">
                        <?php if(1 == $vo['is_required']): ?>
                            <span class="redx">*</span>
                        <?php else: ?>
                            <span class="redx">&nbsp;</span>
                        <?php endif; ?>
                        <input type="text" class="input-txt" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>"><?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </div>
                </div>
                <!-- 单行文本框 end -->
            <?php break; case "multitext": ?>
                <!-- 多行文本框 start -->
                <div class="row">
                    <div class="col-xs-3"><?php echo $vo['title']; ?></div>
                    <div class="col-xs-9">
                        <?php if(1 == $vo['is_required']): ?>
                            <span class="redx">*</span>
                        <?php else: ?>
                            <span class="redx">&nbsp;</span>
                        <?php endif; ?>
                        <textarea id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]"><?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?></textarea>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </div>
                </div>
                <!-- 多行文本框 end -->
            <?php break; case "checkbox": ?>
                <!-- 复选框 start -->
                <div class="row">
                    <div class="col-xs-3"><?php echo $vo['title']; ?></div>
                    <div class="col-xs-9">
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$v2): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                        <div class="checkbox-custom checkbox-primary">
                        <input type="checkbox" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>][]" value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>checked="checked"<?php endif; ?>><label><?php echo $v2; ?></label>
                        </div>
                        <?php echo isset($v2["ey_1563185380"])?$v2["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($v2["ey_1563185376"]))?$v2["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $v2 = []; if(1 == $vo['is_required']): ?>
                            （必选）
                        <?php endif; ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                        
                    </div>
                </div>
                <!-- 复选框 end -->
            <?php break; case "radio": ?>
                <!-- 单选项 start -->
                <div class="row">
                    <div class="col-xs-3"><?php echo $vo['title']; ?></div>
                    <div class="col-xs-9">
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$v2): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                        <div class="radio-custom radio-primary">
                        <input type="radio" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>checked="checked"<?php endif; ?>><label><?php echo $v2; ?></label>
                        </div>
                        <?php echo isset($v2["ey_1563185380"])?$v2["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($v2["ey_1563185376"]))?$v2["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $v2 = []; if(1 == $vo['is_required']): ?>
                            （必选）
                        <?php endif; ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </div>
                </div>
                <!-- 单选项 end -->
            <?php break; case "select": ?>
                <!-- 下拉框 start -->
                <div class="row">
                    <div class="col-xs-3"><?php echo $vo['title']; ?></div>
                    <div class="col-xs-9">
                        <select name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                            <option value="">请选择</option>
                            <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$v2): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                                <option value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>selected<?php endif; ?>><?php echo $v2; ?></option>
                            <?php echo isset($v2["ey_1563185380"])?$v2["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($v2["ey_1563185376"]))?$v2["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $v2 = []; ?>
                        </select>
                            <?php if(1 == $vo['is_required']): ?>
                                <span class="redx" style="float:none">*</span>
                            <?php endif; ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </div>
                </div>
                <!-- 下拉框 end -->
            <?php break; ?>
            <!-- 扩展 start -->
            <!-- 扩展 -->
<?php case "img": ?>
    <style type="text/css">
        .input-file-show{
            position: relative;
            width: 120px;
            height: 120px;
            overflow: hidden;
        }
        .input-file-show img {
            position: absolute;
            width: 120px;
            height: 120px;
        }
        .input-file-show span {
            position: absolute;
            bottom: 0;
            width: 120px;
            height: 26px;
            line-height: 26px;
            text-align: center;
            background-color: rgba(0,0,0,0.6);
            color: #fff;
            z-index: 2;
        }
    </style>
    <div class="row">
        <div class="col-xs-3">
            <?php echo $vo['title']; ?>
        </div>
        <div class="col-xs-9">
            <input type="text" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['info']) && ($vo['info'] !== '')?$vo['info']:''); ?>" class="type-file-text" style="display: none;">
            <div class="input-file-show" <?php if($is_mobile == '1'): ?> onClick="Get_mobile_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>(1,'','<?php echo $vo['title']; ?>')" <?php else: ?> onClick="GetUploadify(1,'','allimg','<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back')" <?php endif; ?>>
                <a id="a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" href="javascript:void(0);">
                    <img class="img_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" src="<?php echo (isset($vo['info']) && ($vo['info'] !== '')?$vo['info']:'/public/static/common/images/not_adv.jpg'); ?>"/>
                </a>
                <span style="cursor: pointer;">上传图片</span>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        // 手机端上传单张图
        function Get_mobile_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>(num, url, title)
        {
            var scriptUrl = '/public/plugins/layer_mobile/layer.js';
            // 支持子目录
            if (typeof __root_dir__ != "undefined") {
                scriptUrl = __root_dir__ + scriptUrl;
            }
            if (typeof __version__ != "undefined") {
                scriptUrl = scriptUrl + '?v=' + __version__;
            }
            // end
            $.getScript(scriptUrl, function(){

                if (num > 0) {
                    if (!url) {
                        url = GetUploadify_url;
                    }

                    if (url.indexOf('?') > -1) {
                        url += '&';
                    } else {
                        url += '?';
                    }
                    console.log(<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>);

                    var content = $('#update_mobile_file').html();
                    content = content.replace(/up_f/g, 'upfile');
                    content = content.replace(/form1/g,'theForm<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>');
                    content = content.replace(/MobileHeadPic/g,"changeImgMobileUpload_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>");

                    if (!title) {
                        title = '上传';
                    }
                    layer_GetUploadify = layer.open({
                        type:1,
                        title:title,
                        anim:'up',
                        style:'position:fixed; bottom:0; left:0; width: 100%; padding:10px 0; border:none;max-width: 100%;',
                        content:content,
                    });
                } else {
                    layer.open({
                        content: '允许上传0张图片',
                        skin: 'footer',
                    });
                    return false;
                }
            });
        }

        function changeImgMobileUpload_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>(){

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

                UpdateImgMobileHeadPic_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>();

                // 移动端更换头像
                function UpdateImgMobileHeadPic_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>()
                {
                    // 正在处理提示动画
                    var loading = LoaDing();
                    // 获取表单对象

                    var data = new FormData($('#theForm<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>')[0]);

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
                                console.log(<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>);
                                <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back(res.url);
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
            })
        }

        function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back(fileurl_tmp)
        {
            $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").val(fileurl_tmp);
            // $("#a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('href', fileurl_tmp);
            $(".img_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('src', fileurl_tmp);
        }
    </script>
    <!-- 单张图 end -->
<?php break; case "file":  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/plugins/layui/css/layui.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/plugins/layui/layui.js","","",""); echo $__VALUE__; ?>
    <!-- 单个文件 start -->
    <div class="row">
        <div class="col-xs-3">
            <?php echo $vo['title']; ?>
        </div>
        <div class="col-xs-9" >
            <a id="download_file_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" style="margin-right: 30px;text-decoration: underline;<?php if(!(empty($vo['dfvalue']) || (($vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator ) && $vo['dfvalue']->isEmpty()))): ?>display: '';<?php else: ?>display: none;<?php endif; ?>"
               <?php if(!(empty($vo['dfvalue']) || (($vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator ) && $vo['dfvalue']->isEmpty()))): ?> href="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>" download="<?php echo get_filename($vo['dfvalue']); ?>" <?php endif; ?>>
            <img src="/public/static/common/images/file.png" alt="" style="width: 16px;height:  16px;">下载附件</a>
            <input type="text" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>" style="display: none;">
            <button type="button" class="btn btn-primary" id="upload_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" style="height: 30px;line-height: 30px;padding: 0 5px;">上传文件</button>
        </div>
    </div>
    <script type="text/javascript">
        $(function(){
            layui.use('upload', function(){
                var upload = layui.upload,
                    layer = layui.layer;

                //执行实例
                var uploadInst = upload.render({
                    elem: "#upload_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" //绑定元素
                    ,url: "<?php echo url('user/Uploadify/DownloadUploadFileAjax'); ?>"
                    ,accept: 'file' //普通文件
                    ,done: function(res){
                        if (res.state=="SUCCESS"){
                            layer.msg('上传成功!')
                            $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").val(res.url);
                            $("#download_file_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").css('display','');
                            $("#download_file_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('href',res.url);
                            var arr = res.url.split("/");
                            var download = arr[arr.length-1];
                            $("#download_file_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('download',download);
                            $("#download_file_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").css('color','#000');
                            $("#download_file_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").html('<img src="/public/static/common/images/file.png" alt="" style="width: 16px;height:  16px;">下载附件');
                        }else {
                            $("#download_file_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").css('display','');
                            $("#download_file_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").css('color','red');
                            $("#download_file_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").text(res.state);
                        }
                    }
                    ,error: function(){
                        //请求异常回调
                    }
                });
            });
        })
    </script>
    <!-- 单个文件 end -->
<?php break; ?>
            <!-- 扩展 end -->
        <?php endswitch; ?>
<?php echo isset($vo["ey_1563185380"])?$vo["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($vo["ey_1563185376"]))?$vo["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
                                        <!-- 结束 -->
                                        <div class="row" style="border-bottom:none;">
                                            <div class="col-xs-3">
                                            </div>
                                            <div class="col-xs-9">
                                                <input type="button" onclick="UpdateUsersData();" class="btn btn-primary" value="保存资料"/>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 中部结束 -->
            </div>
        </div>
    </div>
</div>

<?php if($is_mobile == '1'): ?>
    <!-- 手机端 -->
    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/plugins/layer_mobile/layer.js","","",""); echo $__VALUE__; ?>
    <!-- 修改密码 -->
    <div id="users_change_pwd_html" style="display: none;">
        <div class="changepass">
            <form name='theForm_mobile_pwd' id="theForm_mobile_pwd" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="password" name="oldpassword" required class="form-control" placeholder="原密码">
                    </div>
                    <br/>
                    <div class="form-group">
                        <input type="password" name="password" required class="form-control" placeholder="新密码">
                    </div>
                    <br/>
                    <div class="form-group">
                        <input type="password" name="password2" required data-password="password" class="form-control" placeholder="确认密码">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="SubmitPwdData();">确定</button>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        var RootDir = '<?php echo $RootDir; ?>';
        // 提示信息，2秒自动关闭
        function msg_open(msgs){
            layer.open({
                content: msgs,
                skin: 'msg',
                time: 2,
            });
        }

        // 提示信息，估计在底部提示，点击空白处关闭
        function footer_open(msgs){
            layer.open({
                content: msgs,
                skin: 'footer',
            });
        }

        // 提示动画
        function loa_ding(){
            var loading = layer.open({
                type:2,
                content: '正在处理',
            });
            return loading;
        }

        // 修改密码
        function ChangePwdMobile()
        {
            var content = $('#users_change_pwd_html').html();
            content = content.replace(/theForm_mobile_pwd/g, 'change_pwd_mobile_2019');
            layer.open({
                type: 1,
                title: '修改密码',
                style:'position:fixed; bottom:0; left:0; width: 100%; padding:10px 0; border:none;max-width: 100%;',
                anim:'up',
                content: content,
            });
            
        }

        // 提交修改密码信息
        function SubmitPwdData()
        {
            var loading = loa_ding();// 正在处理提示动画
            $.ajax({
                url: "<?php echo url("user/Users/change_pwd","",true,false,null,null,null);?>",
                data: $('#change_pwd_mobile_2019').serialize(),
                type:'post',
                dataType:'json',
                success:function(res){
                    if(res.code == 1){
                        layer.closeAll();
                        msg_open(res.msg);
                    }else{
                        layer.close(loading);
                        msg_open(res.msg);
                    }
                },
                error : function() {
                    layer.close(loading);
                    footer_open('网络失败，请刷新页面后重试');
                }
            });
        }

        // 修改用户属性信息
        function UpdateUsersData()
        {
            var loading = loa_ding();// 正在处理提示动画
            $.ajax({
                url: "<?php echo url("user/Users/centre_update","",true,false,null,null,null);?>",
                data: $('#theForm').serialize(),
                type:'post',
                dataType:'json',
                success:function(res){
                    layer.closeAll();
                    if (1 == res.code) {
                        // 删除密码框
                        // $('#password').parent().parent().remove();
                        msg_open(res.msg);
                        location.reload();
                    } else {
                        msg_open(res.msg);
                    }
                },
                error : function() {
                    layer.closeAll();
                    footer_open('网络失败，请刷新页面后重试');
                }
            });
        };
    </script>
    <!-- 修改密码结束 -->

    <!-- 绑定、更换邮箱 -->
    <div id="users_bind_email_html" style="display: none;">
        <div class="changepass">
            <form name='theForm_mobile_email' id="theForm_mobile_email" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" id="email_mobile_old" name="email" <?php if($users['is_email'] == '0'): ?> value="<?php echo $users['email']; ?>" <?php endif; ?> required class="form-control" placeholder="新的邮箱地址">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group" style="position: relative;">
                            <input type="text" class="form-control" id="email_code_mobile" name="email_code" placeholder="邮箱验证码" style="">
                            <input type="button" id="email_button_mobile" onclick="GetEmailCodeMobile();" class="btn btn-primary" value="点击发送" />
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" style="width:88%;" onclick="SubmitDataMobile();">确定</button>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        // 绑定、更换邮箱
        function BindEmailMobile(title)
        {
            var content = $('#users_bind_email_html').html();
            content = content.replace(/theForm_mobile_email/g, 'bind_email_mobile_2019');
            content = content.replace(/email_mobile_old/, 'email_mobile_2019');
            content = content.replace(/email_code_mobile/, 'email_code_mobile_2019');
            content = content.replace(/email_button_mobile/, 'email_button_mobile_2019');
            layer.open({
                type: 1,
                title: title,
                style:'position:fixed; bottom:0; left:0; width: 100%; padding:10px 0; border:none;max-width: 100%;',
                anim:'up',
                content: content,
            });
        }

        // 获取邮箱验证码
        function GetEmailCodeMobile()
        {
            // 正在处理提示动画
            var loading = loa_ding();
            // 标题
            var title = $('h3').html();
            // 邮箱地址
            var email = $("#email_mobile_2019").val();
            // 验证邮箱格式是否正确
            var reg = /^[a-z0-9]([a-z0-9\\.]*[-_]{0,4}?[a-z0-9-_\\.]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+([\.][\w_-]+){1,5}$/i;
            if(!reg.test(email)){
                layer.close(loading);
                msg_open('邮箱格式不正确，请正确输入邮箱地址！');
                return false;
            }

            $("#email_button_mobile_2019").val('发送中…');
            $.ajax({
                url: "<?php echo url("user/Smtpmail/send_email","",true,false,null,null,null);?>",
                data: {email:email,title:title,type:'bind_email',scene:'3'},
                type:'post',
                dataType:'json',
                success:function(res){
                    if(res.code == 1){
                        layer.close(loading);
                        CountDown();
                        msg_open(res.msg);
                    }else{
                        $("#email_button_mobile_2019").val('点击发送');
                        layer.close(loading);
                        msg_open(res.msg);
                    }
                },
                error : function() {
                    $("#email_button_mobile_2019").val('点击发送');
                    layer.close(loading);
                    footer_open('网络失败，请刷新页面后重试');
                }
            });
        }

        // 提交邮箱绑定信息
        function SubmitDataMobile()
        {   
            var loading = loa_ding();// 正在处理提示动画

            // 验证邮箱格式是否正确
            var email = $("#email_mobile_2019").val();
            var reg = /^[a-z0-9]([a-z0-9\\.]*[-_]{0,4}?[a-z0-9-_\\.]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+([\.][\w_-]+){1,5}$/i;
            if(!reg.test(email)){
                layer.close(loading);
                msg_open('邮箱格式不正确，请正确输入邮箱地址！');
                return false;
            }

            // 邮箱验证码不能为空
            var email_code = $("#email_code_mobile_2019").val();
            if(!email_code){
                layer.close(loading);
                msg_open('邮箱验证码不能为空，请正确输入！');
                return false;
            }

            $.ajax({
                url: "<?php echo url("user/Users/bind_email","",true,false,null,null,null);?>",
                data: $('#bind_email_mobile_2019').serialize(),
                type:'post',
                dataType:'json',
                success:function(res){
                    if(res.code == 1){
                        layer.closeAll();
                        msg_open(res.msg);
                        location.reload();
                    }else{
                        layer.close(loading);
                        msg_open(res.msg);
                    }
                },
                error : function() {
                    layer.close(loading);
                    footer_open('网络失败，请刷新页面后重试');
                }
            });
        };

        // 倒计时
        function CountDown(){
            var setTime;
            var time = <?php echo config('global.email_send_time'); ?>;
            setTime = setInterval(function(){
                if(0 >= time){
                    clearInterval(setTime);
                    return;
                }
                time--;
                $("#email_button_mobile_2019").val(time+'秒');
                $("#email_button_mobile_2019").attr('disabled', 'disabled');

                if(time == 0){
                    $("#email_button_mobile_2019").val('点击发送');
                    $("#email_button_mobile_2019").removeAttr("disabled");
                }
            },1000);
        };
    </script>
    <!-- 绑定、更换邮箱结束 -->
    <!-- 手机端结束 -->

<?php else: ?>
    <!-- PC端 -->
    <script type="text/javascript">

        // 修改密码
        function ChangePwd()
        {
            var url = "<?php echo url("user/Users/change_pwd","",true,false,null,null,null);?>";
            //iframe窗
            layer.open({
                type: 2,
                title: '修改密码',
                shadeClose: false,
                maxmin: false, //开启最大化最小化按钮
                area: ['350px', '300px'],
                content: url
            });
        }

        // 修改用户属性信息
        function UpdateUsersData()
        {
            layer_loading('正在处理');
            $.ajax({
                url: "<?php echo url("user/Users/centre_update","",true,false,null,null,null);?>",
                data: $('#theForm').serialize(),
                type:'post',
                dataType:'json',
                success:function(res){
                    layer.closeAll();
                    if (1 == res.code) {
                        layer.msg(res.msg, {time: 1000},function(){
                            location.reload();
                        });
                    } else {
                        layer.msg(res.msg, {time: 1500, icon: 2});
                    }
                },
                error : function() {
                    layer.closeAll();
                    layer.alert('网络失败，请刷新页面后重试', {icon: 5});
                }
            });
        };
    </script>
    <!-- PC端结束 -->
<?php endif; ?>

<!-- 底部 -->
    <div class="ey-footer">
        <footer class="container">
            <p></p>
        </footer>
    </div>
</body>
</html>