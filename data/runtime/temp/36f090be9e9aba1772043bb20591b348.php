<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:44:"./application/admin/template/custom\edit.htm";i:1610006203;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\layout.htm";i:1596507477;s:98:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\archives\get_field_addonextitem.htm";i:1609233025;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
<div class="page" style="min-width:auto;box-shadow:none;">
    <div class="fixed-bar">
        <div class="item-title"><a class="back" href="javascript:history.back();" title="返回列表"><i
                class="fa fa-chevron-left"></i></a>
            <div class="subject">
                <h3>编辑</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <li><a href="javascript:void(0);" data-index='1' class="tab current"><span>常规选项</span></a></li>
                <li><a href="javascript:void(0);" data-index='2' class="tab"><span>SEO选项</span></a></li>
                <li><a href="javascript:void(0);" data-index='3' class="tab"><span>其他选项</span></a></li>
                <?php if($field['channel'] == 101): ?>
                <li><a href="javascript:void(0);" data-index='4' class="tab"><span>产品管理</span></a></li>
                <?php endif; if($field['channel'] == 102): ?>
                <li><a href="javascript:void(0);" data-index='5' class="tab"><span>出入库管理</span></a></li>
                <?php endif; ?>
                <!-- #weapp_diy001_tab# -->
            </ul>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('Custom/edit'); ?>" method="post">
        <!-- 常规信息 start -->
        <div class="ncap-form-default tab_div_1 tab_div_body">
            <dl class="row">
                <dt class="tit">
                    <label for="title"><em>*</em>标题</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="title" value="<?php echo $field['title']; ?>" id="title" class="input-txt" maxlength="100">
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="title"><em>*</em>所属栏目</label>
                </dt>
                <dd class="opt">
                    <select name="typeid" id="typeid">
                        <?php echo $arctype_html; ?>
                    </select>
                    <span class="err"></span>
                    <p class="notic">谨慎切换，自定义字段的内容会随着栏目切换而清空，在保存之前不受影响！</p>
                </dd>
            </dl>

            <?php if($typename == '设计部'||$typename == '产品管理'): ?>
            <dl class="row">
                <dt class="tit">
                    <label for="title"><em>*</em>设计师</label>
                </dt>
                <dd class="opt">
                    <select name="designername" id="designername">
                        <?php echo $designerInfo; ?>
                    </select>
                    <span class="err"></span>
                </dd>
            </dl>
            <?php endif; ?>

            <dl class="row">
                <dt class="tit">
                    <label>文档属性</label>
                </dt>
                <dd class="opt">
                    <label><input type="checkbox" name="is_head" value="1" <?php if($field['is_head'] == 1): ?>checked<?php endif; ?>>头条[h]</label>&nbsp;
                    <label><input type="checkbox" name="is_recom" value="1" <?php if($field['is_recom'] == 1): ?>checked<?php endif; ?>>推荐[c]</label>&nbsp;
                    <label><input type="checkbox" name="is_special" value="1" <?php if($field['is_special'] == 1): ?>checked<?php endif; ?>>特荐[a]</label>&nbsp;
                    <label><input type="checkbox" name="is_b" value="1" <?php if($field['is_b'] == 1): ?>checked<?php endif; ?>>加粗[b]</label>&nbsp;
                    <label><input type="checkbox" name="is_litpic" value="1" <?php if($field['is_litpic'] == 1): ?>checked<?php endif; ?>>图片[p]</label>&nbsp;
                    <label><input type="checkbox" name="is_jump" value="1" <?php if($field['is_jump'] == 1): ?>checked<?php endif; ?>>跳转[j]</label>&nbsp;
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row <?php if($field['is_jump'] !=1): ?>none<?php endif; ?> dl_jump
            ">
            <dt class="tit">
                <label>跳转网址</label>
            </dt>
            <dd class="opt">
                <input type="text" value="<?php echo $field['jumplinks']; ?>" name="jumplinks" id="jumplinks" class="input-txt"
                       placeholder="http://">
                <span class="err"></span>
                <p class="notic">请输入完整的URL网址（包含http或https），设置后访问该条信息将直接跳转到设置的网址</p>
            </dd>
            </dl>
            <?php if(!empty($channelfield_row['litpic']) AND 1 == $channelfield_row['litpic']['ifeditable']): ?>
            <dl class="row">
                <dt class="tit">
                    <label>缩略图</label>
                </dt>
                <dd class="opt">
                    <div class="input-file-show div_litpic_local" {neq name="$field.is_remote" value="0"
                         }style="display: none;" {
                    /neq}>
                    <span class="show">
                            <a id="img_a" target="_blank" class="nyroModal" rel="gal"
                               href="<?php echo (isset($field['litpic_local']) && ($field['litpic_local'] !== '')?$field['litpic_local']:'javascript:void(0);'); ?>">
                                <i id="img_i" class="fa fa-picture-o" <?php if(!(empty($field['litpic_local']) || (($field['litpic_local'] instanceof \think\Collection || $field['litpic_local'] instanceof \think\Paginator ) && $field['litpic_local']->isEmpty()))): ?>onmouseover="layer_tips=layer.tips('<img src=<?php echo (isset($field['litpic_local']) && ($field['litpic_local'] !== '')?$field['litpic_local']:''); ?> class=\'layer_tips_img\'>',this,{tips: [1, '#fff']});"
                                   <?php endif; ?> onmouseout="layer.close(layer_tips);"></i>
                            </a>
                        </span>
                    <span class="type-file-box">
                            <input type="text" id="litpic_local" name="litpic_local"
                                   value="<?php echo (isset($field['litpic_local']) && ($field['litpic_local'] !== '')?$field['litpic_local']:''); ?>" class="type-file-text">
                            <input type="button" name="button" id="button1" value="选择上传..." class="type-file-button">
                            <input class="type-file-file" onClick="GetUploadify(1,'','allimg','img_call_back')"
                                   size="30" hidefocus="true" nc_type="change_site_logo"
                                   title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
                        </span>
        </div>
        <input type="text" id="litpic_remote" name="litpic_remote" value="<?php echo (isset($field['litpic_remote']) && ($field['litpic_remote'] !== '')?$field['litpic_remote']:''); ?>"
               placeholder="http://" class="input-txt" onKeyup="keyupRemote(this, 'litpic');" <?php if($field['is_remote'] != '1'): ?>style="display: none;" <?php endif; ?>>
        &nbsp;
        <label><input type="checkbox" name="is_remote" id="is_remote" value="1" <?php if($field['is_remote'] == '1'): ?>checked="checked" <?php endif; ?> onClick="clickRemote(this, 'litpic');">远程图片</label>
        <span class="err"></span>
        <p class="notic">当没有手动上传图片时候，会自动提取相册的第一张图片作为封面</p>
        &nbsp;<a href="javascript:void(0);" onclick="system_thumb();" class="ncap-btn ncap-btn-green">缩略图配置</a>
        </dd>
        </dl>
        <?php endif; ?>

        <span id="FieldAddonextitem"></span>
<script type="text/javascript">
    $(function() {
        var aidNew = <?php echo (isset($aid) && ($aid !== '')?$aid:'0'); ?>;
        var typeidNew = <?php echo (isset($typeid) && ($typeid !== '')?$typeid:'0'); ?>;
        var workid = <?php echo (isset($workid) && ($workid !== '')?$workid:'0'); ?>;
        if (!typeidNew) typeidNew = <?php echo (isset($field['typeid']) && ($field['typeid'] !== '')?$field['typeid']:'0'); ?>;
        var channeltypeNew = <?php echo (isset($channeltype) && ($channeltype !== '')?$channeltype:'0'); ?>;
        var ControllerName = '<?php echo CONTROLLER_NAME; ?>';
        GetAddonextitem(0, typeidNew, channeltypeNew, aidNew, false, ControllerName,workid);
    });

    function GetAddonextitem(init, typeidNew, channeltypeNew, aidNew, is_destroy, ControllerName,workid) {
        var loadingTxt = '正在加载';
        if (1 == init) {
            loadingTxt = '正在切换';
        }
        layer_loading(loadingTxt);

        ControllerName = ControllerName ? ControllerName : '';
        $.ajax({
            url: "<?php echo url('Archives/ajax_get_addonextitem'); ?>",
            data: {typeid: typeidNew, channeltype: channeltypeNew, aid: aidNew, controller_name: ControllerName, _ajax:1,workid:workid},
            type:'get',
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
                layer.alert(e.responseText, {icon: 2, title:false});
            }
        });
    }

    // 渲染编辑器
    function showEditor_1597892187(elemtid){

        var content = '';

        try{
            content = UE.getEditor(elemtid).getContent();
            UE.getEditor(elemtid).destroy();
        }catch(e){}

        var serverUrl = eyou_basefile+'?m=admin&c=Ueditor&a=index&savepath=ueditor&lang='+__lang__;
        var options = {
            serverUrl : serverUrl,
            zIndex: 999,
            initialFrameWidth: "100%", //初化宽度
            initialFrameHeight: 450, //初化高度            
            focus: false, //初始化时，是否让编辑器获得焦点true或false
            maximumWords: 99999,
            removeFormatAttributes: 'class,style,lang,width,height,align,hspace,valign',//允许的最大字符数 'fullscreen',
            pasteplain:false, //是否默认为纯文本粘贴。false为不使用纯文本粘贴，true为使用纯文本粘贴
            autoHeightEnabled: false,
            toolbars: ueditor_toolbars
        };

        eval("ue_"+elemtid+" = UE.getEditor(elemtid, options);ue_"+elemtid+".ready(function() {ue_"+elemtid+".setContent(content);});");
    }
</script>
</div>
<!-- 常规信息 end -->

<!-- SEO参数 start -->
<div class="ncap-form-default tab_div_2 tab_div_body" style="display:none;">
    <dl class="row">
        <dt class="tit">
            <label>TAG标签</label>
        </dt>
        <dd class="opt opt1591870121">
            <input type="text" value="<?php echo $field['tags']; ?>" name="tags" id="tags" class="input-txt">
            <script type="text/javascript">
                $(function () {
                    $('#tags').tagsInput({width: '450px', height: 'auto'});
                });
            </script>
            <a href="javascript:void(0);" onclick="TagListSelect1591784354(this);"
               class="ncap-btn ncap-btn-green">快速选择</a>
            <span class="err"></span>
            <p class="notic">输入标签结束后可用回车或空格分开</p>
            <input type="hidden" id="TagOldSelectID" value="<?php echo $field['tag_id']; ?>">
            <input type="hidden" id="NewTagOldSelectID" value="<?php echo $field['tag_id']; ?>">
            <input type="hidden" id="TagOldSelectTag" value="<?php echo $field['tags']; ?>">
            <input type="hidden" name="tags_new" id="NewTagOldSelectTag" value="<?php echo $field['tags']; ?>">
        </dd>
    </dl>
    <dl class="row">
        <dt class="tit">
            <label for="seo_title">SEO标题</label>
        </dt>
        <dd class="opt">
            <input type="text" value="<?php echo $field['seo_title']; ?>" name="seo_title" id="seo_title" class="input-txt">
            <p class="notic">一般不超过80个字符，为空时系统自动构成，可以到 <a href="<?php echo url('Seo/index', array('inc_type'=>'seo')); ?>">SEO设置 -
                SEO基础</a> 中设置构成规则。</p>
        </dd>
    </dl>
    <dl class="row">
        <dt class="tit">
            <label>SEO关键词</label>
        </dt>
        <dd class="opt">
            <textarea rows="5" cols="60" id="seo_keywords" name="seo_keywords" style="height:40px;"><?php echo $field['seo_keywords']; ?></textarea>
            <span class="err"></span>
            <p class="notic">一般不超过100个字符，多个关键词请用英文逗号（,）隔开，建议3到5个关键词。</p>
        </dd>
    </dl>
    <dl class="row">
        <dt class="tit">
            <label>SEO描述</label>
        </dt>
        <dd class="opt">
            <textarea rows="5" cols="60" id="seo_description" name="seo_description" style="height:60px;"><?php echo $field['seo_description']; ?></textarea>
            <span class="err"></span>
            <p class="notic">一般不超过200个字符，不填写时系统自动提取正文的前200个字符</p>
        </dd>
    </dl>
</div>
<!-- SEO参数 end -->

<!-- 其他参数 start -->
<div class="ncap-form-default tab_div_3 tab_div_body" style="display:none;">
    <?php if(!empty($channelfield_row['author']) AND 1 == $channelfield_row['litpic']['ifeditable']): ?>
    <dl class="row">
        <dt class="tit">
            <label for="author">作者</label>
        </dt>
        <dd class="opt">
            <input type="text" value="<?php echo $field['author']; ?>" name="author" id="author" class="input-txt">
            &nbsp;<a href="javascript:void(0);" onclick="set_author();" class="ncap-btn ncap-btn-green">设置</a>
            <p class="notic">设置作者默认名称（将同步至管理员笔名）</p>
        </dd>
    </dl>
    <?php endif; ?>
    <dl class="row">
        <dt class="tit">
            <label>浏览量</label>
        </dt>
        <dd class="opt">
            <input type="text" value="<?php echo $field['click']; ?>" name="click" id="click" class="input-txt">
            <span class="err"></span>
            <p class="notic"></p>
        </dd>
    </dl>
    <dl class="row">
        <dt class="tit">
            <label>阅读权限</label>
        </dt>
        <dd class="opt">
            <select name="arcrank" id="arcrank">
                <?php if(is_array($arcrank_list) || $arcrank_list instanceof \think\Collection || $arcrank_list instanceof \think\Paginator): $i = 0; $__LIST__ = $arcrank_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $vo['rank']; ?>" {eq name="vo.rank" value="$field.arcrank" }selected{
                /eq}><?php echo $vo['name']; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
            <span class="err"></span>
            <p class="notic"></p>
        </dd>
    </dl>
    <dl class="row">
        <dt class="tit">
            <label for="articleForm">发布时间</label>
        </dt>
        <dd class="opt">
            <input type="text" class="input-txt" id="add_time" name="add_time"
                   value="<?php echo date('Y-m-d H:i:s',$field['add_time']); ?>" autocomplete="off">
            <span class="add-on input-group-addon">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    </span>
            <span class="err"></span>
        </dd>
    </dl>
    <dl class="row">
        <dt class="tit">
            <label for="tempview">文档模板</label>
        </dt>
        <dd class="opt">
            <select name="tempview" id="tempview">
                <?php if(is_array($templateList) || $templateList instanceof \think\Collection || $templateList instanceof \think\Paginator): $i = 0; $__LIST__ = $templateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $vo; ?>" {eq name='$vo' value='$tempview' }selected{
                /eq}><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
            <input type="hidden" name="type_tempview" value="<?php echo $tempview; ?>"/>
            <span class="err"></span>
        </dd>
    </dl>
    <dl class="row" {neq name='$seo_pseudo' value='2' }style="display: none;" {
    /neq}>
    <dt class="tit">
        <label>自定义文件名</label>
    </dt>
    <dd class="opt">
        <input type="text" value="<?php echo $field['htmlfilename']; ?>" name="htmlfilename" id="htmlfilename" style="width: 120px;"
               onkeyup="this.value=this.value.replace(/[^\w\-]/g,'');"
               onpaste="this.value=this.value.replace(/[^\w\-]/g,'');">.html
        <span class="err"></span>
        <p class="notic">自定义文件名可由字母/数字/'_'/'-'等符号组成</p>
    </dd>
    </dl>
</div>
<!-- 其他参数 end -->

<!-- 产品管理 start -->
<div class="ncap-form-default tab_div_4 tab_div_body" style="display:none;">
<!--    <?php var_dump($field); ?>-->
<!--    <?php if(is_array($product_join) || $product_join instanceof \think\Collection || $product_join instanceof \think\Paginator): $i = 0; $__LIST__ = $product_join;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
<!--    <option value="<?php echo $avo['id']; ?>"><?php echo $vo['id']; ?> <?php echo $vo['aid']; ?> <?php echo $vo['workid']; ?> <?php echo $vo['add_time']; ?> <?php echo $vo['update_time']; ?> <?php echo $vo['title']; ?> <?php echo $vo['litpic']; ?> <?php echo $vo['bigPicture']; ?></option>-->
<!--    <?php endforeach; endif; else: echo "" ;endif; ?>-->
    <div class="page" style="min-width:auto;box-shadow:none;">
        <div class="flexigrid" style="margin-top: 0px;">
            <div class="hDiv">
                <div class="hDivBox">
                    <table cellspacing="0" cellpadding="0" style="width: 100%">
                        <thead>
                        <tr>
                            <th class="sign w40" axis="col0">
                                <div class="tc">选择</div>
                            </th>
                            <th abbr="article_title" axis="col3" class="">
                                <div style="text-align: left; padding-left: 10px;" class="">标题</div>
                            </th>
                            <th abbr="article_time" axis="col6" class="w50">
                                <div class="tc"><a href="<?php echo getArchivesSortUrl('arcrank'); ?>">审核&nbsp;<i <?php if(\think\Request::instance()->param('orderway') == 'asc'): ?>class="fa fa-sort"
                                                                                                      <?php else: ?>class="fa
                                    fa-sort"<?php endif; ?>></i></a></div>
                            </th>
                            <th abbr="article_time" axis="col6" class="w100">
                                <div class="tc">发布时间</div>
                            </th>
                            <th axis="col1" class="w180">
                                <div class="tc">操作</div>
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
                        <?php if(empty($product_join) || (($product_join instanceof \think\Collection || $product_join instanceof \think\Paginator ) && $product_join->isEmpty())): ?>
                        <tr>
                            <td class="no-data" align="center" axis="col0" colspan="50">
                                <i class="fa fa-exclamation-circle"></i>没有符合条件的记录
                            </td>
                        </tr>
                        <?php else: if(is_array($product_join) || $product_join instanceof \think\Collection || $product_join instanceof \think\Paginator): if( count($product_join)==0 ) : echo "" ;else: foreach($product_join as $k=>$vo): ?>
                        <tr>
                            <td class="sign">
                                <div class="tc w40"><input type="checkbox" name="ids[]" value="<?php echo $vo['aid']; ?>"></div>
                            </td>


                            <td class="" style="width: 100%;">
                                <div class="tl" style="padding-left: 10px;">
                                    <?php if(is_check_access('Archives@edit') == '1'): if(empty($channelRow[$vo['channel']]['ifsystem'])): ?>
                                    <a href="<?php echo url('Custom/edit',array('id'=>$vo['aid'],'typeid'=>\think\Request::instance()->param('typeid'), 'channel'=>$vo['channel'])); ?>"
                                       style="<?php if(vo.is_b == '1'): ?> font-weight: bold;<?php endif; ?>"><?php echo $vo['title']; ?></a>
                                    <?php else: ?>
                                    <a href="<?php echo url($channelRow[$vo['channel']]['ctl_name'].'/edit',array('id'=>$vo['aid'],'typeid'=>\think\Request::instance()->param('typeid'))); ?>"
                                       style="<?php if(vo.is_b == '1'): ?> font-weight: bold;<?php endif; ?>"><?php echo $vo['title']; ?></a>
                                    <?php endif; else: ?>
                                    <?php echo $vo['title']; endif; $showArcFlagData = showArchivesFlagStr($vo); if(is_array($showArcFlagData) || $showArcFlagData instanceof \think\Collection || $showArcFlagData instanceof \think\Paginator): $i = 0; $__LIST__ = $showArcFlagData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;if($i == '1'): ?><span style="color: red;">[<?php endif; ?>
                                        <i style="font-size: 12px;"><?php echo $vo1['small_name']; ?></i>
                                        <?php if($i == count($showArcFlagData)): ?>]</span><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </td>
                            <td>
                                <div class="tc w50">
                                    <?php if($vo['arcrank'] == -1): ?>
                                    <span class="no" <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?> data-typeid="<?php echo $vo['typeid']; ?>" data-seo_pseudo="<?php echo $seo_pseudo; ?>"
                                          onclick="changeTableVal('archives','aid','<?php echo $vo['aid']; ?>','arcrank',this);" <?php endif; ?> ><i
                                        class="fa fa-ban"></i>否</span>
                                    <?php else: ?>
                                    <span class="yes" <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?> data-typeid="<?php echo $vo['typeid']; ?>" data-seo_pseudo="<?php echo $seo_pseudo; ?>"
                                          onclick="changeTableVal('archives','aid','<?php echo $vo['aid']; ?>','arcrank',this);" <?php endif; ?> ><i
                                        class="fa fa-check-circle"></i>是</span>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <?php if($arctype_info['current_channel'] == '4'): endif; ?>
                            <td>
                                <div class="w100 tc">
                                    <?php echo date('Y-m-d',$vo['add_time']); ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="w180 tc">
                                    <?php if(is_check_access('Archives@edit') == '1'): if(empty($channelRow[$vo['channel']]['ifsystem'])): ?>
                                    <a href="<?php echo url('Custom/edit',array('id'=>$vo['aid'],'typeid'=>\think\Request::instance()->param('typeid'), 'channel'=>$vo['channel'])); ?>"
                                       class="btn blue"><i class="fa fa-pencil-square-o"></i>编辑</a>
                                    <?php else: ?>
                                    <a href="<?php echo url($channelRow[$vo['channel']]['ctl_name'].'/edit',array('id'=>$vo['aid'],'typeid'=>\think\Request::instance()->param('typeid'))); ?>"
                                       class="btn blue"><i class="fa fa-pencil-square-o"></i>编辑</a>
                                    <?php endif; endif; if(is_check_access('Archives@del') == '1'): ?>
                                    <a class="btn red" href="javascript:void(0);" data-url="<?php echo url('Archives/del'); ?>"
                                       data-id="<?php echo $vo['aid']; ?>" data-deltype="pseudo" onClick="delfun(this);"><i
                                            class="fa fa-trash-o"></i>删除</a>
                                    <?php endif; ?>
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
                    <button class="layui-btn layui-btn-primary dropdown-bt">批量操作<i class="layui-icon layui-icon-up"></i>
                    </button>
                    <div class="dropdown-menus" style="display:none;">
                        <?php if(is_check_access('Archives@batch_attr') == '1'): ?>
                        <a href="javascript:void(0);" onclick="batch_attr(this, 'ids', '批量新增属性');"
                           data-url="<?php echo url('Archives/batch_attr', ['opt'=>'add']); ?>"><i class="fa fa-plus"></i>新增属性</a>
                        <a href="javascript:void(0);" onclick="batch_attr(this, 'ids', '批量删除属性');"
                           data-url="<?php echo url('Archives/batch_attr', ['opt'=>'del']); ?>"><i class="fa fa-close"></i>删除属性</a>
                        <hr class="layui-bg-gray">
                        <?php endif; if(is_check_access('Archives@batch_copy') == '1'): ?>
                        <a href="javascript:void(0);" onclick="func_batch_copy(this, 'ids');"
                           data-url="<?php echo url('Archives/batch_copy', array('typeid'=>\think\Request::instance()->param('typeid'))); ?>"><i
                                class="fa fa-copy"></i>复制文档</a>
                        <?php endif; if(is_check_access('Archives@move') == '1'): ?>
                        <a href="javascript:void(0);" onclick="func_move(this, 'ids');"
                           data-url="<?php echo url('Archives/move', array('typeid'=>\think\Request::instance()->param('typeid'))); ?>"><i
                                class="fa fa-hdd-o"></i>移动文档</a>
                        <?php endif; if(is_check_access('Archives@del') == '1'): ?>
                        <a href="javascript:void(0);" onclick="batch_del(this, 'ids');" data-url="<?php echo url('Archives/del'); ?>"
                           data-deltype="pseudo"><i class="fa fa-close"></i>删除文档</a>
                        <?php endif; if(is_check_access('Archives@check') == '1'): ?>
                        <a href="javascript:void(0);" onclick="batch_check(this, 'ids');"
                           data-url="<?php echo url('Archives/check'); ?>"><i class="fa fa-check-square-o"></i>审核文档</a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if(is_check_access('RecycleBin@archives_index') == '1'): ?>
                <a href="<?php echo url('RecycleBin/archives_index'); ?>" class="layui-btn layui-btn-primary" title="回收站"><i
                        class="layui-icon layui-icon-delete"></i>回收站</a>
                <?php endif; ?>
            </div>
            <!--分页位置-->
            <?php echo $page; ?>
        </div>
    </div>
</div>
<!-- 产品管理 end -->

<!-- 出入库管理 start -->
<div class="ncap-form-default tab_div_5 tab_div_body" style="display:none;">
    <?php if(is_array($inandout) || $inandout instanceof \think\Collection || $inandout instanceof \think\Paginator): $i = 0; $__LIST__ = $inandout;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <option value="<?php echo $avo['id']; ?>"><?php echo $vo['id']; ?> <?php echo $vo['productid']; ?> <?php echo date('Y-m-d',$vo['add_time']); ?> <?php echo date('Y-m-d',$vo['update_time']); ?> <?php echo $vo['inorout']; ?> <?php echo $vo['description']; ?> <?php echo $vo['remark']; ?> <?php echo date('Y-m-d',$vo['operating_time']); ?> <?php echo $vo['operator']; ?></option>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<!-- 出入库管理 end -->
<!-- #weapp_diy001_body# -->
<!--<?php var_dump($field); ?>-->

<div class="ncap-form-default">
    <div class="bot">
        <input type="hidden" name="gourl" value="<?php echo $gourl; ?>">
        <input type="hidden" name="aid" value="<?php echo $field['aid']; ?>">
        <input type="hidden" name="channel" value="<?php echo \think\Request::instance()->param('channel'); ?>">
        <a href="JavaScript:void(0);" onclick="check_submit();" class="ncap-btn-big ncap-btn-green"
           id="submitBtn">确认提交</a>
    </div>
</div>

</form>
</div>
<script type="text/javascript">

    $(function () {
        $('#add_time').layDate();

        //选项卡切换列表
        $('.tab-base').find('.tab').click(function () {
            $('.tab-base').find('.tab').each(function () {
                $(this).removeClass('current');
            });
            $(this).addClass('current');
            var tab_index = $(this).data('index');
            $(".tab_div_body").hide();
            $(".tab_div_" + tab_index).show();
        });

        $('input[name=is_jump]').click(function () {
            if ($(this).is(':checked')) {
                $('.dl_jump').show();
            } else {
                $('.dl_jump').hide();
            }
        });

        var dftypeid = <?php echo (isset($field['typeid'] ) && ($field['typeid']  !== '')?$field['typeid'] : '0'); ?>;
        $('#typeid').change(function () {
            var current_channel = $(this).find('option:selected').data('current_channel');
            if (0 < $(this).val() && <?php echo $channeltype; ?> != current_channel) {
                showErrorMsg('请选择对应模型的栏目！');
                $(this).val(dftypeid);
            } else if (<?php echo $channeltype; ?> == current_channel) {
                layer.closeAll();
            }
            GetAddonextitem(1, $(this).val(), <?php echo $channeltype; ?>, <?php echo $aid; ?>, true);
        });
    });

    function set_author() {
        layer.prompt({
                title: '<font color="red">设置作者默认名称</font>'
            },
            function (val, index) {
                var admin_id = '<?php echo \think\Session::get('admin_info.admin_id'); ?>';
                $.ajax({
                    url: "<?php echo url('Admin/ajax_setfield', ['_ajax'=>1]); ?>",
                    type: 'POST',
                    dataType: 'JSON',
                    data: {id_name: 'admin_id', id_value: admin_id, field: 'pen_name', value: val},
                    success: function (res) {
                        if (res.code == 1) {
                            $('#author').val(val);
                            layer.msg(res.msg, {icon: 1, time: 1000});
                        } else {
                            showErrorMsg(res.msg);
                            return false;
                        }
                    },
                    error: function (e) {
                        showErrorMsg(ey_unknown_error);
                        return false;
                    }
                });
                layer.close(index);
            }
        );
    }

    function tags_list(obj) {
        layer.closeAll();
        var url = "<?php echo url('Tags/index'); ?>";
        //iframe窗
        var iframes = layer.open({
            type: 2,
            title: 'TAG标签管理',
            fixed: true, //不固定
            shadeClose: false,
            content: url
        });

        layer.full(iframes);
    }

    function system_thumb() {
        var url = "<?php echo url('System/thumb', ['tabase'=>-1]); ?>";
        //iframe窗
        var iframes = layer.open({
            type: 2,
            title: '缩略图配置',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            content: url
        });
        layer.full(iframes);
    }

    // 判断输入框是否为空
    function check_submit() {
        if ($.trim($('input[name=title]').val()) == '') {
            showErrorMsg('标题不能为空！');
            $($('.tab-base').find('.tab')[0]).trigger('click');
            $('input[name=title]').focus();
            return false;
        }
        if ($('#typeid').val() == 0) {
            showErrorMsg('请选择栏目…！');
            $($('.tab-base').find('.tab')[0]).trigger('click');
            $('#typeid').focus();
            return false;
        }
        layer_loading('正在处理');
        $('#post_form').submit();
    }

    function img_call_back(fileurl_tmp) {
        $("#litpic_local").val(fileurl_tmp);
        $("#img_a").attr('href', fileurl_tmp);
        $("#img_i").attr('onmouseover', "layer_tips=layer.tips('<img src=" + fileurl_tmp + " class=\\'layer_tips_img\\'>',this,{tips: [1, '#fff']});");
        $("input[name=is_litpic]").attr('checked', true); // 自动勾选属性[图片]
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