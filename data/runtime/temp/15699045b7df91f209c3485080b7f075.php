<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:48:"./application/admin/template/member\attr_add.htm";i:1585641958;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\layout.htm";i:1596507477;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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

<body class="bodystyle" style="overflow-y: scroll;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title"><a class="back" href="<?php echo url('Member/attr_index'); ?>" title="返回列表"><i class="fa fa-chevron-left"></i></a>
            <div class="subject">
                <h3>用户中心 - 新增属性</h3>
                <h5></h5>
            </div>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('Member/attr_add'); ?>" method="post">
        <div class="ncap-form-default tab_div_1">
            <dl class="row">
                <dt class="tit">
                    <label for="name"><em>*</em>属性标题</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="title" id="name" class="input-txt">
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="dtype"><em>*</em>属性类型</label>
                </dt>
                <dd class="opt">
                    <select name="dtype" id="dtype">
                    <?php if(is_array($field) || $field instanceof \think\Collection || $field instanceof \think\Paginator): $i = 0; $__LIST__ = $field;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['name']; ?>" data-ifoption="<?php echo (isset($vo['ifoption']) && ($vo['ifoption'] !== '')?$vo['ifoption']:0); ?>">
                            <?php echo $vo['title']; ?>
                        </option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row" id="dl_dfvalue">
                <dt class="tit">
                    <label id="label_dfvalue">默认值</label>
                </dt>
                <dd class="opt">
                    <textarea rows="5" cols="60" id="dfvalue" name="dfvalue" placeholder="如果定义字段类型为下拉框、单选项、多选项时，此处填写被选择的项目(用“,”分开，如“男,女”)。" style="height:60px;"></textarea>
                    <span class="err"></span>
                    <p class="notic">如果定义属性类型为下拉框、单选项、多选项时，此处填写被选择的项目(用“,”分开，如“男,女”)。</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>是否禁用</label>
                </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="is_hidden0" class="cb-enable">是</label>
                        <label for="is_hidden1" class="cb-disable selected">否</label>
                        <input id="is_hidden0" name="is_hidden" value="1" type="radio">
                        <input id="is_hidden1" name="is_hidden" value="0" type="radio" checked="checked">
                    </div>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>是否必填</label>
                </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="is_required1" class="cb-enable <?php if($info['is_required'] == 1): ?>selected<?php endif; ?>">是</label>
                        <label for="is_required0" class="cb-disable <?php if(empty($info['is_required'])): ?>selected<?php endif; ?>">否</label>
                        <input id="is_required1" name="is_required" value="1" type="radio" <?php if($info['is_required'] == 1): ?> checked="checked"<?php endif; ?>>
                        <input id="is_required0" name="is_required" value="0" type="radio" <?php if(empty($info['is_required'])): ?> checked="checked"<?php endif; ?>>
                    </div>
                    <p class="notic">只针对前台的用户属性有效。</p>
                </dd>
            </dl>
        </div>
        <!-- 常规选项 -->
        <div class="ncap-form-default">
            <div class="bot">
                <a href="JavaScript:void(0);" onclick="check_submit();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(function(){
        dtype_change($('#dtype'));
        $('#dtype').change(function(){
            dtype_change(this);
        });

        function dtype_change(obj){
            var dtype = $(obj).val();
            var ifoption = $(obj).find('option:selected').data('ifoption');
            if (0 <= $.inArray(dtype, ['datetime','switch','img','imgs','file'])) {
                $('#dl_dfvalue').hide();
            } else {
                if (1 == ifoption) {
                    $('#label_dfvalue').html('<em>*</em>默认值');
                } else {
                    $('#label_dfvalue').html('默认值');
                }
                $('#dl_dfvalue').show();
            }
        }
    });

    function check_submit(){
        if($('input[name="name"]').val() == ''){
            showErrorMsg('属性标题不能为空！');
            $('input[name=name]').focus();
            return false;
        }
        if($('#dtype').val() == ''){
            showErrorMsg('请选择属性类型！');
            $('input[name=dtype]').focus();
            return false;
        } else {
            var ifoption = $('#dtype').find('option:selected').data('ifoption');
            if (1 == ifoption) {
                if ($.trim($('#dfvalue').val()) == '') {
                    showErrorMsg('默认值不能为空！');
                    $('#dfvalue').focus();
                    return false;
                }
            }
        }
        if($('#dtype').val() == 'radio' || $('#dtype').val() == 'checkbox' || $('#dtype').val() == 'select'){
            var data = $.trim($('#dfvalue').val());
            data = data.split(',');
            for(var i = 0;i < data.length ;i++) {
                for(var j = i+1;j < data.length;j++) {
                    if ($.trim(data[i]) == $.trim(data [j])){
                        showErrorMsg('默认值不能含有相同的值！');
                        $('textarea[name=dfvalue]').focus();
                        return false;
                    }
                }
            }
        }
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