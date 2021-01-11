<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:43:"./application/admin/template/tags\index.htm";i:1597800522;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\layout.htm";i:1596507477;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
                <input type="button" class="btn" style="background-color: #0d25d2; color: white;" value="完成" onclick="CarryOutSelect();">
            </span>
        </div>
        <div class="mDiv">
            <div class="ftitle">
                <h3>TAG标签列表</h3>
                <h5>(共<?php echo $pager->totalRows; ?>条数据)</h5>
            </div>
            <div title="刷新数据" class="pReload"><i class="fa fa-refresh"></i></div>
            <form class="navbar-form form-inline" action="<?php echo url('Tags/index'); ?>" method="get" onsubmit="layer_loading('正在处理');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                <div class="sDiv">
                    <div class="sDiv2">
                        <input type="text" size="30" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" class="qsbox" placeholder="搜索名称...">
                        <input type="submit" class="btn" value="搜索">
                    </div>
                    <div class="sDiv2">
                        <input type="button" class="btn" value="重置" onclick="window.location.href='<?php echo url('Tags/index'); ?>';">
                    </div>
                    <div class="sDiv2">
                        <input type="button" class="btn" value="一键清空" onclick="clearall();">
                    </div>
                </div>
            </form>
        </div>
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0" style="width: 100%">
                    <thead>
                    <tr>
                        <th class="sign w40" axis="col0">
                            <div class="tc">选择</div>
                        </th>
                        <th abbr="ac_id" axis="col4">
                            <div class="">标签</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">点击</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">文档数</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">新增时间</div>
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
                <table style="width: 100%">
                    <tbody>
                    <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                        <tr>
                            <td class="no-data" align="center" axis="col0" colspan="50">
                                <i class="fa fa-exclamation-circle"></i>没有符合条件的记录
                            </td>
                        </tr>
                    <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                        <tr class="tagTr" data-id="<?php echo $vo['id']; ?>" data-tag="<?php echo $vo['tag']; ?>">
                            <td class="sign">
                                <div class="w40 tc"><input type="checkbox" name="ids[]" value="<?php echo $vo['id']; ?>"></div>
                            </td>
                            <td style="width: 100%">
                                <div style="">
                                    <a href="<?php echo get_tagurl($vo['id']); ?>" target="_blank"><?php echo $vo['tag']; ?></a>
                                </div>
                            </td>
                            <td class="">
                                <div class="w100 tc">
                                    <input style="text-align:center;width: 80px;" type="text" onchange="changeTableVal('tagindex','id','<?php echo $vo['id']; ?>','count',this);" value="<?php echo $vo['count']; ?>" onkeyup="this.value=this.value.replace(/[^\d]/g,'');" onpaste="this.value=this.value.replace(/[^\d]/g,'')" />
                                </div>
                            </td>
                            <td class="">
                                <div class="w100 tc">
                                    <?php echo $vo['total']; ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="w100 tc">
                                    <?php echo date('Y-m-d',$vo['add_time']); ?>
                                </div>
                            </td>
                            <td>
                                <div class="w180 tc">
                                    <?php if(is_check_access('Tags@del') == '1'): ?>
                                        <a class="btn red"  href="javascript:void(0);" data-url="<?php echo url('Tags/del'); ?>" data-id="<?php echo $vo['id']; ?>" onclick="delfun(this);"><i class="fa fa-trash-o"></i>删除</a>
                                    <?php endif; if(is_check_access('Tags@edit') == '1'): ?>
                                        <a class="btn blue" href="javascript:void(0);" data-url="<?php echo url('Tags/edit', ['id'=>$vo['id']]); ?>" onclick="SeoEdit(this);"><i class="fa fa-trash-o"></i>SEO</a>
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
        <div class="tDiv">
            <div class="tDiv2">
                <div class="fbutton checkboxall">
                    <input type="checkbox" onclick="javascript:$('input[name*=ids]').prop('checked',this.checked);">
                </div>
                <?php if(is_check_access('Tags@del') == '1'): ?>
                <div class="fbutton">
                    <a onclick="batch_del(this, 'ids');" data-url="<?php echo url('Tags/del'); ?>">
                        <div class="add" title="批量删除">
                            <span><i class="fa fa-close"></i>批量删除</span>
                        </div>
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <div style="clear:both"></div>
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
            area: ['700px', '450px'],
            content: url
        });
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