<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:49:"./application/admin/template/channeltype\edit.htm";i:1599557016;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\layout.htm";i:1596507477;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
<body class="bodystyle">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <a class="back" href="<?php echo url('Channeltype/index'); ?>" title="返回列表"><i class="fa fa-chevron-left"></i></a>
            <div class="subject">
                <h3>模型管理</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <li><a href="<?php echo url('Channeltype/index'); ?>" class="tab <?php if(\think\Request::instance()->controller() == 'Channeltype'): ?>current<?php endif; ?>"><span>编辑模型</span></a></li>
                <?php if(!in_array(($field['nid']), explode(',',"guestbook"))): ?>
                <li><a href="<?php echo url('Field/channel_index', array('channel_id'=>$field['id'])); ?>" class="tab <?php if(\think\Request::instance()->controller() == 'Field'): ?>current<?php endif; ?>"><span>内容字段</span></a></li>
                <?php else: ?>
                <li><a href="<?php echo url('Field/attribute_index'); ?>" class="tab <?php if(\think\Request::instance()->controller() == 'Field'): ?>current<?php endif; ?>"><span>内容字段</span></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('Channeltype/edit'); ?>" method="post">
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">
                    <label for="title"><em>*</em>模型名称</label>
                </dt>
                <dd class="opt">
                    <?php if($field['ifsystem'] == '1'): ?>
                    <?php echo (isset($field['title']) && ($field['title'] !== '')?$field['title']:''); else: ?>
                    <input type="text" name="title" value="<?php echo (isset($field['title']) && ($field['title'] !== '')?$field['title']:''); ?>" id="title" class="input-txt">
                    <?php endif; ?>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="nid">模型标识</label>
                </dt>
                <dd class="opt">
                    <?php echo $field['nid']; ?>
                    <input type="hidden" name="nid" value="<?php echo (isset($field['nid']) && ($field['nid'] !== '')?$field['nid']:''); ?>">
                    <span class="err"></span>
                    <p class="">
                        与文档的模板相关连，建议由小写字母、数字组成，因为部份Unix系统无法识别中文文件。
                        <br/>列表模板是：lists_模型标识.htm
                        <?php if(!in_array(($field['nid']), explode(',',"single,guestbook"))): ?>
                        <br/>文档模板是：view_模型标识.htm
                        <?php endif; ?>
                    </p>
                </dd>
            </dl>

            <?php if(!in_array(($field['nid']), explode(',',"single,guestbook"))): ?>
            <dl class="row">
                <dt class="tit">
                    <label>文档标题重复</label>
                </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="is_repeat_title1" class="cb-enable <?php if(!isset($field['is_repeat_title']) || $field['is_repeat_title'] == 1): ?>selected<?php endif; ?>">允许</label>
                        <label for="is_repeat_title0" class="cb-disable <?php if(isset($field['is_repeat_title']) && $field['is_repeat_title'] == 0): ?>selected<?php endif; ?>">不允许</label>
                        <input id="is_repeat_title1" name="is_repeat_title" value="1" type="radio" <?php if(!isset($field['is_repeat_title']) || $field['is_repeat_title'] == 1): ?> checked="checked"<?php endif; ?>>
                        <input id="is_repeat_title0" name="is_repeat_title" value="0" type="radio" <?php if(isset($field['is_repeat_title']) && $field['is_repeat_title'] == 0): ?> checked="checked"<?php endif; ?>>
                    </div>
                    <p class="notic">新增/编辑文档时，是否允许标题的重复</p>
                </dd>
            </dl>
            <?php endif; if(in_array(($field['nid']), explode(',',"guestbook"))): ?>
            <dl class="row">
                <dt class="tit">
                    <label for="channel_guestbook_interval">留言间隔时间</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="channel_guestbook_interval" value="<?php echo $channel_guestbook_interval; ?>" id="channel_guestbook_interval" style="width: 60px;">&nbsp;秒
                    <span class="err"></span>
                    <p class="notic">同一个IP在指定间隔秒数之内不能提交留言！</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>留言邮箱提醒</label>
                </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="smtp_is_open1" class="cb-enable <?php if(isset($smtpTplRow['is_open']) && $smtpTplRow['is_open'] == 1): ?>selected<?php endif; ?>">开启</label>
                        <label for="smtp_is_open0" class="cb-disable <?php if(empty($smtpTplRow['is_open'])): ?>selected<?php endif; ?>">关闭</label>
                        <input id="smtp_is_open1" name="smtp_is_open" value="1" type="radio" <?php if(isset($smtpTplRow['is_open']) && $smtpTplRow['is_open'] == 1): ?> checked="checked"<?php endif; ?>>
                        <input id="smtp_is_open0" name="smtp_is_open" value="0" type="radio" <?php if(empty($smtpTplRow['is_open'])): ?> checked="checked"<?php endif; ?>>
                    </div>
                    <p class="notic">客户端提交留言后，管理员会第一时间收到邮箱提醒！</p>
                    <p id="txt_smtp_is_open" class="none">提交保存后，请检查【<a href="javascript:void(0);" onclick="smtp_config();">邮件配置</a>】是否正常发送与接收！</p>
                </dd>
            </dl>
            <script type="text/javascript">
                $(function(){
                    $('input[name="smtp_is_open"]').click(function(){
                        if (1 == $(this).val()) {
                            $('#txt_smtp_is_open').show();
                        } else {
                            $('#txt_smtp_is_open').hide();
                        }
                    });
                });

                function smtp_config()
                {
                    //iframe窗
                    var iframes = layer.open({
                        type: 2,
                        title: '邮件配置',
                        fixed: true, //不固定
                        shadeClose: false,
                        shade: 0.3,
                        content: "<?php echo url('System/smtp', ['iframes'=>1]); ?>"
                    });
                    layer.full(iframes);
                }
            </script>
            <?php endif; if(in_array(($field['nid']), explode(',',"article,images"))): if($IsOpenRelease == '1'): ?>
                    <dl class="row">
                        <dt class="tit">
                            <label>开启资料上传</label>
                        </dt>
                        <dd class="opt">
                            <div class="onoff">
                                <label for="is_release1" class="cb-enable <?php if(!isset($field['is_release']) || $field['is_release'] == 1): ?>selected<?php endif; ?>">是</label>
                                <label for="is_release0" class="cb-disable <?php if(isset($field['is_release']) && $field['is_release'] == 0): ?>selected<?php endif; ?>">否</label>
                                <input id="is_release1" name="is_release" value="1" type="radio" <?php if(!isset($field['is_release']) || $field['is_release'] == 1): ?> checked="checked"<?php endif; ?>>
                                <input id="is_release0" name="is_release" value="0" type="radio" <?php if(isset($field['is_release']) && $field['is_release'] == 0): ?> checked="checked"<?php endif; ?>>
                            </div>
                            <p class="notic">开启则在资料上传中有发布入口</p>
                        </dd>
                    </dl>
                    <dl class="row">
                        <dt class="tit">
                            <label>开启投稿缩略图</label>
                        </dt>
                        <dd class="opt">
                            <div class="onoff">
                                <label for="is_litpic_users_release1" class="cb-enable <?php if(!isset($field['is_litpic_users_release']) || $field['is_litpic_users_release'] == 1): ?>selected<?php endif; ?>">是</label>
                                <label for="is_litpic_users_release0" class="cb-disable <?php if(isset($field['is_litpic_users_release']) && $field['is_litpic_users_release'] == 0): ?>selected<?php endif; ?>">否</label>
                                <input id="is_litpic_users_release1" name="is_litpic_users_release" value="1" type="radio" <?php if(!isset($field['is_litpic_users_release']) || $field['is_litpic_users_release'] == 1): ?> checked="checked"<?php endif; ?>>
                                <input id="is_litpic_users_release0" name="is_litpic_users_release" value="0" type="radio" <?php if(isset($field['is_litpic_users_release']) && $field['is_litpic_users_release'] == 0): ?> checked="checked"<?php endif; ?>>
                            </div>
                            <p class="notic">资料上传时，是否允许填写缩略图选项</p>
                        </dd>
                    </dl>
                <?php endif; endif; if(in_array(($field['nid']), explode(',',"media,download"))): if($weappRow['Qiniuyun'] == '1'): ?>
            <dl class="row">
                <dt class="tit">
                    <label>七牛云存储</label>
                </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="qiniuyun_open1" class="cb-enable <?php if(isset($field['data']['qiniuyun_open']) && $field['data']['qiniuyun_open'] == 1): ?>selected<?php endif; ?>">开启</label>
                        <label for="qiniuyun_open0" class="cb-disable <?php if(empty($field['data']['qiniuyun_open'])): ?>selected<?php endif; ?>">关闭</label>
                        <input id="qiniuyun_open1" name="data[qiniuyun_open]" value="1" type="radio" <?php if(isset($field['data']['qiniuyun_open']) && $field['data']['qiniuyun_open'] == 1): ?> checked="checked"<?php endif; ?> onclick="qiniuyun_open(this);">
                        <input id="qiniuyun_open0" name="data[qiniuyun_open]" value="0" type="radio" <?php if(empty($field['data']['qiniuyun_open'])): ?> checked="checked"<?php endif; ?> onclick="qiniuyun_open(this);">
                    </div>
                    <p class="notic">开启前，请先安装插件【七牛云图片加速】</p>
                </dd>
            </dl>
            <?php endif; if($weappRow['AliyunOss'] == '1'): ?>
            <dl class="row">
                <dt class="tit">
                    <label>oss存储</label>
                </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="oss_open1" class="cb-enable <?php if(isset($field['data']['oss_open']) && $field['data']['oss_open'] == 1): ?>selected<?php endif; ?>">开启</label>
                        <label for="oss_open0" class="cb-disable <?php if(empty($field['data']['oss_open'])): ?>selected<?php endif; ?>">关闭</label>
                        <input id="oss_open1" name="data[oss_open]" value="1" type="radio" <?php if(isset($field['data']['oss_open']) && $field['data']['oss_open'] == 1): ?> checked="checked"<?php endif; ?> onclick="oss_open(this);">
                        <input id="oss_open0" name="data[oss_open]" value="0" type="radio" <?php if(empty($field['data']['oss_open'])): ?> checked="checked"<?php endif; ?> onclick="oss_open(this);">
                    </div>
                    <p class="notic">开启前，请先安装插件【阿里云OSS对象存储】</p>
                </dd>
            </dl>
            <?php endif; endif; ?>

            <div class="bot">
                <input type="hidden" name="id" value="<?php echo $field['id']; ?>">
                <a href="JavaScript:void(0);" onclick="checkForm();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">

    function qiniuyun_open(obj)
    {
        if ($(obj).val() == 1) {
            $.ajax({
                type: 'GET',
                url: "<?php echo url('Channeltype/ajax_qiniuyun_open'); ?>",
                data: {_ajax:1},
                dataType: "JSON",
                success: function(res1){
                    if (1 == res1.code){
                        $('label[for=oss_open1]').removeClass('selected');
                        $('#oss_open1').attr('checked','');
                        $('label[for=oss_open0]').addClass('selected');
                        $('#oss_open0').attr('checked','checked');
                    }else{
                        $('label[for=qiniuyun_open1]').removeClass('selected');
                        $('#qiniuyun_open1').attr('checked','');
                        $('label[for=qiniuyun_open0]').addClass('selected');
                        $('#qiniuyun_open0').attr('checked','checked');

                        if (res1.data.code == -1) {
                            showErrorMsg(res1.msg);
                        } else if (res1.data.code == -2) {
                            layer.alert(res1.msg, {icon: 5, title: false, btn:['启用']}, function(index){
                                layer.close(index);
                                layer_loading('正在启用');
                                $.ajax({
                                    type: 'POST',
                                    url: "<?php echo url('Index/changeTableVal'); ?>",
                                    data: {table:'weapp', id_name:'id', id_value:res1.data.id, field:'status', value:1, _ajax:1},
                                    dataType: "JSON",
                                    success: function (res) {
                                        layer.closeAll();
                                        if (res.code == 1) {
                                            // $('label[for=qiniuyun_open1]').addClass('selected');
                                            // $('#qiniuyun_open1').attr('checked','checked');
                                            // $('label[for=qiniuyun_open0]').removeClass('selected');
                                            // $('#qiniuyun_open0').attr('checked','');
                                        } else {
                                            showErrorMsg(res.msg);
                                        }
                                    }
                                })
                            });
                        } else if (res1.data.code == -3) {
                            layer.confirm(res1.msg, {
                                icon: 5,
                                title: false,
                                btn: ['立即配置']
                            }, function () {
                                layer.closeAll();
                                //iframe窗
                                layer.open({
                                    type: 2,
                                    title: false,
                                    fixed: true, //不固定
                                    shadeClose: false,
                                    shade: 0.3,
                                    maxmin: false, //开启最大化最小化按钮
                                    area: ['80%', '80%'],
                                    content: "<?php echo weapp_url('Qiniuyun/Qiniuyun/index'); ?>"
                                });
                            }, function (index) {
                                layer.closeAll();
                            });
                        } else {
                            showErrorMsg(res1.msg);
                        }
                    }
                },
                error: function(e){
                    showErrorMsg(e);
                }
            });
        }
    }
    function oss_open(obj)
    {
        if ($(obj).val() == 1) {
            $.ajax({
                type: 'GET',
                url: "<?php echo url('Channeltype/ajax_oss_open'); ?>",
                data: {_ajax:1},
                dataType: "JSON",
                success: function(res1){
                    if (1 == res1.code){
                        $('label[for=qiniuyun_open1]').removeClass('selected');
                        $('#qiniuyun_open1').attr('checked','');
                        $('label[for=qiniuyun_open0]').addClass('selected');
                        $('#qiniuyun_open0').attr('checked','checked');
                    }else{
                        $('label[for=oss_open1]').removeClass('selected');
                        $('#oss_open1').attr('checked','');
                        $('label[for=oss_open0]').addClass('selected');
                        $('#oss_open0').attr('checked','checked');

                        if (res1.data.code == -1) {
                            showErrorMsg(res1.msg);
                        } else if (res1.data.code == -2) {
                            layer.alert(res1.msg, {icon: 5, title: false, btn:['启用']}, function(index){
                                layer.close(index);
                                layer_loading('正在启用');
                                $.ajax({
                                    type: 'POST',
                                    url: "<?php echo url('Index/changeTableVal'); ?>",
                                    data: {table:'weapp', id_name:'id', id_value:res1.data.id, field:'status', value:1, _ajax:1},
                                    dataType: "JSON",
                                    success: function (res) {
                                        layer.closeAll();
                                        if (res.code == 1) {
                                            // $('label[for=qiniuyun_open1]').addClass('selected');
                                            // $('#qiniuyun_open1').attr('checked','checked');
                                            // $('label[for=qiniuyun_open0]').removeClass('selected');
                                            // $('#qiniuyun_open0').attr('checked','');
                                        } else {
                                            showErrorMsg(res.msg);
                                        }
                                    }
                                })
                            });
                        } else if (res1.data.code == -3) {
                            layer.confirm(res1.msg, {
                                icon: 5,
                                title: false,
                                btn: ['立即配置']
                            }, function () {
                                layer.closeAll();
                                //iframe窗
                                layer.open({
                                    type: 2,
                                    title: false,
                                    fixed: true, //不固定
                                    shadeClose: false,
                                    shade: 0.3,
                                    maxmin: false, //开启最大化最小化按钮
                                    area: ['80%', '80%'],
                                    content: "<?php echo weapp_url('AliyunOss/AliyunOss/index'); ?>"
                                });
                            }, function (index) {
                                layer.closeAll();
                            });
                        } else {
                            showErrorMsg(res1.msg);
                        }
                    }
                },
                error: function(e){
                    showErrorMsg(e);
                }
            });
        }
    }

    // 判断输入框是否为空
    function checkForm(){
        <?php if($field['ifsystem'] != '1'): ?>
        if($.trim($('input[name=title]').val()) == ''){
            showErrorMsg('模型名称不能为空！');
            $('input[name=title]').focus();
            return false;
        }
        <?php endif; ?>
        layer_loading('正在处理');
        $('#post_form').submit();
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