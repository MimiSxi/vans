<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:48:"./application/admin/template/system\api_conf.htm";i:1610073848;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\layout.htm";i:1596507477;s:77:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\system\bar.htm";i:1610074000;s:81:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\system\pay_set.htm";i:1610073904;s:78:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\system\smtp.htm";i:1610099350;s:77:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\system\sms.htm";i:1600337777;s:83:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\system\microsite.htm";i:1591670542;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
<body class="bodystyle" style=" overflow-y: scroll;min-width:auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="min-width:auto; ">
    <?php if(\think\Request::instance()->param('tabase') != '-1'): ?>
    <div class="fixed-bar">
        <div class="item-title">
            <div class="subject">
                <h3>基本信息</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <?php if(is_check_access(CONTROLLER_NAME.'@web') == '1'): ?>
                <li><a href="<?php echo url('System/web'); ?>" <?php if('web'==ACTION_NAME): ?>class="current"<?php endif; ?>><span>网站设置</span></a></li>
                <?php endif; if($main_lang == $admin_lang): if(is_check_access(CONTROLLER_NAME.'@web2') == '1'): ?>
                    <li><a href="<?php echo url('System/web2'); ?>" <?php if('web2'==ACTION_NAME): ?>class="current"<?php endif; ?>><span>核心设置</span></a></li>
                    <?php endif; endif; if(is_check_access(CONTROLLER_NAME.'@basic') == '1'): ?>
                <li><a href="<?php echo url('System/basic'); ?>" <?php if('basic'==ACTION_NAME): ?>class="current"<?php endif; ?>><span>附件设置</span></a></li>
                <?php endif; if($main_lang == $admin_lang): if(is_check_access(CONTROLLER_NAME.'@water') == '1'): ?>
                    <li><a href="<?php echo url('System/water'); ?>" <?php if(in_array(ACTION_NAME, ['water','thumb'])): ?>class="current"<?php endif; ?>><span>图片水印</span></a></li>
                    <?php endif; endif; if($main_lang == $admin_lang): if(is_check_access(CONTROLLER_NAME.'@api_conf') == '1'): ?>
                    <li><a href="<?php echo url('System/api_conf'); ?>" <?php if(preg_match('/^api_conf/i', ACTION_NAME)): ?>class="current"<?php endif; ?>><span>接口配置</span></a></li>
                    <?php endif; endif; ?>

<!--                <?php if($main_lang == $admin_lang): ?>-->
<!--                    <?php if(is_check_access(CONTROLLER_NAME.'@pay_api_index') == '1'): ?>-->
<!--                        <li><a href="<?php echo url('PayApi/pay_api_index'); ?>" <?php if('pay_api_index'==ACTION_NAME): ?>class="current"<?php endif; ?>><span>支付接口</span></a></li>-->
<!--                    <?php endif; ?>-->
<!--                <?php endif; ?>-->
            </ul>
        </div>
    </div>
<?php endif; ?>
    <div class="flexigrid">
        <div class="mDiv">
            <div class="ftitle">
                <h3>接口配置</h3>
            </div>
            <div title="刷新数据" class="pReload"><i class="fa fa-refresh"></i></div>
        </div>

        <!-- <?php if($pay_open == '1'): ?> -->
        <!-- 微信、支付宝支付配置 -->
        <!-- <form class="form-horizontal" id="postWechatForm" action="<?php echo url('Member/wechat_set'); ?>" method="post">
    <div class="hDiv" id="wechat_set">
        <div class="hDivBox">
            <table cellspacing="0" cellpadding="0" style="width: 100%">
                <thead>
                <tr>
                    <th class="sign w10" axis="col0">
                        <div class="tc"></div>
                    </th>
                    <th abbr="article_title" axis="col3" class="w10">
                        <div class="tc">微信支付配置</div>
                    </th>
                    <th abbr="ac_id" axis="col4">
                        <div class=""></div>
                    </th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="ncap-form-default">
        <dl class="row">
            <dt class="tit">
                <label>支付方式</label>
            </dt>
            <dd class="opt">
                <div class="onoff">
                    <label for="is_open_wechat0" class="cb-enable <?php if(!isset($wechat['is_open_wechat']) || empty($wechat['is_open_wechat'])): ?>selected<?php endif; ?>">开启</label>
                    <label for="is_open_wechat1" class="cb-disable <?php if($wechat['is_open_wechat'] == 1): ?>selected<?php endif; ?>">关闭</label>
                    <input id="is_open_wechat0" name="wechat[is_open_wechat]" value="0" type="radio" <?php if(!isset($wechat['is_open_wechat']) || empty($wechat['is_open_wechat'])): ?> checked="checked"<?php endif; ?>>
                    <input id="is_open_wechat1" name="wechat[is_open_wechat]" value="1" type="radio" <?php if($wechat['is_open_wechat'] == 1): ?> checked="checked"<?php endif; ?>>
                </div>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="username"><em>*</em>微信AppId</label>
            </dt>
            <dd class="opt">
                <input type="text" name="wechat[appid]" id="appid" value="<?php echo $wechat['appid']; ?>" class="input-txt">
                <p class="notic">请输入您的微信公众平台中的微信AppId，用于微信支付。</p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="username"><em>*</em>微信商户号</label>
            </dt>
            <dd class="opt">
                <input type="text" name="wechat[mchid]" id="mchid" value="<?php echo $wechat['mchid']; ?>" class="input-txt">
                <p class="notic">请输入您的微信公众平台中的微信商户号，用于微信支付。</p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="username"><em>*</em>微信KEY值</label>
            </dt>
            <dd class="opt">
                <input type="text" name="wechat[key]" id="key" value="<?php echo $wechat['key']; ?>" class="input-txt">
                <p class="notic">请输入您的微信公众平台中的微信KEY值，用于微信支付。</p>
            </dd>
        </dl>
        <dl class="row">
            <div class="bot" style="padding-bottom:0px;">
                <a href="JavaScript:void(0);" onclick="wechatset();" class="ncap-btn-big ncap-btn-green" id="submitWechatBtn">确认提交</a>
                &nbsp;<a href="JavaScript:void(0);" onclick="click_to_eyou_1575506523('https://www.eyoucms.com/plus/view.php?aid=8829','微信支付配置教程')" style="font-size: 12px;padding-left: 10px;position:absolute;top: 30px">不会配置？</a>
            </div>
        </dl>
    </div>
</form>

<form class="form-horizontal" id="postAlipayForm" action="<?php echo url('Member/alipay_set'); ?>" method="post">
    <div class="hDiv" id="alipay_set">
        <div class="hDivBox">
            <table cellspacing="0" cellpadding="0" style="width: 100%">
                <thead>
                <tr>
                    <th class="sign w10" axis="col0">
                        <div class="tc"></div>
                    </th>
                    <th abbr="article_title" axis="col3" class="w10">
                        <div class="tc">支付宝支付配置</div>
                    </th>
                    <th abbr="ac_id" axis="col4">
                        <div class=""></div>
                    </th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="ncap-form-default"/>
        <dl class="row">
            <dt class="tit">
                <label>支付方式</label>
            </dt>
            <dd class="opt">
                <div class="onoff">
                    <label for="is_open_alipay0" class="cb-enable <?php if(!isset($alipay['is_open_alipay']) || empty($alipay['is_open_alipay'])): ?>selected<?php endif; ?>">开启</label>
                    <label for="is_open_alipay1" class="cb-disable <?php if($alipay['is_open_alipay'] == 1): ?>selected<?php endif; ?>">关闭</label>
                    <input id="is_open_alipay0" name="alipay[is_open_alipay]" value="0" type="radio" <?php if(!isset($alipay['is_open_alipay']) || empty($alipay['is_open_alipay'])): ?> checked="checked"<?php endif; ?>>
                    <input id="is_open_alipay1" name="alipay[is_open_alipay]" value="1" type="radio" <?php if($alipay['is_open_alipay'] == 1): ?> checked="checked"<?php endif; ?>>
                </div>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="uname"><em></em>使用支付宝版本</label>
            </dt>
            <dd class="opt">
                <label>
                    <input type="radio" name="alipay[version]" onclick="switch_set(this);" value="0" <?php if(empty($php_version) && empty($alipay['version'])): ?>checked="checked"<?php endif; ?> />新版接口
                    <span style="padding-left: 10px; color: #C0C0C0;">支持<font color="red">php5.5.0</font>或更高版本！(阿里云空间必须php7.0或以上)</span>
                </label>
                <br/>
                <label>
                    <input type="radio" name="alipay[version]" onclick="switch_set(this);" value="1" <?php if($alipay['version'] == 1 || $php_version == 1): ?>checked="checked"<?php endif; ?> />旧版接口
                    <span style="padding-left: 10px; color: #C0C0C0;">可支持<font color="red">php5.4</font>或更高版本！</span>
                </label>
            </dd>
        </dl>

        <div id="new_version" <?php if($alipay['version'] == 1 || $php_version == 1): ?>class="none"<?php endif; ?>>
            <dl class="row">
                <dt class="tit">
                    <label for="username"><em>*</em>支付宝APPID</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="alipay[app_id]" id="app_id" value="<?php echo $alipay['app_id']; ?>" class="input-txt">
                    <p class="notic">请输入您的支付宝APPID，用于支付宝支付。</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="username"><em>*</em>商户私钥</label>
                </dt>
                <dd class="opt">
                    <textarea rows="5" cols="80" id="merchant_private_key" name="alipay[merchant_private_key]" style="height:120px;"><?php echo $alipay['merchant_private_key']; ?></textarea>
                    <p class="notic">请输入您的商户私钥，用于支付宝支付。</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="username"><em>*</em>支付宝公钥</label>
                </dt>
                <dd class="opt">
                    <textarea rows="5" cols="80" id="alipay_public_key" name="alipay[alipay_public_key]" style="height:106px;"><?php echo $alipay['alipay_public_key']; ?></textarea>
                    <p class="notic">请输入您的支付宝公钥，用于支付宝支付。</p>
                </dd>
            </dl>
        </div>

        <div id="old_version" <?php if(empty($php_version) && empty($alipay['version'])): ?>class="none"<?php endif; ?>>
            <dl class="row">
                <dt class="tit">
                    <label for="username"><em>*</em>支付宝账号</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="alipay[account]" id="account" value="<?php echo $alipay['account']; ?>" class="input-txt">
                    <p class="notic">请输入您的支付宝账号，用于支付宝支付。</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="username"><em>*</em>交易安全校验码</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="alipay[code]" id="code" value="<?php echo $alipay['code']; ?>" class="input-txt">
                    <p class="notic">请输入您的交易安全校验码，用于支付宝支付。</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="username"><em>*</em>合作者身份ID</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="alipay[id]" id="id" value="<?php echo $alipay['id']; ?>" class="input-txt">
                    <p class="notic">请输入您的合作者身份ID，用于支付宝支付。</p>
                </dd>
            </dl>
        </div>
        <dl class="row">
            <div class="bot" style="padding-bottom: 0px;">
                <a href="JavaScript:void(0);" onclick="alipayset();" class="ncap-btn-big ncap-btn-green" id="submitAlipayBtn">确认提交</a>
            </div>
        </dl>
    </div>
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

    /*微信支付配置*/
    function wechatset(){
        if($('#postWechatForm input[id=appid]').val() == ''){
            layer.alert('微信AppId不能为空！', {icon: 2, title:false});
            return false;
        }

        if($('#postWechatForm input[id=mchid]').val() == ''){
            layer.alert('微信商户号不能为空！', {icon: 2, title:false});
            return false;
        }

        if($('#postWechatForm input[id=key]').val() == ''){
            layer.alert('微信KEY值不能为空！', {icon: 2, title:false});
            return false;
        }

        layer_loading('正在处理');
        $.ajax({
            url: "<?php echo url('Member/wechat_set', ['_ajax'=>1]); ?>",
            type: 'POST',
            dataType: 'JSON',
            data: $('#postWechatForm').serialize(),
            success: function(res){
                layer.closeAll();
                if (1 == res.code) {
                    layer.msg(res.msg, {icon: 1, time: 1000});
                    return false;
                } else {
                    layer.alert(res.msg, {icon: 2, title:false});
                    return false;
                }
            },
            error: function(e){
                layer.closeAll();
                showErrorMsg(ey_unknown_error);
                return false;
            }
        });
    }

    function php_version(is){
        var php_version = <?php echo $php_version; ?>;
        // php_version=1，表示php本版低于5.5.0，不可用新版支付方式
        if (php_version == 1) {
            if (is == true) {
                layer.alert('PHP版本低于5.5.0，不可用新版支付方式，请使用旧版！', {icon: 2, title:false});
            }
            $("#postAlipayForm input[name='alipay[version]'][value=1]").attr("checked","checked");
            return false;
        }
        return true;
    }

    function switch_set(obj){
        var switch_set = $(obj).val();
        if (switch_set == 0) {
            if (php_version(true)) {
                $("#postAlipayForm #new_version").show();
                $("#postAlipayForm #old_version").hide();
            }
        }else if (switch_set == 1) {
            $("#postAlipayForm #new_version").hide();
            $("#postAlipayForm #old_version").show();
        }
    }

    function alipayset(){
        var switch_set = $("#postAlipayForm input[name='alipay[version]']:checked").val();
        if (switch_set == 0) {
            // 新版判断
            if($('#postAlipayForm #app_id').val() == ''){
                layer.alert('支付APPID不能为空！', {icon: 2, title:false});
                return false;
            }

            if($('#postAlipayForm #merchant_private_key').val() == ''){
                layer.alert('商户私钥不能为空！', {icon: 2, title:false});
                return false;
            }

            if($('#postAlipayForm #alipay_public_key').val() == ''){
                layer.alert('支付宝公钥不能为空！', {icon: 2, title:false});
                return false;
            }
        }else if (switch_set == 1) {
            // 旧版判断
            if($('#postAlipayForm #account').val() == ''){
                layer.alert('支付宝账号不能为空！', {icon: 2, title:false});
                return false;
            }

            if($('#postAlipayForm #code').val() == ''){
                layer.alert('交易安全校验码不能为空！', {icon: 2, title:false});
                return false;
            }

            if($('#postAlipayForm #id').val() == ''){
                layer.alert('合作者身份ID不能为空！', {icon: 2, title:false});
                return false;
            }
        }

        layer_loading('正在处理');
        $.ajax({
            url: "<?php echo url('Member/alipay_set', ['_ajax'=>1]); ?>",
            type: 'POST',
            dataType: 'JSON',
            data: $('#postAlipayForm').serialize(),
            success: function(res){
                layer.closeAll();
                if (1 == res.code) {
                    layer.msg(res.msg, {icon: 1, time: 1000});
                    return false;
                } else {
                    layer.alert(res.msg, {icon: 2, title:false});
                    return false;
                }
            },
            error: function(e){
                layer.closeAll();
                showErrorMsg(ey_unknown_error);
                return false;
            }
        });
    }
</script> -->
        <!-- END -->
        <!-- <?php endif; ?> -->

        <!-- 邮箱配置 -->
        <div class="hDiv" id="smtp">
    <div class="hDivBox">
        <table cellspacing="0" cellpadding="0" style="width: 100%">
            <thead>
            <tr>
                <th class="sign w10" axis="col0">
                    <div class="tc"></div>
                </th>
                <th abbr="article_title" axis="col3" class="w10">
                    <div id="anchor-sms" class="tc">邮箱配置</div>
                </th>
                <th abbr="ac_id" axis="col4">
                    <div class=""></div>
                </th>
            </tr>
            </thead>
        </table>
    </div>
</div>
<form method="post" id="handlepost">
    <div class="ncap-form-default">
<!--        <dl class="row">-->
<!--            <dt class="tit">-->
<!--                <label for="smtp_server">发送邮件内容</label>-->
<!--            </dt>-->
<!--            <dd class="opt">-->
<!--                [<a href="javascript:void(0);" onclick="click_to_eyou_1575506523('<?php echo url('System/smtp_tpl'); ?>','邮件配置模板');">配置模板</a>]-->
<!--                <p class=""></p>-->
<!--            </dd>-->
<!--        </dl>-->
        <dl class="row">
            <dt class="tit">
                <label for="smtp_server"><em>*</em>邮件发送服务器(SMTP)</label>
            </dt>
            <dd class="opt">
                <input id="smtp_server" name="smtp_server" value="<?php echo (isset($smtp['smtp_server']) && ($smtp['smtp_server'] !== '')?$smtp['smtp_server']:''); ?>" class="input-txt" type="text"/>
                <p class="">发送邮箱的smtp地址。如: smtp.qq.com或smtp.gmail.com</p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="smtp_port"><em>*</em>服务器(SMTP)端口</label>
            </dt>
            <dd class="opt">
                <input id="smtp_port" name="smtp_port" value="<?php echo (isset($smtp['smtp_port']) && ($smtp['smtp_port'] !== '')?$smtp['smtp_port']:465); ?>" class="input-txt" type="text"/>
                <p class="notic">
                    smtp的端口，默认为465，具体请参看各STMP服务商的设置说明。
                </p>
                <p class=""><span style="color: red;">注意：如果使用阿里云服务器或Gmail，请将端口设为465，其他的可以尝试端口设为25</span>
                </p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="smtp_user"><em>*</em>邮箱账号</label>
            </dt>
            <dd class="opt">
                <input id="smtp_user" name="smtp_user" value="<?php echo (isset($smtp['smtp_user']) && ($smtp['smtp_user'] !== '')?$smtp['smtp_user']:''); ?>" class="input-txt" type="text"/>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="smtp_pwd"><em>*</em>邮箱授权码</label>
            </dt>
            <dd class="opt">
                <input id="smtp_pwd"  name="smtp_pwd" value="<?php echo (isset($smtp['smtp_pwd']) && ($smtp['smtp_pwd'] !== '')?$smtp['smtp_pwd']:''); ?>" class="input-txt" type="text"/>
                <p class="">使用发送邮件的邮箱授权码。具体请点击参看【<a href="JavaScript:void(0);" onclick="click_to_eyou_1575506523('https://www.eyoucms.com/plus/view.php?aid=5552','获取邮箱授权码')">使用指南</a>】</p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit"><em>*</em>管理员邮箱地址</dt>
            <dd class="opt">
                <input value="<?php echo (isset($smtp['smtp_from_eamil']) && ($smtp['smtp_from_eamil'] !== '')?$smtp['smtp_from_eamil']:''); ?>" name="smtp_from_eamil" id="smtp_from_eamil" class="input-txt" type="text">
                <input value="测试发送" class="input-btn" onclick="sendEmail();" type="button">
                <p class="notic">多个邮箱可以用逗号隔开</p>
            </dd>
        </dl>

<!--        <dl class="row">-->
<!--            <dt class="tit">邮箱提醒</dt>-->
<!--            <dd class="opt">-->
<!--                <ul class="nc-row ncap-waybill-list">-->
<!--                    <li style="width: 100%;">-->
<!--                        <label class="label" onmouseover="layer_tips = layer.tips('对管理员发送邮件提醒', this, {time:100000});" onmouseout="layer.close(layer_tips);">-->
<!--                            <input class="check" type="checkbox" name="smtp_shop_order_pay" <?php if(!empty($smtp['smtp_shop_order_pay'])): ?> value="1" checked="checked" <?php endif; ?>><span>订单付款</span>-->
<!--                        </label>-->
<!--                        &nbsp; &nbsp;-->
<!--                        <label class="label" onmouseover="layer_tips = layer.tips('对用户发送邮件提醒', this, {time:100000});" onmouseout="layer.close(layer_tips);">-->
<!--                            <input class="check" type="checkbox" name="smtp_shop_order_send" <?php if(!empty($smtp['smtp_shop_order_send'])): ?> value="1" checked="checked" <?php endif; ?>><span>订单发货</span>-->
<!--                        </label>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </dd>-->
<!--        </dl>-->

        <div class="bot">
            <a href="JavaScript:void(0);" class="ncap-btn-big ncap-btn-green" onclick="submit_smtp();">确认提交</a>
        </div>
    </div>
</form>

<script type="text/javascript">
    // 提交邮箱配置
    function submit_smtp() {
        if ($('input[name="smtp_server"]').val() == '') {
            showErrorMsg('邮件发送服务器不能为空！');
            $('input[name=smtp_server]').focus();
            return false;
        }
        if ($('input[name="smtp_user"]').val() == '' || !checkEmail($('input[name="smtp_user"]').val())) {
            showErrorMsg('邮箱账号的格式不正确！');
            $('input[name=smtp_user]').focus();
            return false;
        }
        if ($('input[name="smtp_pwd"]').val() == '') {
            showErrorMsg('邮箱授权码不能为空！');
            $('input[name=smtp_pwd]').focus();
            return false;
        }
        if ($('input[name="smtp_from_eamil"]').val() == '') {
            showErrorMsg('接收的邮件地址不能为空！');
            $('input[name=smtp_from_eamil]').focus();
            return false;
        }
        
        layer_loading("正在处理");
        $.ajax({
            url: "<?php echo url('System/smtp', ['_ajax'=>1]); ?>",
            type: 'POST',
            dataType: 'JSON',
            data: $('#handlepost').serialize(),
            success: function(res) {
                layer.closeAll();
                if (1 == res.code) {
                    layer.msg(res.msg, {icon: 1, time: 1000});
                    return false;
                } else {
                    var icon = 2;
                    try{
                        if (res.data.icon) {
                            icon = res.data.icon;
                        }
                    }catch(e){}
                    layer.alert(res.msg, {icon: icon, title: false});
                    return false;
                }
            },
            error: function(e){
                layer.closeAll();
                showErrorMsg(ey_unknown_error);
                return false;
            }
        });
    }

    // 测试邮箱发送
    function sendEmail() {
        var email = $('#smtp_from_eamil').val();
        if (email == '') {
            showErrorMsg('接收的邮件地址不能为空！');
            $('input[name=smtp_from_eamil]').focus();
            return false;
        } else {
            var loading = layer_loading('正在发送');
            $.ajax({
                type: "post",
                data: $('#handlepost').serialize(),
                dataType: 'json',
                url: "<?php echo url('System/send_email', ['_ajax'=>1]); ?>",
                success: function (res) {
                    layer.closeAll();
                    if (res.code == 1) {
                        layer.msg(res.msg, {icon: 1, time:1000});
                    } else {
                        layer.msg(res.msg, {icon: 2, time: 2000});
                    }
                },
                error: function() {
                    layer.closeAll();
                    layer.msg('发送超时，稍后重试~', {icon: 2, time: 1500});
                }
            })
        }
    }
</script> 
        <!-- END -->

        <!-- 手机短信配置 -->
<!--        <form class="form-horizontal" id="postSmsForm" method="post">
    <div class="hDiv" id="sms">
        <div class="hDivBox">
            <table cellspacing="0" cellpadding="0" style="width: 100%">
                <thead>
                <tr>
                    <th class="sign w10" axis="col0">
                        <div class="tc"></div>
                    </th>
                    <th abbr="article_title" axis="col3" class="w10">
                        <div id="anchor-sms" class="tc">
                            <?php if(!(empty($is_eyou_authortoken) || (($is_eyou_authortoken instanceof \think\Collection || $is_eyou_authortoken instanceof \think\Paginator ) && $is_eyou_authortoken->isEmpty()))): ?>
                                <i class="anchor-icon anchor-icon-biao" title="限商业授权以上可用"></i>
                            <?php endif; ?>
                            短信配置
                        </div>
                    </th>
                    <th abbr="ac_id" axis="col4">
                        <div class=""></div>
                    </th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="ncap-form-default">
        <dl class="row">
            <dt class="tit">
                <label for="sms_platform">选择短信平台</label>
            </dt>
            <dd class="opt">
                <select name="sms_platform" id="sms_platform">
                    <option value="1" <?php if(isset($sms['sms_platform']) && $sms['sms_platform'] == 1): ?>selected="selected"<?php endif; ?>>阿里云短信</option>
                </select>
                <p class="notic"></p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="smtp_server">发送手机内容</label>
            </dt>
            <dd class="opt">
                [<a href="javascript:void(0);" onclick="sms_tpl_list();">配置模板</a>]
                <p class=""></p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <em>*</em>
                <label for="sms_appkey">短信平台[appkey]</label>
            </dt>
            <dd class="opt">
                <input id="sms_appkey" name="sms_appkey" value="<?php echo (isset($sms['sms_appkey']) && ($sms['sms_appkey'] !== '')?$sms['sms_appkey']:''); ?>" class="input-txt" type="text"/>
                <p class="notic">短信平台配置appkey/keyid</p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <em>*</em>
                <label for="sms_secretkey">短信平台[secretKey]</label>
            </dt>
            <dd class="opt">
                <input id="sms_secretkey" name="sms_secretkey" value="<?php echo (isset($sms['sms_secretkey']) && ($sms['sms_secretkey'] !== '')?$sms['sms_secretkey']:''); ?>" class="input-txt" type="text"/>
                <p class="notic">短信平台配置secretKey</p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit"><em>*</em>接收的手机号码</dt>
            <dd class="opt">
                <input value="<?php echo (isset($sms['sms_test_mobile']) && ($sms['sms_test_mobile'] !== '')?$sms['sms_test_mobile']:''); ?>" name="sms_test_mobile" id="sms_test_mobile" class="input-txt" type="text">
                <input value="测试发送" class="input-btn" onclick="sendMobile();" type="button">
                <p class="notic"></p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">短信提醒</dt>
            <dd class="opt">
                <ul class="nc-row ncap-waybill-list">
                    <li style="width: 100%;">
                        <label class="label">
                            <input class="check" type="checkbox" name="sms_shop_order_pay" <?php if(!empty($sms['sms_shop_order_pay'])): ?> value="1" checked="checked" <?php endif; ?>><span onmouseover="layer_tips = layer.tips('对管理员发送短信提醒', this, {time:100000});" onmouseout="layer.close(layer_tips);">订单付款</span>
                        </label>
                        &nbsp; &nbsp;
                        <label class="label">
                            <input class="check" type="checkbox" name="sms_shop_order_send" <?php if(!empty($sms['sms_shop_order_send'])): ?> value="1" checked="checked" <?php endif; ?>><span onmouseover="layer_tips = layer.tips('对用户发送短信提醒', this, {time:100000});" onmouseout="layer.close(layer_tips);">订单发货</span>
                        </label>
                    </li>
                </ul>
            </dd>
        </dl>
        <dl class="row">
            <div class="bot" style="padding-bottom:0px;">
                <a href="JavaScript:void(0);" onclick="submit_sms();" class="ncap-btn-big ncap-btn-green">确认提交</a>
                &nbsp;<a href="JavaScript:void(0);" onclick="click_to_eyou_1575506523('https://www.eyoucms.com/plus/view.php?aid=8754','短信配置教程')" style="font-size: 12px;padding-left: 10px;position:absolute;top: 30px">不会配置？</a>
            </div>
        </dl>
    </div>
</form>

<script type="text/javascript">
    function submit_sms(){
        if ($('#postSmsForm input[name="sms_appkey"]').val() == '') {
            showErrorMsg('请填写短信平台[appkey]！');
            $('#postSmsForm input[name=sms_appkey]').focus();
            return false;
        }
        if ($('#postSmsForm input[name="sms_secretkey"]').val() == '') {
            showErrorMsg('请填写短信平台[secretKey]！');
            $('#postSmsForm input[name=sms_secretkey]').focus();
            return false;
        }
        if ($('#postSmsForm input[name="sms_test_mobile"]').val() == '') {
            showErrorMsg('接收的手机号码不能为空！');
            $('#postSmsForm input[name=sms_test_mobile]').focus();
            return false;
        }

        layer_loading("正在处理");
        $.ajax({
            url: "<?php echo url('System/sms', ['_ajax'=>1]); ?>",
            type: 'POST',
            dataType: 'JSON',
            data: $('#postSmsForm').serialize(),
            success: function(res){
                layer.closeAll();
                if (1 == res.code) {
                    layer.msg(res.msg, {icon: 1, time: 1000});
                    return false;
                } else {
                    var icon = 2;
                    try{
                        if (res.data.icon) {
                            icon = res.data.icon;
                        }
                    }catch(e){}
                    layer.alert(res.msg, {icon: icon, title:false});
                    return false;
                }
            },
            error: function(e){
                layer.closeAll();
                showErrorMsg(ey_unknown_error);
                return false;
            }
        });
    }

    function sendMobile() {
        var mobile = $('#sms_test_mobile').val();
        if (mobile == '') {
            showErrorMsg('接收的手机号码不能为空！');
            $('#postSmsForm input[name=sms_test_mobile]').focus();
            return false;
        } else {
            var loading = layer_loading('发送中');
            $.ajax({
                type: "post",
                data: $('#postSmsForm').serialize(),
                dataType: 'json',
                url: "<?php echo url('System/send_mobile'); ?>",
                success: function (res) {
                    layer.closeAll();
                    if (res.code == 1) {
                        layer.msg('发送成功', {icon: 1, time:1000});
                    } else {
                        layer.msg(res.msg, {icon: 1, time: 1000});
                    }
                },
                error: function(){
                    layer.closeAll();
                    layer.msg('发送超时，稍后重试~', {icon: 2, time: 1500});
                }
            })
        }
    }

    function sms_tpl_list() {
        var url = "<?php echo url('System/sms_tpl'); ?>";
        //iframe窗
        layer.open({
            type: 2,
            title: '手机短信模板配置',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            maxmin: true, //开启最大化最小化按钮
            area: ['80%', '80%'],
            content: url
        });
    }
</script> -->
        <!-- END -->

        <!-- 微站点配置 -->
<!--        <form class="form-horizontal" id="postMicrosite" method="post">
    <div class="hDiv" id="microsite">
        <div class="hDivBox">
            <table cellspacing="0" cellpadding="0" style="width: 100%">
                <thead>
                <tr>
                    <th class="sign w10" axis="col0">
                        <div class="tc"></div>
                    </th>
                    <th abbr="article_title" axis="col3" class="w10">
                        <div class="tc">
                            <?php if(!(empty($is_eyou_authortoken) || (($is_eyou_authortoken instanceof \think\Collection || $is_eyou_authortoken instanceof \think\Paginator ) && $is_eyou_authortoken->isEmpty()))): ?>
                                <i class="anchor-icon anchor-icon-biao" title="限商业授权以上可用"></i>
                            <?php endif; ?>
                            微站点设置
                        </div>
                    </th>
                    <th abbr="ac_id" axis="col4">
                        <div class=""></div>
                    </th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="ncap-form-default">
        <dl class="row">
            <dt class="tit">
                <label>微站点模式</label>
                <input type="hidden" id="shop_micro" value="<?php echo $userConfig['shop_micro']; ?>">
            </dt>
            <dd class="opt" style="line-height: 30px;">
                <label>
                    <input type="radio" name="shop[shop_micro]" id="shop_micro1" value="1" <?php if($userConfig['shop_micro'] == 1): ?> checked="checked" <?php endif; ?> onclick="DetectConfig(1);"/>开启
                </label>
                &nbsp;&nbsp;&nbsp;
                <label>
                    <input type="radio" name="shop[shop_micro]" id="shop_micro0" value="0" <?php if(empty($userConfig['shop_micro'])): ?> checked="checked" <?php endif; ?>/>关闭
                </label>
                &nbsp;&nbsp;&nbsp;
                <p class="notic">开启后，在微信里访问不需要注册或登录，需要先配置下方微信参数</p>
            </dd>
        </dl>

        <dl class="row">
            <dt class="tit">
                <label>强制微信模式</label>
                <input type="hidden" id="shop_force_use_wechat" value="<?php echo $userConfig['shop_force_use_wechat']; ?>">
            </dt>
            <dd class="opt" style="line-height: 30px;">
                <label>
                    <input type="radio" name="shop[shop_force_use_wechat]" id="shop_force_use_wechat1" value="1" <?php if($userConfig['shop_force_use_wechat'] == 1): ?> checked="checked" <?php endif; ?> onclick="DetectConfig(2);"/>开启
                </label>
                &nbsp;&nbsp;&nbsp;
                <label>
                    <input type="radio" name="shop[shop_force_use_wechat]" id="shop_force_use_wechat0" value="0" <?php if(empty($userConfig['shop_force_use_wechat'])): ?> checked="checked" <?php endif; ?> onclick="DetectConfig(3);"/>关闭
                </label>
                &nbsp;&nbsp;&nbsp;
                <p class="notic">开启后，只能在微信内访问，需要先开启微站点模式</p>
            </dd>
        </dl>

        <dl class="row">
            <dt class="tit">
                <label for="WX_appid"><em>*</em>微信AppId</label>
            </dt>
            <dd class="opt">
                <input type="text" name="login[appid]" id="WX_appid" value="<?php echo $login['appid']; ?>" class="input-txt">
                <p class="notic">微信公众平台微信AppId，用于微信登录<span style="color: red;">(同微信支付配置AppId)</span></p>
            </dd>
        </dl>

        <dl class="row">
            <dt class="tit">
                <label for="appsecret"><em>*</em>微信AppSecret</label>
            </dt>
            <dd class="opt">
                <input type="text" name="login[appsecret]" id="appsecret" value="<?php echo $login['appsecret']; ?>" class="input-txt">
                <p class="notic">微信公众平台微信AppSecret密钥，用于微信登录</p>
            </dd>
        </dl>

        <dl class="row">
            <dt class="tit">
                <label for="wechat_name">公众号的微信号</label>
            </dt>
            <dd class="opt">
                <input type="text" name="login[wechat_name]" id="wechat_name" value="<?php echo $login['wechat_name']; ?>" class="input-txt">
                <p class="notic">微信公众平台微信号，用于开启<span style="color: red;">强制微信模式</span>时在PC和移动端展示</p>
            </dd>
        </dl>

        <dl class="row">
            <dt class="tit">
                <label for="wechat_pic">公众号二维码</label>
            </dt>
            <dd class="opt">
                <div class="input-file-show">
                    <span class="show">
                        <a id="img_a_wechat_pic" class="nyroModal" rel="gal" href="<?php echo (isset($login['wechat_pic']) && ($login['wechat_pic'] !== '')?$login['wechat_pic']:'javascript:void(0);'); ?>?t=<?php echo time(); ?>" target="_blank">
                            <i id="img_i_wechat_pic" class="fa fa-picture-o" <?php if(!(empty($login['wechat_pic']) || (($login['wechat_pic'] instanceof \think\Collection || $login['wechat_pic'] instanceof \think\Paginator ) && $login['wechat_pic']->isEmpty()))): ?>onmouseover="layer_tips=layer.tips('<img src=<?php echo (isset($login['wechat_pic']) && ($login['wechat_pic'] !== '')?$login['wechat_pic']:''); ?>?t=<?php echo time(); ?> width=300 height=300>',this,{tips: [1, '#fff']});"<?php endif; ?> onmouseout="layer.close(layer_tips);"></i>
                        </a>
                    </span>
                    <span class="type-file-box">
                        <input type="text" id="wechat_pic" name="login[wechat_pic]" value="<?php echo (isset($login['wechat_pic']) && ($login['wechat_pic'] !== '')?$login['wechat_pic']:''); ?>" class="type-file-text">
                        <input type="button" name="button" id="button1" value="选择上传..." class="type-file-button">
                        <input class="type-file-file" onclick="GetUploadify(1, '', 'allimg', 'wechat_pic_call_back')" size="30" hidefocus="true" nc_type="change_site_logo" title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
                    </span>
                </div>
                <span class="err"></span>
                <p class="notic">微信公众平台微信号，用于开启<span style="color: red;">强制微信模式</span>时在PC和移动端展示</p>
            </dd>
        </dl>

        <dl class="row">
            <div class="bot" style="padding-bottom:0px;">
                <a href="JavaScript:void(0);" onclick="submit_microsite();" class="ncap-btn-big ncap-btn-green">确认提交</a>
                &nbsp;<a href="JavaScript:void(0);" onclick="click_to_eyou_1575506523('https://www.eyoucms.com/plus/view.php?aid=10166','微站点设置')" style="font-size: 12px;padding-left: 10px;position:absolute;top: 30px">不会配置？</a>
            </div>
        </dl>
    </div>
</form>
<script type="text/javascript">
    // 提交
    function submit_microsite(){
        layer_loading("正在处理");
        $.ajax({
            url: "<?php echo url('System/microsite', ['_ajax'=>1]); ?>",
            type: 'POST',
            dataType: 'JSON',
            data: $('#postMicrosite').serialize(),
            success: function(res){
                layer.closeAll();
                if (1 == res.code) {
                    layer.msg(res.msg, {icon: 1, time: 1000});
                    return false;
                } else {
                    var icon = 2;
                    try{
                        if (res.data.icon) {
                            icon = res.data.icon;
                        }
                    }catch(e){}
                    layer.alert(res.msg, {icon: icon, title:false});
                    return false;
                }
            },
            error: function(e){
                layer.closeAll();
                showErrorMsg(ey_unknown_error);
                return false;
            }
        });
    }

    // 检测是否配置微信参数
    function DetectConfig(type) {
        if (3 == type) {
            $('#shop_micro0').removeAttr("disabled");
            return false;
        }

        var WX_appid = $('#WX_appid');
        if (!WX_appid.val() || '' == WX_appid.val()) {
            WX_appid.focus();
            layer.msg('请先填写微信AppId');
            if (1 == type) {
                $("#shop_micro0").click();
            } else if (2 == type) {
                $("#shop_force_use_wechat0").click();
            }
            return false;
        }

        var appsecret = $('#appsecret');
        if (!appsecret.val() || '' == appsecret.val()) {
            appsecret.focus();
            layer.msg('请先填写微信AppSecret');
            if (1 == type) {
                $("#shop_micro0").click();
            } else if (2 == type) {
                $("#shop_force_use_wechat0").click();
            }
            return false;
        }

        if (2 == type) {
            // 设置微信端开启
            $("#shop_force_use_wechat1, #shop_micro1").attr('checked', true);
            $('#shop_micro0').attr("disabled", "disabled");
        }
    }

    // 加载图片显示
    function wechat_pic_call_back(fileurl_tmp) {
        $("#wechat_pic").val(fileurl_tmp);
        $("#img_a_wechat_pic").attr('href', fileurl_tmp);
        $("#img_i_wechat_pic").attr('onmouseover', "layer_tips=layer.tips('<img src="+fileurl_tmp+" width=300 height=300>',this,{tips: [1, '#fff']});");
    }
</script>-->
        <!-- END -->
    </div>
</div>

<!--&lt;!&ndash;右悬浮配置导航&ndash;&gt;-->
<!--<div class="floatNav">-->
<!--    <div class="floatNav-tit">-->
<!--        配置快捷导航-->
<!--    </div>-->
<!--    <div class="floatNav-con">-->
<!--        <ul>-->
<!--            &lt;!&ndash; <li>-->
<!--                <div class="dot"></div>-->
<!--                <div class="event" data-to="wechat_set"><a href="javascript:void(0);">微信支付配置</a></div>-->
<!--            </li>-->
<!--            <li>-->
<!--                <div class="dot"></div>-->
<!--                <div class="event" data-to="alipay_set"><a href="javascript:void(0);">支付宝支付配置</a></div>-->
<!--            </li> &ndash;&gt;-->
<!--            <li>-->
<!--                <div class="dot"></div>-->
<!--                <div class="event" data-to="smtp"><a href="javascript:void(0);">邮箱配置</a></div>-->
<!--            </li>-->
<!--&lt;!&ndash;            <li>&ndash;&gt;-->
<!--&lt;!&ndash;                <div class="dot"></div>&ndash;&gt;-->
<!--&lt;!&ndash;                <div class="event" data-to="sms"><a href="javascript:void(0);">短信配置</a></div>&ndash;&gt;-->
<!--&lt;!&ndash;            </li>&ndash;&gt;-->
<!--&lt;!&ndash;            <li>&ndash;&gt;-->
<!--&lt;!&ndash;                <div class="dot"></div>&ndash;&gt;-->
<!--&lt;!&ndash;                <div class="event" data-to="microsite"><a href="javascript:void(0);">微站点设置</a></div>&ndash;&gt;-->
<!--&lt;!&ndash;            </li>&ndash;&gt;-->
<!--            &lt;!&ndash; <li>-->
<!--                <div class="dot"></div>-->
<!--                <div class="event" data-to="oss"><a href="javascript:void(0);">OSS配置</a></div>-->
<!--            </li> &ndash;&gt;-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->

<script type="text/javascript">
    $(function(){
        var to = "<?php echo \think\Request::instance()->param('sys'); ?>";
        if (to) {
            var div_top = document.getElementById(to).offsetTop;
            window.scrollTo(0, div_top + 70);
        }
        //右侧浮动点击定位到相应模块
        var lis = document.getElementsByClassName("event");
        for(var i = 0; i < lis.length; i++) {
            lis[i].onclick = function() {
                //获取当前event的data-to属性值，用来匹配目标div
                var attr = this.getAttribute("data-to");
                //获取与当前event想匹配的div距离页面顶端的距离
                var div_top = document.getElementById(attr).offsetTop;
                window.scrollTo(0, div_top + 70);
            }
        }
    })
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