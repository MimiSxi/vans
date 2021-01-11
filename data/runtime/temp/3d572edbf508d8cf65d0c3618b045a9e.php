<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:45:"./application/admin/template/inandout\add.htm";i:1610088055;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\layout.htm";i:1596507477;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
<script type="text/javascript" src="/public/plugins/laydate/laydate.js"></script>

<script type="text/javascript" src="/public/plugins/Ueditor/ueditor.config.js?v=v1.4.9"></script>
<script type="text/javascript" src="/public/plugins/Ueditor/ueditor.all.min.js?v=v1.4.9"></script>
<script type="text/javascript" src="/public/plugins/Ueditor/lang/zh-cn/zh-cn.js?v=v1.4.9"></script>

<body style="background-color: #FFF; overflow: auto;min-width:auto;">
<div id="toolTipLayer"
     style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="min-width: auto; box-shadow: none;">
    <div class="fixed-bar">
        <div class="item-title"><a class="back" href="javascript:history.back();" title="返回列表"><i
                class="fa fa-chevron-left"></i></a>
            <div class="subject">
                <h3>新增</h3>
                <h5></h5>
            </div>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('InAndOut/add'); ?>" method="post" style="">
        <!-- 常规信息 -->
        <div class="ncap-form-default tab_div_1 tab_div_body" style="">
            <span id="FieldAddonextitem" style="">

                                <dl class="row">
                    <dt class="tit">
                        <label>产品id</label>
                        <a></a>
                    </dt>
                    <dd class="opt">
                        <input type="text" value="" name="addonFieldExt[workid]"
                               id="addonFieldExt_workid" class="input-txt"
                               onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"
                               onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9]/g,''));">&nbsp;                        <span
                            class="err"></span>
                        <p class="notic"></p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">
                        <label>操作人</label>
                    </dt>
                    <dd class="opt">
                        <input type="text" class="input-txt" id="addonFieldExt_modifier" name="addonFieldExt[modifier]"
                               value="">&nbsp;                        <span class="err"></span>
                        <p class="notic"></p>
                    </dd>
                </dl>
                <!-- 单行文本框 end -->
                <!-- 日期和时间 start -->
                <dl class="row">
                    <dt class="tit">
                        <label>操作时间</label>
                    </dt>
                    <dd class="opt">
                        <input type="text" class="input-txt" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" value="<?php echo $vo['dfvalue']; ?>" autocomplete="off">
                        <span class="add-on input-group-addon">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        </span>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <script type="text/javascript">
                    $(function () {
                        $('#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>').layDate();
                    });
                </script>
                <!-- 单选项 start -->
                <dl class="row">
                    <dt class="tit">
                        <label>出入库类型</label>
                    </dt>
                    <dd class="opt">
                                                <label><input type="radio" id="addonFieldExt_inventoryLocation"
                                                              name="addonFieldExt[inventoryLocation]" value="出库"
                                                              checked="checked">出库</label>&nbsp;
                                                <label><input type="radio" id="addonFieldExt_inventoryLocation"
                                                              name="addonFieldExt[inventoryLocation]"
                                                              value="入库">入库</label>&nbsp;
                                                <span class="err"></span>
                        <p class="notic"></p>
                    </dd>
                </dl>

                <dl class="row">
                    <dt class="tit">
                        <label>描述</label>
                    </dt>
                    <dd class="opt">
                        <textarea rows="5" cols="60" id="addonFieldExt_BriefIntroduction"
                                  name="addonFieldExt[BriefIntroduction]" style="height:60px;"></textarea>
                        <span class="err"></span>
                        <p class="notic"></p>
                    </dd>
                </dl>
                 <dl class="row">
                    <dt class="tit">
                        <label>备注</label>
                    </dt>
                    <dd class="opt">
                        <textarea rows="5" cols="60" id="addonFieldExt_BriefIntroduction"
                                  name="addonFieldExt[BriefIntroduction]" style="height:60px;"></textarea>
                        <span class="err"></span>
                        <p class="notic"></p>
                    </dd>
                </dl>
                <!-- 多行文本框 end -->
            </span>

        </div>
        <!-- 常规信息 -->
        <!-- #weapp_diy001_body# -->
        <div class="ncap-form-default">
            <div class="bot">
                <input type="hidden" name="gourl" value="">
                <input type="hidden" name="channel" value="102">
                <a href="JavaScript:void(0);" onclick="check_submit();" class="ncap-btn-big ncap-btn-green"
                   id="submitBtn">确认提交</a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    // todo 判断输入框是否为空
    function check_submit() {
        layer_loading('正在处理');
        // $('#post_form').submit();
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