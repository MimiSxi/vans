<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:46:"./application/admin/template/tags\tag_list.htm";i:1596507477;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\layout.htm";i:1596507477;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
<body class="bodystyle" style="cursor: default; -moz-user-select: inherit; min-width:400px;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="min-width: 400px;">
    <div class="flexigrid">

        <div class="ftitle">
            <div id="TagsDiv" class="sDiv2" style="display: none;"></div>
            <span id="TagsSpan" class="sDiv2" style="display: none;">
                <input type="button" class="btn" style="border: none; background-color: #4fc0e8; color: white;" value="完成" onclick="CarryOutSelect();">
            </span>
        </div> 
        
        <div class="tDiv">
            <div class="tDiv2">
                <div class="fbutton checkboxall"></div>
            </div>
            <a href="javascript:void(0);" onclick="parent.tags_list(this);" class="ncap-btn ncap-btn-green" style="float: right; margin-top: 8px;">标签高级管理</a>
        </div>

        <div class="bDiv" style="height: auto;background: #f7f7f7;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table style="width: 100%">
                    <tbody>
                    <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                        <tr>
                            <td class="no-data" align="center" axis="col0" colspan="50">
                                <i class="fa fa-exclamation-circle"></i>没有符合条件的记录
                            </td>
                        </tr>
                    <?php else: ?>
                        <tr>
                            <td>
                                <div class="tagBox">
                                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                                        <a class="btn red" href="javascript:void(0);" id="TagSelect_<?php echo $vo['id']; ?>" data-id="<?php echo $vo['id']; ?>" data-tag="<?php echo $vo['tag']; ?>" onclick="TagSelect(this, '#TagSelect_<?php echo $vo['id']; ?>');"><i class="fa fa-trash-o"></i><?php echo $vo['tag']; ?>(<?php echo $vo['total']; ?>)</a> &nbsp; 
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tDiv">
            <div class="tDiv2">
                <div class="fbutton checkboxall"></div>
            </div>
        </div>
        <!--分页位置-->
        <?php echo $page; ?>
    </div>
</div>
<script>
    $(document).ready(function() {
        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });

        var tagOldSelectID = parent.$('#TagOldSelectID').val();
        var tagOldSelectTag = parent.$('#TagOldSelectTag').val();
        if (tagOldSelectID && tagOldSelectTag) {
            var tagOldSelectID = tagOldSelectID.split(',');
            var tagOldSelectTag = tagOldSelectTag.split(',');

            if (tagOldSelectID.length > 0 && tagOldSelectTag.length > 0) {
                for (var i = tagOldSelectID.length - 1; i >= 0; i--) {
                    var tagSelectID = '#TagSelect_' + tagOldSelectID[i];
                    var html = '<input type="button" class="btn TagsIndex" style="border: none; background-color: #fff; color: #12ace2;" value="'+tagOldSelectTag[i]+' x" data-id="'+tagOldSelectID[i]+'" onclick="DelSelect(this, \''+tagSelectID+'\');">';
                    $('#TagsDiv').show().append(html);
                    if ($('.TagsIndex').length > 0) $('#TagsSpan').show();
                    $(tagSelectID).css('background-color', '#d6c5c5').css('color', 'white');
                }
            }
        }
    });

    // 编辑TAG标签的SEO优化
    function SeoEdit(obj) {
        var url = $(obj).data('url');
        //iframe窗
        layer.open({
            type: 2,
            title: 'TAG标签 - 编辑',
            fixed: true,
            shadeClose: false,
            shade: 0.3,
            maxmin: true,
            area: ['630px', '500px'],
            content: url
        });
    }
	
    // 选中tag标签
    function TagSelect(obj, tagSelectID) {
        // 获取已选中的tag标签ID
        var tagOldSelectID = parent.$('#TagOldSelectID').val();
        // 获取已选中的tag标签Tag
        var tagOldSelectTag = parent.$('#TagOldSelectTag').val();
        // 获取当前点击的tag标签ID
        var id = $(obj).attr('data-id');
        // 获取当前点击的tag标签Tag
        var tag = $(obj).attr('data-tag');
        // 是否添加成功，默认 false
        var is_add = false;
        // 是否存在已选tag标签ID
        if (tagOldSelectID) {
            // 判断tag标签ID是否已存在
            var TagOldSelectNew = tagOldSelectID.split(',');
            // 不存在则执行
            if ($.inArray(id, TagOldSelectNew) == -1) {
                // 追加tag标签ID
                tagOldSelectID += ',' + id;
                // 追加tag标签名称
                tagOldSelectTag += ',' + tag;
                // 添加成功，改为 true
                is_add = true;
            }
        } else {
            // 添加tag标签ID
            tagOldSelectID = id;
            // 添加tag标签名称
            tagOldSelectTag = tag;
            // 添加成功，改为 true
            is_add = true;
        }
        // 添加成功则执行
        if (is_add) {
            // 添加tag标签名称至页面顶部
            var html = '<input type="button" class="btn TagsIndex" style="border: none; background-color: #fff; color: #12ace2;" value="'+tag+' x" data-id="'+id+'" onclick="DelSelect(this, \''+tagSelectID+'\');">';
            $('#TagsDiv').show().append(html);
            if ($('.TagsIndex').length > 0) $('#TagsSpan').show();
        }
        // 赋值给已选中的tag标签ID隐藏域
        parent.$('#TagOldSelectID').val(tagOldSelectID);
        // 赋值给已选中的tag标签名称隐藏域
        parent.$('#TagOldSelectTag').val(tagOldSelectTag);
        // 添加当前点击项的自定义样式
        $(obj).css('background-color', '#d6c5c5').css('color', 'white');
    }

    // 删除已选单条tag
    function DelSelect(obj, tagSelectID) {
        // 获取已选中的tag标签ID
        var tagOldSelectID = parent.$('#TagOldSelectID').val();
        // 获取已选中的tag标签Tag
        var tagOldSelectTag = parent.$('#TagOldSelectTag').val();
        // 获取当前点击的tag标签ID
        var id = $(obj).attr('data-id');
        if (tagOldSelectID) {
            // 将字符串转成数组，判断tag标签ID是否已存在
            var tagOldSelectID = tagOldSelectID.split(',');
            // 将字符串转成数组，判断tag标签ID是否已存在
            var tagOldSelectTag = tagOldSelectTag.split(',');
            // 是否存在，存在则返回下标
            var index = $.inArray(id, tagOldSelectID);
            // 若存在则执行
            if (index != -1) {
                // 删除指定tag的ID
                tagOldSelectID.splice(index, 1);
                // 将数组转成字符串
                tagOldSelectID = tagOldSelectID.join(',');
                // 赋值给已选中的tag标签ID隐藏域
                parent.$('#TagOldSelectID').val(tagOldSelectID);

                // 删除指定tag的名称
                tagOldSelectTag.splice(index, 1);
                // 将数组转成字符串
                tagOldSelectTag = tagOldSelectTag.join(',');
                // 赋值给已选中的tag标签名称隐藏域
                parent.$('#TagOldSelectTag').val(tagOldSelectTag);

                // 删除自身
                $(obj).remove();
                // 清楚当前点击项的style
                $(tagSelectID).removeAttr('style');
            }
        }
    }

    // 完成选择
    function CarryOutSelect() {
        // 获取已选中的tag标签
        var tagOldSelectID     = parent.$('#TagOldSelectID').val();
        var tagOldSelectTag    = parent.$('#TagOldSelectTag').val();
        var newTagOldSelectID  = parent.$('#NewTagOldSelectID').val();
        var newtagOldSelectTag = parent.$('#NewTagOldSelectTag').val();

        // 存在差异则执行
        if (tagOldSelectID != newTagOldSelectID) {
            // 数据不为空则执行
            if (tagOldSelectID && tagOldSelectTag) {
                /*将字符串转成数组*/
                var tagOldSelectID  = tagOldSelectID.split(',');
                var tagOldSelectTag = tagOldSelectTag.split(',');
                var newTagOldSelectID  = newTagOldSelectID.split(',');
                var newtagOldSelectTag = newtagOldSelectTag.split(',');
                /*END*/

                /*判断是否存在新增的TAG标签ID*/
                var tagOldSelectID_2 = tagOldSelectID.filter( function(n) {
                    return newTagOldSelectID.indexOf(n) == -1;
                });
                /*END*/
                /*判断是否存在新增的TAG标签名称*/
                var tagOldSelectTag_2 = tagOldSelectTag.filter( function(n) {
                    return newtagOldSelectTag.indexOf(n) == -1;
                });
                /*END*/
                /*有TAG标签则执行*/
                if (tagOldSelectID_2.length > 0 && tagOldSelectTag_2.length > 0) {
                    for (var i = tagOldSelectID_2.length - 1; i >= 0; i--) {
                        /*判断选择的TAG名称是否已存在，存在则清除*/
                        parent.$('.span_tag').each( function() {
                            if ($(this).find('a').val() === tagOldSelectTag_2[i]) $(this).remove();
                        });
                        parent.$('.tag_new').each( function() {
                            if ($(this).find('a').attr('data-tag') === tagOldSelectTag_2[i]) $(this).remove();
                        });
                        /*END*/
                        /*组装数据加载*/
                        var html = '<span class="tag_new">'+tagOldSelectTag_2[i]+' &nbsp;&nbsp;<a href="javascript:void(0);" data-id="'+tagOldSelectID_2[i]+'" data-tag="'+tagOldSelectTag_2[i]+'" onclick="UseTagIDDel1591784354(this);">x</a></span>';
                        parent.$('#tags_tag').before(html);
                        /*END*/
                    }
                }
                /*END*/

                /*判断是否存在新增的TAG标签ID*/
                var tagOldSelectID_3 = newTagOldSelectID.filter( function(m) {
                    return tagOldSelectID.indexOf(m) == -1;
                });
                /*END*/
                /*判断是否存在新增的TAG标签名称*/
                var tagOldSelectTag_3 = newtagOldSelectTag.filter( function(m) {
                    return tagOldSelectTag.indexOf(m) == -1;
                });
                /*END*/

                /*有TAG标签则执行*/
                if (tagOldSelectID_3.length > 0 && tagOldSelectTag_3.length > 0) {
                    for (var i = tagOldSelectTag_3.length - 1; i >= 0; i--) {
                        /*判断选择的TAG名称是否已存在，存在则清除*/
                        parent.$('.span_tag').each( function() {
                            if ($(this).find('a').val() === tagOldSelectTag_3[i]) $(this).remove();
                        });
                        parent.$('.tag_new').each( function() {
                            if ($(this).find('a').attr('data-tag') === tagOldSelectTag_3[i]) $(this).remove();
                        });
                        /*END*/
                    }
                }
                /*END*/

                // 赋值给已选中的tag标签ID隐藏域
                parent.$('#NewTagOldSelectID').val(tagOldSelectID);
                // 赋值给已选中的tag标签名称隐藏域
                parent.$('#tags').show().val(tagOldSelectTag).hide();
                parent.$('#NewTagOldSelectTag').val(tagOldSelectTag);
            } else {
                parent.$('.tag_new').remove();
                // 赋值给已选中的tag标签显示,赋值给已选中的tag标签名称隐藏域
                parent.$('#NewTagOldSelectTag').val('');
                // 赋值给已选中的tag标签ID隐藏域
                parent.$('#NewTagOldSelectID').val('');
            }
        }

        // 关闭弹窗
        parent.layer.closeAll();
    }

    // 一键清空
    function clearall() {
        layer.confirm('此操作不可恢复，确认一键清空？', {
            title: false,
            btn: ['确定', '取消'] //按钮
        }, function () {
            layer_loading('正在处理');
            $.ajax({
                type: "POST",
                url: "<?php echo url('Tags/clearall'); ?>",
                data: {_ajax: 1},
                dataType: 'json',
                success: function (res) {
                    layer.closeAll();
                    if(res.code == 1) {
                        window.location.reload();
                    } else {
                        layer.alert(res.msg, {icon: 2, title:false});
                    }
                },
                error:function() {
                    layer.closeAll();
                    layer.alert(ey_unknown_error, {icon: 2, title:false});
                }
            });
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