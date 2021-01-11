<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:46:"./application/admin/template/download\edit.htm";i:1600391896;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\layout.htm";i:1596507477;s:98:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\archives\get_field_addonextitem.htm";i:1609233025;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="/public/plugins/webuploader/webuploader.css">
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
                <h3>编辑下载</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <li><a href="javascript:void(0);" data-index='1' class="tab current"><span>常规选项</span></a></li>
                <li><a href="javascript:void(0);" data-index='2' class="tab"><span>SEO选项</span></a></li>
                <li><a href="javascript:void(0);" data-index='3' class="tab"><span>其他选项</span></a></li>
            </ul>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('Download/edit'); ?>" method="post">
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

            <dl class="row">
                <dt class="tit">
                  <label>下载限制</label>
                </dt>
                <dd class="opt">
                    <select name="arc_level_id" id="arc_level_id">
                        <option value="0">不限用户</option>
                        <?php if(is_array($users_level) || $users_level instanceof \think\Collection || $users_level instanceof \think\Paginator): $i = 0; $__LIST__ = $users_level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $vo['level_id']; ?>" <?php if($vo['level_id'] == $field['arc_level_id']): ?> selected <?php endif; ?>><?php echo $vo['level_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </dd>
            </dl>

            <dl class="row">
                <dt class="tit">
                  <label>上传文件</label>
                </dt>
                <dd class="opt">
                    <div class="layui-upload">
                        <?php if($qiniu_open == 1): ?>
                        <button type="button" class="layui-btn layui-btn-normal" style="position: relative;z-index: 1;">
                            七牛云上传
                            <input type="file" name="file" id="qiniuFile" multiple="multiple" onchange="qiniu_upload(this);" style="position: absolute;top: 0;right: 0;opacity: 0;width: 110px;height: 30px;"/>
                        </button>
                        <?php elseif($oss_open == 1): ?>
                        <button type="button" class="layui-btn layui-btn-normal" style="position: relative;z-index: 1;">
                            oss上传
                            <input type="file" name="file" id="ossFile" multiple="multiple" onchange="oss_upload(this);" style="position: absolute;top: 0;right: 0;opacity: 0;width: 110px;height: 30px;"/>
                        </button>
                        <?php else: ?>
                        <button type="button" class="layui-btn layui-btn-normal" id="buttonList">选择多文件</button>
                        <?php endif; ?>
                        <label><input type="checkbox" value="1" <?php if($is_remote_file == '1'): ?>checked<?php endif; ?> onclick="ClickRemoteFile(this);">远程地址</label>
                        <a href="javascript:void(0);" data-url="<?php echo url('Download/template_set'); ?>" onclick="TemplateSet(this);" <?php if($is_remote_file != '1'): ?> style="display: none;" <?php endif; ?> id='TemplateSet'>[参数设置]</a>
                        <div class="layui-upload-list">
                            <table class="layui-table">
                                <thead>
                                    <tr>
                                    <th>文件名</th>
                                    <th>服务器名称</th>
                                    <th>大小</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                    </tr>
                                </thead>

                                <tbody id="demoList">
                                    <?php if(is_array($downfile_list) || $downfile_list instanceof \think\Collection || $downfile_list instanceof \think\Paginator): $i = 0; $__LIST__ = $downfile_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(empty($vo['is_remote']) || (($vo['is_remote'] instanceof \think\Collection || $vo['is_remote'] instanceof \think\Paginator ) && $vo['is_remote']->isEmpty())): ?>
                                            <tr>
                                                <td><a href="<?php echo $vo['file_url']; ?>" target="_blank"><?php echo $vo['file_name']; ?></a></td>
                                                <td><input type="text" name="fileupload[server_name][]" value="<?php echo $vo['server_name']; ?>"></td>
                                                <td><?php echo format_bytes($vo['file_size']); ?></td>
                                                <td><span style="color: #5FB878;">上传成功</span></td>
                                                <td>
                                                    <span class="layui-btn layui-btn-xs layui-btn-danger" style="line-height:unset;height: unset;" onclick="DeleteFile(this)">移除</span>
                                                    <input type="hidden" name="fileupload[file_url][]" value="<?php echo $vo['file_url']; ?>">
                                                    <input type="hidden" name="fileupload[file_mime][]" value="<?php echo $vo['file_mime']; ?>">
                                                    <input type="hidden" name="fileupload[file_name][]" value="<?php echo $vo['file_name']; ?>">
                                                    <input type="hidden" name="fileupload[file_ext][]" value="<?php echo $vo['file_ext']; ?>">
                                                    <input type="hidden" name="fileupload[file_size][]" value="<?php echo $vo['file_size']; ?>">
                                                    <input type="hidden" name="fileupload[uhash][]" value="<?php echo $vo['uhash']; ?>">
                                                    <input type="hidden" name="fileupload[md5file][]" value="<?php echo $vo['md5file']; ?>">
                                                </td>
                                            </tr>
                                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>

                        <div <?php if($is_remote_file != '1'): ?> style="display: none;" <?php endif; ?> id='ClickRemoteFile'>
                            <div id='Template'>
                                <?php if(empty($is_remote_file) || (($is_remote_file instanceof \think\Collection || $is_remote_file instanceof \think\Paginator ) && $is_remote_file->isEmpty())): ?>
                                <div class="template_div">
                                    远程地址1：<input type="text" name="remote_file[]" value="" placeholder="http://" style="width: 50%;">
                                    <?php if(is_array($attr_field) || $attr_field instanceof \think\Collection || $attr_field instanceof \think\Paginator): $i = 0; $__LIST__ = $attr_field;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <span class="ey_<?php echo $vo['field_name']; ?>">
                                            <span class="title_<?php echo $vo['field_name']; ?>"><?php echo $vo['field_title']; ?></span>：<input type="text" name="<?php echo $vo['field_name']; ?>[]" style="width: 7%;">
                                        </span>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                                <div class="template_div">
                                    远程地址2：<input type="text" name="remote_file[]" value="" placeholder="http://" style="width: 50%;">
                                    <?php if(is_array($attr_field) || $attr_field instanceof \think\Collection || $attr_field instanceof \think\Paginator): $i = 0; $__LIST__ = $attr_field;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <span class="ey_<?php echo $vo['field_name']; ?>">
                                            <span class="title_<?php echo $vo['field_name']; ?>"><?php echo $vo['field_title']; ?></span>：<input type="text" name="<?php echo $vo['field_name']; ?>[]" style="width: 7%;">
                                        </span>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                                <?php else: if(is_array($downfile_list) || $downfile_list instanceof \think\Collection || $downfile_list instanceof \think\Paginator): $i = 0; $__LIST__ = $downfile_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['is_remote'] == '1'): ?>
                                            <div class="template_div">
                                                远程地址<?php  static $num = 1; echo $num++;  ?>：<input type="text" name="remote_file[]" value="<?php echo $vo['file_url']; ?>" placeholder="http://" style="width: 50%;">
                                                <?php if(is_array($attr_field) || $attr_field instanceof \think\Collection || $attr_field instanceof \think\Paginator): $i = 0; $__LIST__ = $attr_field;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f_vo): $mod = ($i % 2 );++$i;?>
                                                    <span class="ey_<?php echo $f_vo['field_name']; ?>">
                                                        <span class="title_<?php echo $f_vo['field_name']; ?>"><?php echo $f_vo['field_title']; ?></span>：<input type="text" name="<?php echo $f_vo['field_name']; ?>[]" value="<?php echo $vo[$f_vo['field_name']]; ?>" style="width: 7%;">
                                                    </span>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </div>
                                        <?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                            </div>
                            <a onclick="GetTemplateAddr(2);">
                                更多远程地址
                            </a>
                        </div>
                        <input type="hidden" name="fileName" id="fileName" value="<?php echo $file_name; ?>" style="width: 100%;">
                        <button style="display:none;" type="button" class="layui-btn" id="buttonListAction">批量重传</button>
                    </div>
                </dd>
            </dl>
            
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
        <!-- 常规信息 -->
        <!-- SEO参数 -->
        <div class="ncap-form-default tab_div_2" style="display:none;">
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
        <div class="ncap-form-default tab_div_3" style="display:none;">
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
                    <label>下载量</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo (isset($field['downcount']) && ($field['downcount'] !== '')?$field['downcount']:'0'); ?>" name="downcount" id="downcount" class="input-txt">
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
<script type="text/javascript" src="/public/plugins/webuploader/webuploader.min.js"></script>
<script type="text/javascript">
    var uploader_swf = '/public/plugins/webuploader/Uploader.swf';
    // var server_url="<?php echo url('Ueditor/downFileUp',array('savepath'=>'soft','nowfilename'=>-1)); ?>";
    var server_url   = "<?php echo url('Ueditor/DownloadUploadFile',array('savepath'=>'soft')); ?>";
    var admin_id = "<?php echo (\think\Session::get('admin_id') ?: '1'); ?>";
</script>
<script src="/public/static/admin/js/getting-started.js"></script>

<script type="text/javascript">
    function qiniu_upload() {
        var arr = [];
        for(var i = 0 ;i<document.getElementById("qiniuFile").files.length;i++){
            //file对象为用户选择的某一个文件
            file=document.getElementById("qiniuFile").files[i];
            var fileName = file.name;
            var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
            var ext = judgeExt(fileExt);
            if (ext>-1) {
                //此时取出这个文件进行处理，这里只是显示文件名
                var timestamp = new Date().getTime()+'-' + Math.ceil(Math.random()*100);
                arr[i] = timestamp;
                $("#demoList").append(
                    '<tr id="upload-'+ timestamp +'">'+
                    '<td>'+ file.name +'</td>'+
                    '<td><input type="text" name="fileupload[server_name][]" value="七牛云服务器"></td>'+
                    '<td>'+ (file.size/1014).toFixed(1) +' KB</td>'+
                    '<td>等待上传</td>'+
                    '<td><button class="layui-btn layui-btn-xs layui-btn-danger demo-delete" style="line-height:unset;height: unset;" onclick="DeleteFile(this);">移除</button>'+
                    '</td>'+
                    '</tr>'
                );
            }else{
                showErrorMsg('不支持选中的文件格式,仅支持'+"<?php echo $basic['file_type']; ?>");
            }
        }
        var date = new Date();
        var y = date.getFullYear();
        var m = date.getMonth() + 1;
        m = m < 10 ? '0' + m : m;
        var d = date.getDate();
        d = d < 10 ? ('0' + d) : d;

        //获取token
        $.ajax({
            type: 'POST',
            url: "<?php echo url('plugins/Qiniuyun/qiniu_upload'); ?>",
            data: {_ajax:1,down:1},
            dataType: "JSON",
            success: function(res1){
                if (1 == res1.code){
                    var token  = res1.data.token;
                    for(var i = 0 ;i<document.getElementById("qiniuFile").files.length;i++) {
                        file = document.getElementById("qiniuFile").files[i];

                        var fileName = file.name;
                        var formData = new FormData();
                        formData.append('token', token);
                        //文件路径
                        formData.append('file', file);
                        //获取文件拓展名
                        var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
                        //三位随机数
                        var num = round_num();
                        //七牛云存储文件名
                        var name = admin_id+'-'+ new Date().getTime()+num+ fileExt;
                        fileName = res1.data.filePath + y + m + d + "/"+ name;
                        formData.append('key', fileName);
                        new Promise(function() {
                            var tr = $("#upload-" + arr[i]);
                            var file_mime = file.type;
                            var file_name = file.name;
                            var file_size = file.size;
                            var file_ext = fileExt;
                            $.ajax({
                                url: res1.data.uphost,
                                type: 'POST',
                                dataType: 'JSON',
                                data: formData,
                                timeout: 1200000,
                                // async: false,
                                cache: false,  //默认是true，但是一般不做缓存
                                processData: false, //用于对data参数进行序列化处理，这里必须false；如果是true，就会将FormData转换为String类型
                                contentType: false,  //一些文件上传http协议的关系，自行百度，如果上传的有文件，那么只能设置为false
                                xhr: function () { //获取ajaxSettings中的xhr对象，为它的upload属性绑定progress事件的处理函数
                                    myXhr = $.ajaxSettings.xhr();
                                    if (myXhr.upload) { //检查upload属性是否存在
                                        //绑定progress事件的回调函数
                                        // myXhr.upload.addEventListener('progress', progressHandlingFunction, false);
                                        myXhr.upload.addEventListener('progress', function (e) {
                                            var curr = e.loaded;
                                            var total = e.total;
                                            process = parseInt(curr / total * 100);
                                            tr.children("td").eq(3).text('上传中...' + process + "%");
                                        });
                                    }

                                    return myXhr; //xhr对象返回给jQuery使用
                                },
                                success: function (res2) {
                                    var video_url = res1.data.domain + "/" + res2.key;
                                    var html = '';
                                    html += '<input type="hidden" name="fileupload[file_url][]" value="'+ video_url +'">';
                                    html += '<input type="hidden" name="fileupload[file_mime][]" value="'+file_mime+'">';
                                    html += '<input type="hidden" name="fileupload[file_name][]" value="'+ file_name +'">';
                                    html += '<input type="hidden" name="fileupload[file_ext][]" value="'+ file_ext +'">';
                                    html += '<input type="hidden" name="fileupload[file_size][]" value="'+file_size+'">';

                                    var tds = tr.children();
                                    tds.eq(3).html('<span style="color: #5FB878;">上传成功</span>');
                                    tds.eq(4).html('<span class="layui-btn layui-btn-xs layui-btn-danger" style="line-height:unset;height: unset;" onclick="DeleteFile(this);">移除</span>'+html);

                                },
                                error: function (e) {
                                    showErrorMsg('请求上传失败！');
                                    return false;
                                }
                            });
                        })
                    }
                }else{
                    showErrorMsg(res1.msg);
                }
            },
            error: function(e){
                showErrorMsg(e);
            }
        });

    }
    function oss_upload() {
        var arr = [];
        for(var i = 0 ;i<document.getElementById("ossFile").files.length;i++){
            //file对象为用户选择的某一个文件
            file=document.getElementById("ossFile").files[i];
            var fileName = file.name;
            var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
            var ext = judgeExt(fileExt);
            if (ext>-1) {
                //此时取出这个文件进行处理，这里只是显示文件名
                var timestamp = new Date().getTime() + '-' + Math.ceil(Math.random()*100);
                arr[i] = timestamp;
                $("#demoList").append(
                    '<tr id="upload-' + timestamp + '">' +
                    '<td>' + file.name + '</td>' +
                    '<td><input type="text" name="fileupload[server_name][]" value="阿里云存储"></td>'+
                    '<td>' + (file.size / 1014).toFixed(1) + ' KB</td>' +
                    '<td>等待上传</td>' +
                    '<td><button class="layui-btn layui-btn-xs layui-btn-danger demo-delete" style="line-height:unset;height: unset;" onclick="DeleteFile(this);">移除</button>' +
                    '</td>' +
                    '</tr>'
                );
            }else{
                showErrorMsg('不支持选中的文件格式,仅支持'+"<?php echo $basic['file_type']; ?>");
            }
        }
        var date = new Date();
        var y = date.getFullYear();
        var m = date.getMonth() + 1;
        m = m < 10 ? '0' + m : m;
        var d = date.getDate();
        d = d < 10 ? ('0' + d) : d;

        //获取token
        $.ajax({
            type: 'POST',
            url: "<?php echo url('plugins/AliyunOss/oss_upload'); ?>",
            data: {_ajax:1,down:1},
            dataType: "JSON",
            success: function(res1){
                if (1 == res1.code){
                    var accessid = res1.data.accessid;
                    var policy = res1.data.policy;
                    var signature = res1.data.signature;
                    var filePath = res1.data.filePath;
                    for(var i = 0 ;i<document.getElementById("ossFile").files.length;i++) {
                        file = document.getElementById("ossFile").files[i];
                        var fileName = file.name;

                        var request = new FormData();
                        request.append("OSSAccessKeyId",accessid);//Bucket 拥有者的Access Key Id。
                        request.append("policy",policy);//policy规定了请求的表单域的合法性
                        request.append("Signature",signature);//根据Access Key Secret和policy计算的签名信息，OSS验证该签名信息从而验证该Post请求的合法性
                        request.append("success_action_status",201);// 让服务端返回200,不然，默认会返回204

                        //获取文件拓展名
                        var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
                        //三位随机数
                        var num = round_num();
                        //七牛云存储文件名
                        var name = admin_id+'-'+ new Date().getTime()+num+ fileExt;
                        fileName = filePath + y + m + d + "/"+ name;
                        request.append("key", fileName);
                        request.append('file', file);

                        var tr = $("#upload-" + arr[i]);
                        new Promise(function() {
                            var tr = $("#upload-" + arr[i]);
                            var file_mime = file.type;
                            var file_name = file.name;
                            var file_size = file.size;
                            var file_ext = fileExt;
                            $.ajax({
                                url: res1.data.host,
                                data: request,
                                processData: false,
                                cache: false,
                                contentType: false,
                                dataType: 'xml',
                                type : 'post',
                                xhr: function () { //获取ajaxSettings中的xhr对象，为它的upload属性绑定progress事件的处理函数
                                    myXhr = $.ajaxSettings.xhr();
                                    if (myXhr.upload) { //检查upload属性是否存在
                                        //绑定progress事件的回调函数
                                        // myXhr.upload.addEventListener('progress', progressHandlingFunction, false);
                                        myXhr.upload.addEventListener('progress', function (e) {
                                            var curr = e.loaded;
                                            var total = e.total;
                                            process = parseInt(curr / total * 100);
                                            tr.children("td").eq(3).text('上传中...' + process + "%");
                                        });
                                    }

                                    return myXhr; //xhr对象返回给jQuery使用
                                },
                                success: function (res2) {
                                    var res = $(res2).find('PostResponse');
                                    if (res) {
                                        var key = res.find('Key').text();
                                        var video_url = res1.data.domain + "/" + key;
                                        var html = '';
                                        html += '<input type="hidden" name="fileupload[file_url][]" value="' + video_url + '">';
                                        html += '<input type="hidden" name="fileupload[file_mime][]" value="' + file_mime + '">';
                                        html += '<input type="hidden" name="fileupload[file_name][]" value="' + file_name + '">';
                                        html += '<input type="hidden" name="fileupload[file_ext][]" value="' + file_ext + '">';
                                        html += '<input type="hidden" name="fileupload[file_size][]" value="' + file_size + '">';

                                        var tds = tr.children();
                                        tds.eq(3).html('<span style="color: #5FB878;">上传成功</span>');
                                        tds.eq(4).html('<span class="layui-btn layui-btn-xs layui-btn-danger" style="line-height:unset;height: unset;" onclick="DeleteFile(this);">移除</span>' + html);
                                    }

                                },
                                error: function (e) {
                                    showErrorMsg('请求上传失败！');
                                    return false;
                                }
                            });
                        })
                    }
                }else{
                    showErrorMsg(res1.msg);
                }
            },
            error: function(e){
                showErrorMsg(e);
            }
        });

    }
    // 远程/本地上传文件切换
    function ClickRemoteFile(obj)
    {   
        if ($(obj).is(':checked')) {
            $('#ClickRemoteFile').show();
            $('#TemplateSet').show();
        } else {
            $('#ClickRemoteFile').hide();
            $('#TemplateSet').hide();
        }
    }

    // 远程地址参数设置
    function TemplateSet(th){
        var url = $(th).attr('data-url');
        //iframe窗
        layer.open({
            type: 2,
            title: '参数设置',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            maxmin: true, //开启最大化最小化按钮
            area: ['40%', '60%'],
            content: url
        });
    }

    // 获取模板属性数据
    function GetTemplateAddr(num = 1){
        $.ajax({
            url: "<?php echo url('Download/get_template', ['_ajax'=>1]); ?>",
            data: {num:num},
            type:'post',
            dataType:'json',
            success: function(res){
                // 拼装模板属性并追加
                AddTemplateAddr(num,res.data);
            },
        });
    }

    // 删除对应的文件及文件信息
    function DeleteFile(obj){
        $(obj).parent().parent().remove();
    }

    // 拼装模板属性并追加
    function AddTemplateAddr(num = 1,data = ''){
        // 获取指定div数量
        var SerialNum = $('#Template div').length;
        // 初始化数组
        var html_div = [];
        // 拼装html
        if (num > 1) {
            for (var i = 0; i < num; i++) {                            
                SerialNum++;
                html_div += 
                [
                    '<div class="template_div">'+
                        '远程地址'+SerialNum+'：<input type="text" name="remote_file[]" value="" placeholder="http://" style="width: 50%;"> '
                ];

                if (data) {
                    for (var j = 0; j < data.length; j++) {
                        html_div += 
                        [
                            '<span class="ey_'+data[j]['field_name']+'"> '+
                                '<span class="title_'+data[j]['field_name']+'"> '+data[j]['field_title']+'</span>：<input type="text" name="'+data[j]['field_name']+'[]" style="width: 7%;">'+
                            '</span>'
                        ];
                    }
                }
                
                html_div += 
                [
                    '</div>'
                ];
            }
        }else{
            SerialNum++;
            html_div += 
            [
                '<div class="template_div">'+
                    '远程地址'+SerialNum+'：<input type="text" name="remote_file[]" value="" placeholder="http://" style="width: 50%;">'
            ];
            
            if (data) {
                for (var j = 0; j < data.length; j++) {
                    html_div += 
                    [
                        '<span class="ey_'+data[j]['field_name']+'">'+
                            '<span class="title_'+data[j]['field_name']+'"> '+data[j]['field_title']+'</span>：<input type="text" name="'+data[j]['field_name']+'[]" style="width: 7%;">'+
                        '</span>'
                    ];
                }
            }

            html_div += 
            [
                '</div>'
            ];
        }

        // 追加html
        $('#Template').append(html_div);
    }

    // 文件上传JS
    layui.use('upload', function(){
        var type = "<?php echo $basic['file_type']; ?>";
        var $ = layui.jquery,upload = layui.upload;
        // 多文件列表示例
        var demoListView = $('#demoList'),uploadListIns = upload.render({
            elem: '#buttonList',
            url: server_url,
            accept: 'file',
            exts: type,
            multiple: true,
            auto: true,
            bindAction: '#buttonListAction',
            choose: function(obj){
                // 将每次选择的文件追加到文件队列
                var files = this.files = obj.pushFile();

                // 读取本地文件
                obj.preview(function(index, file, result){
                    var tr = $(
                    [
                        '<tr id="upload-'+ index +'">',
                            '<td>'+ file.name +'</td>',
                            '<td><input type="text" name="fileupload[server_name][]" value="本地服务器"></td>',
                            '<td>'+ (file.size/1014).toFixed(1) +' KB</td>',
                            '<td>等待上传</td>',
                            '<td>',
                                // '<span class="layui-btn layui-btn-xs demo-reload layui-hide">重传</span>',
                                '<span class="layui-btn layui-btn-xs layui-btn-danger demo-delete" style="line-height:unset;height: unset;">移除</span>',
                            '</td>',
                        '</tr>'
                    ].join(''));
                
                    // 单个重传
                    tr.find('.demo-reload').on('click', function(){
                        obj.upload(index, file);
                    });
                    
                    // 移除
                    tr.find('.demo-delete').on('click', function(){
                        // 移除对应的文件
                        delete files[index];
                        tr.remove();
                        // 清空 input file 值，以免移除后出现同名文件不可选
                        uploadListIns.config.elem.next()[0].value = '';
                    });
                    demoListView.append(tr);
                });
            },
            done: function(res, index, upload){
                if(res.code == 0){
                    // 上传成功
                    // 上传成功
                    var html = '';
                    html += '<input type="hidden" name="fileupload[file_url][]" value="'+res.file_url+'">';
                    html += '<input type="hidden" name="fileupload[file_mime][]" value="'+res.file_mime+'">';
                    html += '<input type="hidden" name="fileupload[file_name][]" value="'+res.file_name+'">';
                    html += '<input type="hidden" name="fileupload[file_ext][]" value="'+res.file_ext+'">';
                    html += '<input type="hidden" name="fileupload[file_size][]" value="'+res.file_size+'">';
                    html += '<input type="hidden" name="fileupload[uhash][]" value="'+res.uhash+'">';
                    html += '<input type="hidden" name="fileupload[md5file][]" value="'+res.md5file+'">';

                    var tr = demoListView.find('tr#upload-'+ index),
                    tds = tr.children();
                    tds.eq(0).html(res.file_name);
                    tds.eq(3).html('<span style="color: #5FB878;">'+res.msg+'</span>');
                    tds.eq(4).html('<span class="layui-btn layui-btn-xs layui-btn-danger" style="line-height:unset;height: unset;" onclick="DeleteFile(this);">移除</span>'+html);

                    // 清空操作
                    return delete this.files[index];// 移除文件队列已经上传成功的文件
                }
                this.error(res, index, upload);
            },
            error: function(res, index, upload){
                var tr = demoListView.find('tr#upload-'+ index),
                tds = tr.children();
                tds.eq(3).html('<span style="color: #FF5722;">'+res.msg+'</span>');
            }
        });
    });
</script>

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
            $(".tab_div_1, .tab_div_2, .tab_div_3").hide();          
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
    function round_num() {
        var num = '';
        for(var i=0;i<3;i++)
        {
            num+=Math.floor(Math.random()*10);
        }
        return num;
    }
    function judgeExt(ext) {
        var type = "<?php echo $basic['file_type']; ?>";
        var extArr = [];
        extArr = type.split("|");
        var ext = ext.replace(".","");

        return extArr.indexOf(ext);
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