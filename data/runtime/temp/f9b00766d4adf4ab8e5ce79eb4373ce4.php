<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:45:"./application/admin/template/special\edit.htm";i:1600738850;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\layout.htm";i:1596507477;s:98:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\archives\get_field_addonextitem.htm";i:1602724224;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="min-width:auto;box-shadow:none;">
    <div class="fixed-bar">
        <div class="item-title"><a class="back" href="javascript:history.back();" title="返回列表"><i class="fa fa-chevron-left"></i></a>
            <div class="subject">
                <h3>编辑专题</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <li><a href="javascript:void(0);" data-index='1' class="tab current"><span>常规选项</span></a></li>
                <li><a href="javascript:void(0);" data-index='2' class="tab"><span>专题文档</span></a></li>
                <li><a href="javascript:void(0);" data-index='3' class="tab"><span>SEO选项</span></a></li>
                <li><a href="javascript:void(0);" data-index='4' class="tab"><span>其他选项</span></a></li>
            </ul>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('Special/edit'); ?>" method="post">
        <!-- 常规信息 -->
        <div class="ncap-form-default tab_div_1">
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
            <dl class="row <?php if($field['is_jump'] != 1): ?>none<?php endif; ?> dl_jump">
                <dt class="tit">
                    <label>跳转网址</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo $field['jumplinks']; ?>" name="jumplinks" id="jumplinks" class="input-txt" placeholder="http://">
                    <span class="err"></span>
                    <p class="notic">请输入完整的URL网址（包含http或https），设置后访问该条信息将直接跳转到设置的网址</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                  <label>缩略图</label>
                </dt>
                <dd class="opt">
                    <div class="input-file-show div_litpic_local" <?php if($field['is_remote'] != '0'): ?>style="display: none;"<?php endif; ?>>
                        <span class="show">
                            <a id="img_a" target="_blank" class="nyroModal" rel="gal" href="<?php echo (isset($field['litpic_local']) && ($field['litpic_local'] !== '')?$field['litpic_local']:'javascript:void(0);'); ?>">
                                <i id="img_i" class="fa fa-picture-o" <?php if(!(empty($field['litpic_local']) || (($field['litpic_local'] instanceof \think\Collection || $field['litpic_local'] instanceof \think\Paginator ) && $field['litpic_local']->isEmpty()))): ?>onmouseover="layer_tips=layer.tips('<img src=<?php echo $field['litpic_local']; ?> class=\'layer_tips_img\'>',this,{tips: [1, '#fff']});"<?php endif; ?> onmouseout="layer.close(layer_tips);"></i>
                            </a>
                        </span>
                        <span class="type-file-box">
                            <input type="text" id="litpic_local" name="litpic_local" value="<?php echo (isset($field['litpic_local']) && ($field['litpic_local'] !== '')?$field['litpic_local']:''); ?>" class="type-file-text">
                            <input type="button" name="button" id="button1" value="选择上传..." class="type-file-button">
                            <input class="type-file-file" onClick="GetUploadify(1,'','allimg','img_call_back')" size="30" hidefocus="true" nc_type="change_site_logo"
                                 title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
                        </span>
                    </div>
                    <input type="text" id="litpic_remote" name="litpic_remote" value="<?php echo (isset($field['litpic_remote']) && ($field['litpic_remote'] !== '')?$field['litpic_remote']:''); ?>" placeholder="http://" class="input-txt" onKeyup="keyupRemote(this, 'litpic');" <?php if($field['is_remote'] != '1'): ?>style="display: none;"<?php endif; ?>>
                    &nbsp;
                    <label><input type="checkbox" name="is_remote" id="is_remote" value="1" <?php if($field['is_remote'] == '1'): ?>checked="checked"<?php endif; ?> onClick="clickRemote(this, 'litpic');">远程图片</label>
                    <span class="err"></span>
                    <p class="notic">当没有手动上传图片时候，会自动提取正文的第一张图片作为缩略图</p>
                    &nbsp;<a href="javascript:void(0);" onclick="system_thumb();" class="ncap-btn ncap-btn-green">缩略图配置</a>
                </dd>
            </dl>

            <span id="FieldAddonextitem"></span>
<script type="text/javascript">
    $(function() {
        var aidNew = <?php echo (isset($aid) && ($aid !== '')?$aid:'0'); ?>;
        var typeidNew = <?php echo (isset($typeid) && ($typeid !== '')?$typeid:'0'); ?>;
        if (!typeidNew) typeidNew = <?php echo (isset($field['typeid']) && ($field['typeid'] !== '')?$field['typeid']:'0'); ?>;
        var channeltypeNew = <?php echo (isset($channeltype) && ($channeltype !== '')?$channeltype:'0'); ?>;
        var ControllerName = '<?php echo CONTROLLER_NAME; ?>';
        GetAddonextitem(0, typeidNew, channeltypeNew, aidNew, false, ControllerName);
    });
    
    function GetAddonextitem(init, typeidNew, channeltypeNew, aidNew, is_destroy, ControllerName) {
        var loadingTxt = '正在加载';
        if (1 == init) {
            loadingTxt = '正在切换';
        }
        layer_loading(loadingTxt);
        
        ControllerName = ControllerName ? ControllerName : '';
        $.ajax({
            url: "<?php echo url('Archives/ajax_get_addonextitem'); ?>",
            data: {typeid: typeidNew, channeltype: channeltypeNew, aid: aidNew, controller_name: ControllerName, _ajax:1},
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
        <!-- 常规信息 -->
        <!-- 专题节点 -->
        <div class="ncap-form-default tab_div_2" style="display:none;">
            <div class="special-add">
                <span onclick="specialNodeAdd();"><i class="fa fa-plus"></i>新增节点</span>
            </div>
            <div class="sort-list-special">
            <?php if(empty($specialNodeList) || (($specialNodeList instanceof \think\Collection || $specialNodeList instanceof \think\Paginator ) && $specialNodeList->isEmpty())): ?>
                <div class="special-items specialNodeItems" id="specialNode_1_item">
                    <input type="hidden" name="specialNode[node_id][]" value="0">
                    <input type="hidden" name="specialNode[itemid][]" value="1">
                    <div class="special-tags" onclick="click_to_eyou_1575506523('https://www.eyoucms.com/plus/view.php?aid=10999','专题节点标签调用')">
                        标签调用
                    </div>
                    <div class="special-del" onclick="specialNodeDel(this);">
                        <i class="fa fa-times" aria-hidden="true"></i>删除
                    </div>
                    <div class="special-items-row">
                        <div class="special-item">
                            <div class="special-item-l">
                                <em>*</em>节点名称
                            </div>
                            <div class="special-item-r">
                                <input type="text" name="specialNode[title][]" value="节点1" class="input-text" onkeyup="keyupNodeTitleUnique(this);">
                                <span class="err"></span>
                            </div>
                        </div>
                        <div class="special-item">
                            <div class="special-item-l">
                                <em>*</em>节点标识
                            </div>
                            <div class="special-item-r">
                                <input type="text" name="specialNode[code][]" value="default1" class="input-text" onkeyup="keyupNodeCodeUnique(this);">
                                <span class="err"></span>
                            </div>
                        </div>
                    </div>
                    <div class="special-items-row">
                        <div class="special-item">
                            <div class="special-item-l">
                                文档来源
                            </div>
                            <div class="special-item-r">
                                <span class="option-item">
                                    <label class="ml5"><input type="radio" name="specialNode[isauto][1]" value="0" checked="checked" onclick="setNodeIsauto(this, 'specialNode_1_item');">按文档列表</label>
                                </span>
                                <span class="option-item">
                                    <label class="ml5"><input type="radio" name="specialNode[isauto][1]" value="1" onclick="setNodeIsauto(this, 'specialNode_1_item');">自动获取文档</label>
                                </span>
                                <span class="option-item dl_specialNode_1_item_isauto_1" style="display: none;"><label class="mr5">关键字：</label><input type="text" name="specialNode[keywords][]" class="input-text">（以 , 逗号分开）</span>
                                <span class="option-item dl_specialNode_1_item_isauto_1" style="display: none;"><label class="mr5">所属栏目：</label>
                                    <select name="specialNode[typeid][]">
                                        <option value="0">请选择栏目…</option>
                                        <?php echo $node_select_html; ?>
                                    </select>
                                </span>
                                <span class="option-item dl_specialNode_1_item_isauto_1" style="display: none;"><label class="mr5">文档数：</label><input type="text" name="specialNode[row][]" value="10" class="input-text" style="width: 50px;"></span>
                            </div>
                        </div>
                    </div>
                    <div class="special-items-row dl_specialNode_1_item_isauto_0">
                        <div class="special-item-l">
                            节点文档列表
                        </div>
                        <div class="special-item-r">
                            <textarea rows="5" cols="60" name="specialNode[aidlist][]" style="height:60px;"></textarea>
                        </div>
                        <div class="special-item-r mt20 ml20">
                            <a href="javascript:void(0);" onclick="selectNodeArchives(this, 'specialNode_1_item');" class="ncap-btn ncap-btn-green">选择节点文档</a>
                        </div>  
                    </div>
                </div>
            <?php else: if(is_array($specialNodeList) || $specialNodeList instanceof \think\Collection || $specialNodeList instanceof \think\Paginator): $i = 0; $__LIST__ = $specialNodeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nodeVo): $mod = ($i % 2 );++$i;?>
                <div class="special-items specialNodeItems" id="specialNode_<?php echo $i; ?>_item">
                    <input type="hidden" name="specialNode[node_id][]" value="<?php echo $nodeVo['node_id']; ?>">
                    <input type="hidden" name="specialNode[itemid][]" value="<?php echo $i; ?>">
                    <div class="special-tags" onclick="click_to_eyou_1575506523('https://www.eyoucms.com/plus/view.php?aid=10999','专题节点标签调用')">
                        标签调用
                    </div>
                    <div class="special-del" onclick="specialNodeDel(this);">
                        <i class="fa fa-times" aria-hidden="true"></i>删除
                    </div>
                    <div class="special-items-row">
                        <div class="special-item">
                            <div class="special-item-l">
                                <em>*</em>节点名称
                            </div>
                            <div class="special-item-r">
                                <input type="text" name="specialNode[title][]" value="<?php echo (isset($nodeVo['title']) && ($nodeVo['title'] !== '')?$nodeVo['title']:'节点'.$i); ?>" class="input-text" onkeyup="keyupNodeTitleUnique(this);">
                                <span class="err"></span>
                            </div>
                        </div>
                        <div class="special-item">
                            <div class="special-item-l">
                                <em>*</em>节点标识
                            </div>
                            <div class="special-item-r">
                                <input type="text" name="specialNode[code][]" value="<?php echo (isset($nodeVo['code']) && ($nodeVo['code'] !== '')?$nodeVo['code']:'default'.$i); ?>" class="input-text" onkeyup="keyupNodeCodeUnique(this);">
                                <span class="err"></span>
                            </div>
                        </div>
                    </div>
                    <div class="special-items-row">
                        <div class="special-item">
                            <div class="special-item-l">
                                文档来源
                            </div>
                            <div class="special-item-r">
                                <span class="option-item">
                                    <label class="ml5"><input type="radio" name="specialNode[isauto][<?php echo $i; ?>]" value="0" <?php if(empty($nodeVo['isauto']) || (($nodeVo['isauto'] instanceof \think\Collection || $nodeVo['isauto'] instanceof \think\Paginator ) && $nodeVo['isauto']->isEmpty())): ?> checked="checked" <?php endif; ?> onclick="setNodeIsauto(this, 'specialNode_<?php echo $i; ?>_item');">按文档列表</label>
                                </span>
                                <span class="option-item">
                                    <label class="ml5"><input type="radio" name="specialNode[isauto][<?php echo $i; ?>]" value="1" <?php if($nodeVo['isauto'] == '1'): ?> checked="checked" <?php endif; ?> onclick="setNodeIsauto(this, 'specialNode_<?php echo $i; ?>_item');">自动获取文档</label>
                                </span>
                                <span class="option-item dl_specialNode_<?php echo $i; ?>_item_isauto_1" <?php if(empty($nodeVo['isauto']) || (($nodeVo['isauto'] instanceof \think\Collection || $nodeVo['isauto'] instanceof \think\Paginator ) && $nodeVo['isauto']->isEmpty())): ?> style="display: none;" <?php endif; ?>><label class="mr5">关键字：</label><input type="text" name="specialNode[keywords][]" value="<?php echo (isset($nodeVo['keywords']) && ($nodeVo['keywords'] !== '')?$nodeVo['keywords']:''); ?>" class="input-text">（以 , 逗号分开）</span>
                                <span class="option-item dl_specialNode_<?php echo $i; ?>_item_isauto_1" <?php if(empty($nodeVo['isauto']) || (($nodeVo['isauto'] instanceof \think\Collection || $nodeVo['isauto'] instanceof \think\Paginator ) && $nodeVo['isauto']->isEmpty())): ?> style="display: none;" <?php endif; ?>><label class="mr5">所属栏目：</label>
                                    <select name="specialNode[typeid][]">
                                        <option value="0">请选择栏目…</option>
                                        <?php echo $node_select_html; ?>
                                    </select>
                                    <script type="text/javascript">
                                        $(function(){
                                            $('#specialNode_<?php echo $i; ?>_item').find("select[name='specialNode[typeid][]']").val(<?php echo (isset($nodeVo['typeid']) && ($nodeVo['typeid'] !== '')?$nodeVo['typeid']:'0'); ?>);
                                        });
                                    </script>
                                </span>
                                <span class="option-item dl_specialNode_<?php echo $i; ?>_item_isauto_1" <?php if(empty($nodeVo['isauto']) || (($nodeVo['isauto'] instanceof \think\Collection || $nodeVo['isauto'] instanceof \think\Paginator ) && $nodeVo['isauto']->isEmpty())): ?> style="display: none;" <?php endif; ?>><label class="mr5">文档数：</label><input type="text" name="specialNode[row][]" value="<?php echo (isset($nodeVo['row']) && ($nodeVo['row'] !== '')?$nodeVo['row']:'10'); ?>" class="input-text" style="width: 50px;"></span>
                            </div>
                        </div>
                    </div>
                    <div class="special-items-row dl_specialNode_<?php echo $i; ?>_item_isauto_0" <?php if($nodeVo['isauto'] == '1'): ?> style='display: none;' <?php endif; ?>>
                        <div class="special-item-l">
                            节点文档列表
                        </div>
                        <div class="special-item-r">
                            <textarea rows="5" cols="60" name="specialNode[aidlist][]" style="height:60px;"><?php echo (isset($nodeVo['aidlist']) && ($nodeVo['aidlist'] !== '')?$nodeVo['aidlist']:''); ?></textarea>
                        </div>
                        <div class="special-item-r mt20 ml20">
                            <a href="javascript:void(0);" onclick="selectNodeArchives(this, 'specialNode_<?php echo $i; ?>_item');" class="ncap-btn ncap-btn-green">选择节点文档</a>
                        </div>  
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </div>
        </div>
        <!-- 专题节点 -->
        <!-- SEO参数 -->
        <div class="ncap-form-default tab_div_3" style="display:none;">
            <dl class="row">
                <dt class="tit">
                    <label>TAG标签</label>
                </dt>
                <dd class="opt opt1591870121">
                    <input type="text" value="<?php echo $field['tags']; ?>" name="tags" id="tags" class="input-txt">
                    <script type="text/javascript">
                        $(function() { $('#tags').tagsInput({width: '450px', height: 'auto'}); });
                    </script>
                    <a href="javascript:void(0);" onclick="TagListSelect1591784354(this);" class="ncap-btn ncap-btn-green">快速选择</a>
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
                    <p class="notic">一般不超过80个字符，为空时系统自动构成，可以到 <a href="<?php echo url('Seo/index', array('inc_type'=>'seo')); ?>">SEO设置 - SEO基础</a> 中设置构成规则。</p>
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
        <!-- SEO参数 -->
        <!-- 其他参数 -->
        <div class="ncap-form-default tab_div_4" style="display:none;">
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
                        <option value="<?php echo $vo['rank']; ?>" <?php if($vo['rank'] == $field['arcrank']): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>
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
                    <input type="text" class="input-txt" id="add_time" name="add_time" value="<?php echo date('Y-m-d H:i:s',$field['add_time']); ?>" autocomplete="off">        
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
                        <option value="<?php echo $vo; ?>" <?php if($vo == $tempview): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <input type="hidden" name="type_tempview" value="<?php echo $tempview; ?>" />
                    <span class="err"></span>
                    <p class="notic">模板命名规则：<br/>view_special.htm<br/>view_special_自定义.htm</p>
                    &nbsp;<a href="javascript:void(0);" onclick="newtpl();" class="ncap-btn ncap-btn-green">新建模板</a>
                </dd>
            </dl>
            <dl class="row" <?php if($seo_pseudo != '2'): ?>style="display: none;"<?php endif; ?>>
                <dt class="tit">
                    <label>自定义文件名</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo $field['htmlfilename']; ?>" name="htmlfilename" id="htmlfilename" style="width: 120px;" onkeyup="this.value=this.value.replace(/[^\w\-]/g,'');" onpaste="this.value=this.value.replace(/[^\w\-]/g,'');">.html
                    <span class="err"></span>
                    <p class="notic">自定义文件名可由字母/数字/'_'/'-'等符号组成</p>
                </dd>
            </dl>
<!--             <dl class="row">
                <dt class="tit">
                    <label>排序号</label>
                </dt>
                <dd class="opt">    
                    <input type="text" value="<?php echo $field['sort_order']; ?>" name="sort_order" id="sort_order" class="input-txt">
                    <span class="err"></span>
                    <p class="notic">越小越靠前</p>
                </dd>
            </dl> -->
        </div>
        <!-- 其他参数 -->
        <div class="ncap-form-default">
            <div class="bot">
                <input type="hidden" name="gourl" value="<?php echo $gourl; ?>">
                <input type="hidden" name="aid" value="<?php echo $field['aid']; ?>">
                <a href="JavaScript:void(0);" onclick="check_submit();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
            </div>
        </div> 
    </form>
</div>
<script type="text/javascript">

    $(function () {
        $('#add_time').layDate();   
     
        //选项卡切换列表
        $('.tab-base').find('.tab').click(function(){
            $('.tab-base').find('.tab').each(function(){
                $(this).removeClass('current');
            });
            $(this).addClass('current');
            var tab_index = $(this).data('index');          
            $(".tab_div_1, .tab_div_2, .tab_div_3, .tab_div_4").hide();            
            $(".tab_div_"+tab_index).show();
        });

        $('input[name=is_jump]').click(function(){
            if ($(this).is(':checked')) {
                $('.dl_jump').show();
            } else {
                $('.dl_jump').hide();
            }
        });

        var dftypeid = <?php echo (isset($field['typeid']) && ($field['typeid'] !== '')?$field['typeid']:'0'); ?>;
        $('#typeid').change(function(){
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

    function set_author()
    {
        layer.prompt({
                title:'<font color="red">设置作者默认名称</font>'
            },
            function(val, index){
                var admin_id = '<?php echo \think\Session::get('admin_info.admin_id'); ?>';
                $.ajax({
                    url: "<?php echo url('Admin/ajax_setfield', ['_ajax'=>1]); ?>",
                    type: 'POST',
                    dataType: 'JSON',
                    data: {id_name:'admin_id',id_value:admin_id,field:'pen_name',value:val},
                    success: function(res){
                        if (res.code == 1) {
                            $('#author').val(val);
                            layer.msg(res.msg, {icon: 1, time:1000});
                        } else {
                            showErrorMsg(res.msg);
                            return false;
                        }
                    },
                    error: function(e){
                        showErrorMsg(ey_unknown_error);
                        return false;
                    }
                });
                layer.close(index);
            }
        );
    }

    function tags_list(obj)
    {
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

    function system_thumb()
    {
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
    function check_submit(){
        if($.trim($('input[name=title]').val()) == ''){
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
        if (!checkNode()) {
            return false;
        }
        layer_loading('正在处理');
        $('#post_form').submit();
    }

    function img_call_back(fileurl_tmp)
    {
        $("#litpic_local").val(fileurl_tmp);
        $("#img_a").attr('href', fileurl_tmp);
        $("#img_i").attr('onmouseover', "layer_tips=layer.tips('<img src="+fileurl_tmp+" class=\\'layer_tips_img\\'>',this,{tips: [1, '#fff']});");
        $("input[name=is_litpic]").attr('checked', true); // 自动勾选属性[图片]
    }

    function setNodeIsauto(obj, nodeid) {
        var isauto = $(obj).val();
        if (isauto == 0) {
            $('.dl_'+nodeid+'_isauto_0').show();
            $('.dl_'+nodeid+'_isauto_1').hide();
        } else {
            $('.dl_'+nodeid+'_isauto_0').hide();
            $('.dl_'+nodeid+'_isauto_1').show();
        }
    }

    // 点击选择节点文章
    var lists_node;
    function selectNodeArchives(obj, nodeid) {
        lists_node = $('#'+nodeid).find("textarea[name='specialNode[aidlist][]']");
        var aidlist = lists_node.val();
        var url = eyou_basefile + '?m=admin&c=Special&a=ajax_node_archives_list&aids='+aidlist+'&lang='+__lang__;
        //iframe窗
        var iframes = layer.open({
            type: 2,
            title: '选择节点文档',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            area: ['80%', '80%'],
            content: url
        });
    }

    //选择关联文章返回
    function select_article_back(recall) {
        var lists_val = lists_node.val();
        var lists_add = recall;
        if (lists_val != ''){
            lists_add = lists_val + ',' + lists_add;
        }
        lists_node.val(lists_add);
    }

    /**
     * 删除节点
     * @return {[type]} [description]
     */
    function specialNodeDel(obj)
    {
        var num = $('.specialNodeItems').length;
        if (num <= 1) {
            layer.msg('至少保留一个！', {icon: 2});
            return false;
        }
        $(obj).parent().remove();
    }

    /**
     * 新增节点
     * @return {[type]} [description]
     */
    var node_itemid = $('.tab_div_2 .specialNodeItems').length;
    function specialNodeAdd()
    {
        var len = $('.specialNodeItems').length;
        var itemObj = $($('.specialNodeItems')[len - 1]);
        var nodehtml = itemObj.html();
        var itemid = itemObj.find("input[name='specialNode[itemid][]']").val();

        node_itemid++;
        nodehtml = '<div class="special-items specialNodeItems" id="specialNode_'+itemid+'_item">'+nodehtml+'</div>';
        nodehtml = nodehtml.replace(new RegExp('specialNode_'+itemid+'_item', "g"), 'specialNode_'+node_itemid+'_item'); //第一个参数是正则表达式。
        nodehtml = nodehtml.replace(new RegExp('specialNode\\[isauto\\]\\['+itemid+'\\]', "g"), 'specialNode[isauto]['+node_itemid+']'); //第一个参数是正则表达式。
        $($('.specialNodeItems')[0]).before(nodehtml);

        // 重置数据
        $('#specialNode_'+node_itemid+'_item').find("input[name='specialNode[title][]']").val('节点'+node_itemid);
        $('#specialNode_'+node_itemid+'_item').find("input[name='specialNode[code][]']").val('default'+node_itemid);
        $('#specialNode_'+node_itemid+'_item').find("input[name='specialNode[isauto]["+node_itemid+"]'][value='0']").prop("checked",true);
        $('#specialNode_'+node_itemid+'_item').find("textarea[name='specialNode[aidlist][]']").val('');
        $('#specialNode_'+node_itemid+'_item').find("input[name='specialNode[keywords][]']").val('');
        $('#specialNode_'+node_itemid+'_item').find("select[name='specialNode[typeid][]']").val('0');
        $('#specialNode_'+node_itemid+'_item').find("select[name='specialNode[row][]']").val('10');
        $('#specialNode_'+node_itemid+'_item').find("input[name='specialNode[itemid][]']").val(node_itemid);
        $('#specialNode_'+node_itemid+'_item').find("input[name='specialNode[node_id][]']").val(0);
    }

    function checkNode()
    {
        var returnVal = true;

        var titleObj = $("input[name='specialNode[title][]']");
        $.each(titleObj, function (index, item) {
            if ($.trim($(item).val()) == '') {
                showErrorMsg('节点名称不能为空！');
                $(item).focus();
                returnVal = false;
                return false;
            }
        });

        if (true == returnVal) {
            returnVal = nodeTitleUnique(0);
        }

        if (true == returnVal) {
            var codeObj = $("input[name='specialNode[code][]']");
            $.each(codeObj, function (index, item) {
                if ($.trim($(item).val()) == '') {
                    showErrorMsg('节点标识不能为空！');
                    $(item).focus();
                    returnVal = false;
                    return false;
                }
            });
        }

        if (true == returnVal) {
            returnVal = nodeCodeUnique(0);
        }

        return returnVal;
    }

    function keyupNodeTitleUnique(obj)
    {
        var returnVal = true;
        $(obj).parent().find('span.err').html('').hide();
        returnVal = nodeTitleUnique(1);
        if (!returnVal) {
            $(obj).parent().find('span.err').html('<font color="red">已存在，请更改！</font>').show();
        }
    }

    function keyupNodeCodeUnique(obj)
    {
        var returnVal = true;
        $(obj).parent().find('span.err').html('').hide();
        returnVal = nodeCodeUnique(1);
        if (!returnVal) {
            $(obj).parent().find('span.err').html('<font color="red">已存在，请更改！</font>').show();
        }
    }

    /**
     * 检测节点名称的唯一性
     * @return {[type]} [description]
     */
    function nodeTitleUnique(isMsg)
    {
        var returnVal = true;

        var titleObj = $("input[name='specialNode[title][]']");
        $.each(titleObj, function (index, item) {
            var bnum = 0;
            $.each(titleObj, function (index2, item2) {
                if ($.trim($(item).val()) == $.trim($(item2).val())) {
                    bnum += 1;
                }
            })
            if (bnum > 1) {
                if (0 == isMsg) {
                    showErrorMsg('节点名称已存在，请更改！');
                    $(item).focus();
                }
                returnVal = false;
                return false;
            }
        });

        return returnVal;
    }

    /**
     * 检测节点标识的唯一性
     * @return {[type]} [description]
     */
    function nodeCodeUnique(isMsg)
    {
        var returnVal = true;

        var codeObj = $("input[name='specialNode[code][]']");
        $.each(codeObj, function (index, item) {
            var bnum = 0;
            $.each(codeObj, function (index2, item2) {
                if ($.trim($(item).val()) == $.trim($(item2).val())) {
                    bnum += 1;
                }
            })
            if (bnum > 1) {
                if (0 == isMsg) {
                    showErrorMsg('节点标识已存在，请更改！');
                    $(item).focus();
                }
                returnVal = false;
                return false;
            }
        });

        return returnVal;
    }

    /** 以下 专题节点的拖动排序相关 js*/
    // $( ".sort-list-special" ).sortable({
    //     start: function( event, ui) {
        
    //     }
    //     ,stop: function( event, ui ) {

    //     }
    // });
    //因为他们要拖动，所以尽量设置他们的文字不能选择。 
    // $( ".sort-list-special" ).disableSelection();

    function newtpl()
    {
        var url = "<?php echo url('Archives/ajax_newtpl', ['type'=>'view', 'nid'=>'special']); ?>";
        //iframe窗
        layer.open({
            type: 2,
            title: '新建文档模板',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            maxmin: true, //开启最大化最小化按钮
            area: ['90%', '90%'],
            content: url
        });
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