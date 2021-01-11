<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:48:"./application/admin/template/system\smtp_tpl.htm";i:1573115083;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\layout.htm";i:1596507477;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
    <div class="fixed-bar">
        <div class="item-title">
            <div class="subject">
                <h3>邮件模板</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <li><a href="<?php echo url("System/smtp_tpl"); ?>" class="tab <?php if(\think\Request::instance()->action() == 'smtp_tpl'): ?>current<?php endif; ?>"><span>模板列表</span></a></li>
            </ul>
        </div>
    </div>
    <div class="flexigrid">
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0" style="width: 100%">
                    <thead>
                    <tr>
                        <th class="sign w10" axis="col0">
                            <div class="tc">&nbsp;</div>
                        </th>
                        <th abbr="article_title" axis="col3" class="w150">
                            <div class="">模板名称</div>
                        </th>
                        <th abbr="article_title" axis="col3" class="">
                            <div class="">邮件标题</div>
                        </th>
                        <!-- <th abbr="ac_id" axis="col4">
                            <div class="">发送邮件内容格式</div>
                        </th> -->
                        <th abbr="article_time" axis="col6" class="w50">
                            <div class="tc">启用</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">更新时间</div>
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
                        <tr>
                            <td class="sign">
                                <div class="w10 tc">&nbsp;</div>
                            </td>
                            <td class="">
                                <div class="w150">
                                    <?php echo $vo['tpl_name']; ?>
                                </div>
                            </td>
                            <td style="width: 100%">
                                <div class="">
                                    <?php if(is_check_access('Member@level_edit') == '1'): ?>
                                        <input type="text" name="tpl_title" value="<?php echo $vo['tpl_title']; ?>" onchange="changeTableVal('smtp_tpl','tpl_id','<?php echo $vo['tpl_id']; ?>','tpl_title',this);" style="width: 94%;">
                                    <?php else: ?>
                                        <?php echo $vo['tpl_title']; endif; ?>
                                </div>
                            </td>
                            <!-- <td style="width: 100%">
                                <div style="">
                                    <?php echo $vo['tpl_content']; ?>
                                </div>
                            </td> -->
                            <td class="">
                                <div class="w50 tc">
                                    <?php if($vo['is_open'] == '1'): ?>
                                        <span class="yes" onClick="changeTableVal('smtp_tpl','tpl_id','<?php echo $vo['tpl_id']; ?>','is_open',this);"><i class="fa fa-check-circle"></i>是</span>
                                    <?php else: ?>
                                        <span class="no" onClick="changeTableVal('smtp_tpl','tpl_id','<?php echo $vo['tpl_id']; ?>','is_open',this);"><i class="fa fa-ban"></i>否</span>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td class=""> 
                                <div class="w100 tc">
                                    <?php echo MyDate('Y-m-d',$vo['update_time']); ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="iDiv" style="display: none;"></div>
        </div>
        <!--分页位置-->
        <?php echo $pageStr; ?>
    </div>
</div>
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