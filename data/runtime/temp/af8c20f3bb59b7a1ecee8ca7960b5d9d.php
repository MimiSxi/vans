<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:49:"./application/admin/template/index\switch_map.htm";i:1610074367;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\layout.htm";i:1596507477;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
<body class="bodystyle" style="min-width: auto;">
    <div class="on-off_panel">
        <div class="title">基础功能</div>
        <div class="on-off_list">
            <ul>
                <li><a href="javascript:void(0);" data-href="<?php echo url('System/basic'); ?>" data-leftmenu="System_web" onclick="gourl2(this,1);"><span>附件设置</span></a></li>
                <li><a href="javascript:void(0);" data-href="<?php echo url('System/water'); ?>" data-leftmenu="System_web" onclick="gourl2(this,1);"><span>水印配置</span></a></li>
                <li><a href="javascript:void(0);" data-href="<?php echo url('System/thumb'); ?>" data-leftmenu="System_web" onclick="gourl2(this,1);"><span>缩略图配置</span></a></li>
                <li><a href="javascript:void(0);" data-href="<?php echo url('Tags/index'); ?>" data-leftmenu="System_web" onclick="gourl2(this,1);"><span>TAG管理</span></a></li>
                <li><a href="javascript:void(0);" data-href="<?php echo url('Links/index'); ?>" data-leftmenu="System_web" onclick="gourl2(this,1);"><span>友情链接</span></a></li>
            </ul>
        </div>
    </div>
    <div class="on-off_panel">
        <div class="title">用户中心
            <span class="close-bt" title="关闭用户中心" onclick="user_submit(this, 'web', 'web_users_switch',0);" data-lmenuid="Member_users_index"></span>
        </div>
        <div class="on-off_content <?php if($globalConfig['web_users_switch'] == '0'): ?>show-shade<?php endif; ?>" id="users_centre">
            <div class="on-off_shade ">
                <div class="on-off_shadeCon">
                    <span>目前还没有开启用户模块功能，<a href="javascript:void(0);" onclick="ajax_submit(this, 'web', 'web_users_switch',1);" data-lmenuid="Member_users_index">我要开启</a></span>
                </div>
            </div>
            <div class="on-off_btns">
                <form class="layui-form" action="">
                    <ul>
                        <li>
                            <div class="on-off_btn">
                                <div class="on-off_btn_l">
                                    <p>资料上传：</p>
                                </div>
                                <div class="on-off_btn_r">
                                    <input type="checkbox" name="users[users_open_release]" lay-skin="switch" lay-text="开启|关闭" lay-filter="switchTest"
                                           data-authortoken="<?php echo $is_eyou_authortoken; ?>" data-is_online="<?php echo $is_online; ?>" <?php if($userConfig['users_open_release'] == '1'): ?>checked="" <?php endif; ?>
                                           data-type="users" data-name="users_open_release" data-lmenuid="Member_users_index" value="<?php echo $userConfig['users_open_release']; ?>">
                                </div>
                            </div>
                        </li>
<!--                        <li>-->
<!--                            <div class="on-off_btn">-->
<!--                                <div class="on-off_btn_l">-->
<!--                                    <p>用户升级：</p>-->
<!--                                </div>-->
<!--                                <div class="on-off_btn_r">-->
<!--                                    <input type="checkbox" name="level[level_member_upgrade]" lay-skin="switch" lay-text="开启|关闭" lay-filter="switchTest"-->
<!--                                           data-authortoken="<?php echo $is_eyou_authortoken; ?>" data-is_online="<?php echo $is_online; ?>" <?php if($userConfig['level_member_upgrade'] == '1'): ?>checked="" <?php endif; ?>-->
<!--                                    data-type="level" data-name="level_member_upgrade" data-lmenuid="Member_users_index" value="<?php echo $userConfig['level_member_upgrade']; ?>">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <div class="on-off_btn">-->
<!--                                <div class="on-off_btn_l">-->
<!--                                    <p>商城中心：</p>-->
<!--                                </div>-->
<!--                                <div class="on-off_btn_r">-->
<!--                                    <input type="checkbox" name="shop[shop_open]" lay-skin="switch" lay-text="开启|关闭" lay-filter="switchTest"-->
<!--                                           data-authortoken="<?php echo $is_eyou_authortoken; ?>" data-is_online="<?php echo $is_online; ?>" <?php if($userConfig['shop_open'] == '1'): ?>checked="" <?php endif; ?>-->
<!--                                    data-type="shop" data-name="shop_open" data-lmenuid="Shop_home" value="<?php echo $userConfig['shop_open']; ?>">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <div class="on-off_btn">-->
<!--                                <div class="on-off_btn_l">-->
<!--                                    <p>支付功能：</p>-->
<!--                                </div>-->
<!--                                <div class="on-off_btn_r">-->
<!--                                    <input type="checkbox" name="pay[pay_open]" lay-skin="switch" lay-text="开启|关闭" lay-filter="switchTest"-->
<!--                                           data-authortoken="<?php echo $is_eyou_authortoken; ?>" data-is_online="<?php echo $is_online; ?>" <?php if($userConfig['pay_open'] == '1'): ?>checked="" <?php endif; ?>-->
<!--                                    data-type="pay" data-name="pay_open" data-lmenuid="Member_users_index" value="<?php echo $userConfig['pay_open']; ?>">-->

<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
                    </ul>
                </form>
            </div>
            <div class="on-off_list">
                <ul>
                    <li><a href="javascript:void(0);" data-href="<?php echo url('Member/users_index'); ?>" data-leftmenu="Member_users_index" onclick="gourl2(this,1);"><span>用户列表</span></a></li>
                    <li><a href="javascript:void(0);" data-href="<?php echo url('Member/level_index'); ?>" data-leftmenu="Member_users_index" onclick="gourl2(this,1);"><span>用户级别</span></a></li>
                    <li><a href="javascript:void(0);" data-href="<?php echo url('Member/attr_index'); ?>" data-leftmenu="Member_users_index" onclick="gourl2(this,1);"><span>用户属性</span></a></li>
                    <li><a href="javascript:void(0);" data-href="<?php echo url('Member/users_config'); ?>" data-leftmenu="Member_users_index" onclick="gourl2(this,1);"><span>用户功能配置</span></a></li>
                    <li  id="guide_pay_open" <?php if($userConfig['pay_open'] == '0'): ?>hidden <?php endif; ?>><a href="javascript:void(0);" data-href="<?php echo url('Member/money_index'); ?>" data-leftmenu="Member_users_index" onclick="gourl2(this,1);"><span>充值记录</span></a></li>
                    <li id="guide_users_open_release" <?php if($userConfig['users_open_release'] == '0'): ?>hidden <?php endif; ?>><a href="javascript:void(0);" data-href="<?php echo url('UsersRelease/conf'); ?>" data-leftmenu="Member_users_index" onclick="gourl2(this,1);"><span>投稿配置</span></a></li>
                </ul>
            </div>
<!--            <div id="guide_level_member_upgrade" <?php if($userConfig['level_member_upgrade'] == '0'): ?>hidden <?php endif; ?>>-->
<!--                <div class="son-tit">-->
<!--                    <span>用户升级</span>-->
<!--                </div>-->
<!--                <div class="on-off_list">-->
<!--                    <ul>-->
<!--                        <li><a href="javascript:void(0);" data-href="<?php echo url('Level/index'); ?>" data-leftmenu="Member_users_index" onclick="gourl2(this,1);"><span>用户产品分类</span></a></li>-->
<!--                        <li><a href="javascript:void(0);" data-href="<?php echo url('Member/level_index'); ?>" data-leftmenu="Member_users_index" onclick="gourl2(this,1);"><span>用户级别管理</span></a></li>-->
<!--                        <li><a href="javascript:void(0);" data-href="<?php echo url('Level/upgrade_index'); ?>" data-leftmenu="Member_users_index" onclick="gourl2(this,1);"><span>用户升级记录</span></a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="guide_shop_open" <?php if($userConfig['shop_open'] == '0'): ?>hidden <?php endif; ?>>-->
<!--                <div class="son-tit">-->
<!--                    <span>商城中心</span>-->
<!--                </div>-->
<!--                <div class="on-off_list">-->
<!--                    <ul>-->
<!--                        <li><a href="javascript:void(0);" data-href="<?php echo url('Statistics/index'); ?>" data-leftmenu="Shop_home" onclick="gourl2(this,1);"><span>数据统计</span></a></li>-->
<!--                        <li><a href="javascript:void(0);" data-href="<?php echo url('Shop/index'); ?>" data-leftmenu="Shop_home" onclick="gourl2(this,1);"><span>订单管理</span></a></li>-->
<!--                        <li><a href="javascript:void(0);" data-href="<?php echo url('ShopProduct/index'); ?>" data-leftmenu="Shop_home" onclick="gourl2(this,1);"><span>商品管理</span></a></li>-->
<!--                        <li><a href="javascript:void(0);" data-href="<?php echo url('ShopProduct/attrlist_index'); ?>" data-leftmenu="Shop_home" onclick="gourl2(this,1);"><span>商品参数</span></a></li>-->
<!--                        <li><a href="javascript:void(0);" onclick="SpecTempLate();"><span>商品规格</span></a></li>-->
<!--                        <li><a href="javascript:void(0);" data-href="<?php echo url('Shop/conf'); ?>" data-leftmenu="Shop_home" onclick="gourl2(this,1);"><span>商城配置</span></a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
    <div class="on-off_panel">
        <div class="title">接口配置</div>
        <div class="on-off_content">
            <div class="on-off_list">
                <ul>
                    <li><a href="javascript:void(0);" data-href="<?php echo url('System/api_conf'); ?>&sys=smtp" data-leftmenu="System_web" onclick="gourl2(this,1);"><span>邮箱接口</span></a></li>
<!--                    <li><a href="javascript:void(0);" data-href="<?php echo url('System/api_conf'); ?>&sys=sms" data-leftmenu="System_web" onclick="gourl2(this,1);"><span>短信接口</span></a></li>-->
<!--                    <li><a href="javascript:void(0);" data-href="<?php echo url('System/api_conf'); ?>&sys=microsite" data-leftmenu="System_web" onclick="gourl2(this,1);"><span>微站点配置</span></a></li>-->
                </ul>
            </div>
<!--            <div>-->
<!--                <div class="son-tit">-->
<!--                    <span>支付接口</span>-->
<!--                </div>-->
<!--                <div class="on-off_list">-->
<!--                    <ul>-->
<!--                        <?php if(is_array($pay_list) || $pay_list instanceof \think\Collection || $pay_list instanceof \think\Paginator): if( count($pay_list)==0 ) : echo "" ;else: foreach($pay_list as $k=>$vo): ?>-->
<!--                        <li><a href="JavaScript:void(0);" onclick="PayApiConfig(<?php echo $vo['pay_id']; ?>, '<?php echo $vo['pay_name']; ?>');"><span><?php echo $vo['pay_name']; ?></span></a></li>-->
<!--                        <?php endforeach; endif; else: echo "" ;endif; ?>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
    <div class="on-off_panel">
        <div class="title">更多功能</div>
        <div class="on-off_content">
            <div class="on-off_btns">
                <form class="layui-form" action="">
                    <ul>
                        <?php if($weapp_switch == 'true'): ?>
<!--                        <li>-->
<!--                            <div class="on-off_btn">-->
<!--                                <div class="on-off_btn_l">-->
<!--                                    <p>插件应用：</p>-->
<!--                                </div>-->
<!--                                <div class="on-off_btn_r">-->
<!--                                    <input type="checkbox" name="web[web_weapp_switch]" lay-skin="switch" lay-text="开启|关闭" lay-filter="switchWeapp"-->
<!--                                           data-type="web" data-name="web_weapp_switch" data-lmenuid="Weapp_index" value="<?php echo $globalConfig['web_weapp_switch']; ?>"-->
<!--                                           <?php if($globalConfig['web_weapp_switch'] == '1'): ?>checked="" <?php endif; ?>>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
                        <?php endif; ?>
                        <li>
                            <div class="on-off_btn">
                                <div class="on-off_btn_l">
                                    <p>多语言：</p>
                                </div>
                                <div class="on-off_btn_r">
                                    <input type="checkbox" name="web[web_language_switch]" lay-skin="switch" lay-text="开启|关闭" lay-filter="switchTest"
                                           data-type="web" data-name="web_language_switch" data-lmenuid="Language_index" value="<?php echo $globalConfig['web_language_switch']; ?>"
                                           <?php if($globalConfig['web_language_switch'] == '1'): ?>checked="" <?php endif; ?>>
                                </div>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <div class="on-off_panel">
        <div class="title">高级选项</div>
        <div class="on-off_content">
            <div class="on-off_list">
                <ul>
                    <li><a href="javascript:void(0);" data-href="<?php echo url('Admin/index'); ?>" data-leftmenu="Senior_index" onclick="gourl2(this,2);"><span>管理员</span></a></li>
                    <li><a href="javascript:void(0);" data-href="<?php echo url('RecycleBin/arctype_index'); ?>" data-leftmenu="Senior_index" onclick="gourl2(this,2);"><span>回收站</span></a></li>
                    <li><a href="javascript:void(0);" data-href="<?php echo url('Tools/index'); ?>" data-leftmenu="Senior_index" onclick="gourl2(this,2);"><span>备份还原</span></a></li>
                    <li><a href="javascript:void(0);" data-href="<?php echo url('Channeltype/index'); ?>" data-leftmenu="Senior_index" onclick="gourl2(this,2);"><span>频道模型</span></a></li>
                    <li><a href="javascript:void(0);" data-href="<?php echo url('Field/arctype_index'); ?>" data-leftmenu="Senior_index" onclick="gourl2(this,2);"><span>栏目字段</span></a></li>
                    <li><a href="javascript:void(0);" data-href="<?php echo url('System/clear_cache'); ?>" data-leftmenu="Senior_index" onclick="gourl2(this,2);"><span>清除缓存</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" name="is_themeusers_exist" id="is_themeusers_exist" value="<?php echo $is_themeusers_exist; ?>">
    <input type="hidden" name="is_themeshop_exist" id="is_themeshop_exist" value="<?php echo $is_themeshop_exist; ?>">
    <script>
        layui.use(['form'], function() {
            var form = layui.form,
                layer = layui.layer
            //监听指定开关
            form.on('switch(switchWeapp)', function(data) {
                if (this.checked) {
                    var name = $(this).attr('data-name');
                    $(this).val(1);
                    ajax_submit(this, 'web', name,1);
                } else {
                    var name = $(this).attr('data-name');
                    $(this).val(0);
                    ajax_submit(this, 'web', name,-1);
                }
            });
            form.on('switch(switchTest)', function(data) {
                if (this.checked) {
                    var name = $(this).attr('data-name');
                    var type = $(this).attr('data-type');
                    $(this).val(1);
                    ajax_submit(this, type, name,1);
                } else {
                    var name = $(this).attr('data-name');
                    var type = $(this).attr('data-type');
                    $(this).val(0);
                    ajax_submit(this,type, name,0);
                }
            });
        });
        // 提交表单
        function  user_submit(obj, inc_type, name,value){
            layer.confirm('确认关闭用户中心？', {
                title: '',
                btn: ['确认','取消'] //按钮
            }, function(){
                layer.closeAll();
                ajax_submit(obj, inc_type, name,value)
            }, function(){
                layer.closeAll();
                return false;
            });
        }
        function ajax_submit(obj, inc_type, name,value){

            var _parent = parent;
            var lmenuid = $(obj).attr('data-lmenuid');
            var url = "<?php echo url('Index/switch_map', ['_ajax'=>1]); ?>";
            var syn_open_users = false; // 是否同步开启用户中心
            // 验证
            switch (name)
            {
                case 'shop_open':
                case 'pay_open':
                case 'users_open_release':
                case 'level_member_upgrade':
                    if (-1 < $.inArray(name, ['shop_open','pay_open']))
                    {
                        if(false == check_shop_open())
                        {
                            return false;
                        }
                    } else if (-1 < $.inArray(name, ['users_open_release','level_member_upgrade']))
                    {
                        if(false == check_users_open_release())
                        {
                            return false;
                        }
                    }

                    break;
            }
            // 标签调用按钮的显示与隐藏
            if (1 == value) {
                $('#guide_'+name).show();
            } else {
                $('#guide_'+name).hide();
            }
            if ('web_users_switch' == name ){
                if (value == 1){
                    $("#users_centre").removeClass('show-shade');
                } else{
                    $("#users_centre").addClass('show-shade');
                }
            }

            if (1 == $('#is_themeusers_exist').val()) {
                $('#is_themeusers_exist').val(0)
                loadmsg = '初始化中';
            } else if (1 == $('#is_themeshop_exist').val()) {
                $('#is_themeshop_exist').val(0)
                loadmsg = '初始化中';
            } else {
                loadmsg = '正在处理';
            }
            parent_layer_loading(loadmsg);

            $.ajax({
                type: "POST",
                url: url,
                data: {inc_type:inc_type,name:name,value:value,lmenuid:lmenuid},
                dataType: 'json',
                success: function (res) {
                    if(res.code == 1){
                        // 第一次模板同步下载
                        if ('web_users_switch' == name && 1 == res.data.is_syn) { // 用户中心模板下载
                            syn_theme_users(value,lmenuid);
                            return false;
                        } else if ('shop_open' == name && 1 == res.data.is_syn) { // 订单中心模板下载
                            syn_theme_shop(value,lmenuid);
                            return false;
                        } else {
                            _parent.layer.closeAll();
                            // 根据不同场景进行页面加载的处理
                            _parent.layer.msg(res.msg, {icon: 1, time: 1000}, function(){
                                if (1 == res.data.reload) {
                                    window.location.reload();
                                } else if (2 == res.data.reload) {
                                    top.window.location.reload();
                                }
                            });
                        }
                    }else{
                        if (1 == res.data.code) {
                            $('input[name="shop[shop_open]').removeAttr('checked');
                            $('input[name="shop[shop_open]').val(0);
                            $('input[name="shop[shop_open]').next().removeClass('layui-form-onswitch');
                            $('input[name="shop[shop_open]').next().html('<em>关闭</em><i></i>');
                            _parent.layer.closeAll();
                            _parent.layer.alert(res.msg, {btn: ['购买授权'], icon: 4, title:false}, function(){
                                _parent.layer.closeAll();
                                window.location.reload();
                                window.open('http://www.eyoucms.com/buy');
                            });
                        } else {
                            _parent.layer.closeAll();
                            _parent.layer.alert(res.msg, {icon: 2, title:false}, function(){
                                _parent.layer.closeAll();
                                window.location.reload();
                            });
                        }
                    }

                    // 控制顶部与左侧菜单的显示与隐藏
                    try{
                        if (1 == value) {
                            $('#'+lmenuid, window.parent.document).show();
                            if ('shop_open' == name) {
                                $('#Member_users_index', window.parent.document).show();
                            } else if ('web_users_switch' == name && 1 == $("input[name='shop[shop_open]']:checked").val()) {
                                $('#Shop_home', window.parent.document).show();
                            }
                        } else {
                            if (-1 < $.inArray(name, ['web_users_switch','web_language_switch','web_diyminipro_switch','shop_open','web_weapp_switch'])) {
                                $('#'+lmenuid, window.parent.document).hide();
                                if ('web_users_switch' == name) {
                                    $('#Shop_home', window.parent.document).hide();
                                }
                            }
                        }
                    }catch(e){}
                },
                error:function(){
                    _parent.layer.closeAll();
                    _parent.layer.alert(ey_unknown_error, {icon: 2, title:false}, function(){
                        _parent.layer.closeAll();
                        window.location.reload();
                    });
                }
            });
        }
        function tag_call(name)
        {
            $.ajax({
                type: "POST",
                url: "<?php echo url('System/ajax_tag_call', ['_ajax'=>1]); ?>",
                data: {name:name},
                dataType: 'json',
                success: function (res) {
                    if(res.code == 1){
                        //询问框
                        var confirm = layer.confirm(res.data.msg, {
                                title: false,
                                area: ['70%','80%'],
                                btn: ['关闭'] //按钮

                            }, function(){
                                layer.close(confirm);
                            }
                        );
                    }else{
                        layer.alert(res.msg, {icon: 2, title:false});
                    }
                },
                error:function(){
                    layer.alert(ey_unknown_error, {icon: 2, title:false});
                }
            });
        }

        //左侧菜单栏有二级菜单的type=2
        function gourl2(obj,type)
        {
            var leftmenu = $(obj).data('leftmenu');
            var href = $(obj).data('href');
            $('.eycms_cont_left .sub-menu a', window.parent.document).removeClass('on');
            $('.eycms_cont_left .sub-menu dl.jslist dt', window.parent.document).removeClass('on');

            if (2 == type) {
                $('#'+leftmenu+' dt', window.parent.document).addClass('on');
            } else {
                $('#'+leftmenu, window.parent.document).addClass('on');
            }
            window.location.href = href;
        }
        function check_users_open_release()
        {
            var obj = $('input[name="users[users_open_release]"]:checked');
            var is_online = $(obj).attr('data-is_online');
            if (1 == is_online) {
                var users_open_release = $(obj).val();
                if (1 == users_open_release && $(obj).attr('data-authortoken') == -1) {

                    $('input[name="users[users_open_release]"]').removeAttr('checked');
                    $('input[name="users[users_open_release]"]').val(0);
                    $('input[name="users[users_open_release]"]').next().removeClass('layui-form-onswitch');
                    $('input[name="users[users_open_release]"]').next().html('<em>关闭</em><i></i>');

                    var alert1 = layer.alert('资料上传功能只限于授权域名！', {
                        icon: 4,
                        title:false,
                        btn: ['购买授权']
                    }, function(){
                        window.open('http://www.eyoucms.com/buy');
                        layer.close(alert1);
                    });
                    return false;
                }
            }
            return true;
        }
        function check_shop_open()
        {
            var obj = $('input[name="shop[shop_open]"]:checked');
            var is_online = $(obj).attr('data-is_online');
            if (1 == is_online) {
                var shop_open = $(obj).val();
                if (1 == shop_open && $(obj).attr('data-authortoken') == -1) {

                    $('input[name="shop[shop_open]').removeAttr('checked');
                    $('input[name="shop[shop_open]').val(0);
                    $('input[name="shop[shop_open]').next().removeClass('layui-form-onswitch');
                    $('input[name="shop[shop_open]').next().html('<em>关闭</em><i></i>');

                    var alert1 = layer.alert('订单功能只限于授权域名！', {
                        icon: 4,
                        title:false,
                        btn: ['购买授权']
                    }, function(){
                        window.open('http://www.eyoucms.com/buy');
                        layer.close(alert1);
                    });
                    return false;
                }
            }
            return true;
        }
        // 订单模板初始化下载
        function syn_theme_shop(value,lmenuid)
        {
            $.ajax({
                type : 'get',
                url : "<?php echo url('Shop/ajax_syn_theme_shop', ['_ajax'=>1]); ?>",
                data : {},
                dataType : 'json',
                success : function(res){
                    parent.layer.closeAll();
                    if(res.code == 1){
                        parent.layer.msg(res.msg, {icon: 1, time: 1000});
                    }else{
                        var icon = 2;
                        if (res.data.icon) {icon = res.data.icon;}
                        parent.layer.alert(res.msg, {icon: icon, title:false}, function(){
                            parent.layer.closeAll();
                            window.location.reload();
                        });
                    }
                    // 控制顶部与左侧菜单的显示与隐藏
                    try{
                        if (1 == value) {
                            $('#Member_users_index', window.parent.document).show();
                            $('#'+lmenuid, window.parent.document).show();
                        }
                    }catch(e){}
                },
                error: function(e){
                    parent.layer.closeAll();
                    parent.layer.alert(ey_unknown_error, {icon: 2, title:false}, function(){
                        parent.layer.closeAll();
                        window.location.reload();
                    });
                }
            })
        }
        // 用户模板初始化下载
        function syn_theme_users(value,lmenuid)
        {
            $.ajax({
                type : 'get',
                url : "<?php echo url('Member/ajax_syn_theme_users', ['_ajax'=>1]); ?>",
                data : {},
                dataType : 'json',
                success : function(res){
                    parent.layer.closeAll();
                    if(res.code == 1){
                        parent.layer.msg(res.msg, {icon: 1, time: 1000});
                    }else{
                        parent.layer.alert(res.msg, {icon: 2, title:false}, function(){
                            parent.layer.closeAll();
                            window.location.reload();
                        });
                    }
                    // 控制顶部与左侧菜单的显示与隐藏
                    if (1 == value) {
                        $('#'+lmenuid, window.parent.document).show();
                    } else {
                        $('#'+lmenuid, window.parent.document).hide();
                    }
                },
                error: function(e){
                    parent.layer.closeAll();
                    parent.layer.alert(ey_unknown_error, {icon: 2, title:false}, function(){
                        parent.layer.closeAll();
                        window.location.reload();
                    });
                }
            })
        }
        function PayApiConfig(pay_id, title) {
            if (!pay_id) return false;
            var url = "<?php echo url('PayApi/open_pay_api_config'); ?>";
            //iframe窗
            var iframes = layer.open({
                type: 2,
                title: title,
                fixed: true,
                shadeClose: false,
                shade: 0.3,
                content: url + '&pay_id=' + pay_id
            });
            layer.full(iframes);
        }
        // 规格列表管理
        function SpecTempLate() {
            //iframe窗
            layer.open({
                type: 2,
                title: '规格模板库',
                shadeClose: false,
                maxmin: false, //开启最大化最小化按钮
                area: ['90%', '90%'],
                content: "<?php echo url('Shop/spec_template'); ?>"
            });
        }
        function UpPresetSpecData() {

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
