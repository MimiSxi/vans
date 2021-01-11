<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:49:"./application/admin/template/statistics\index.htm";i:1583307770;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\layout.htm";i:1596507477;s:76:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\shop\left.htm";i:1600738846;s:80:"C:\software\EyouCMS-V1.4.9-UTF8-SP2\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
<script type="text/javascript" src="/public/plugins/Echarts/echarts.min.js"></script>
<link href="/public/static/admin/css/main_new.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">

<body style="overflow: auto; cursor: default; -moz-user-select: inherit;background-color:#F4F4F4; padding: 20px; ">
	<div id="append_parent"></div>
	<div id="ajaxwaitid"></div>
	<div class="sidebar-second ">
    <ul>
        <li class="sidebar-second-title">商城中心</li>
        <li>
            <a <?php if('Statistics' == CONTROLLER_NAME): ?>class="active"<?php endif; ?> href='<?php echo url("Statistics/index"); ?>'>数据统计</a>
        </li>
        <li>
            <a <?php if('Shop' == CONTROLLER_NAME and in_array(ACTION_NAME, ['index', 'order_details'])): ?>class="active"<?php endif; ?> href='<?php echo url("Shop/index"); ?>'>所有订单</a>
        </li>
        <li>
            <a <?php if('ShopProduct' == CONTROLLER_NAME and in_array(ACTION_NAME, ['index', 'add', 'edit'])): ?>class="active"<?php endif; ?> href='<?php echo url("ShopProduct/index"); ?>'>商品管理</a>
        </li>
        <li>
            <a <?php if('ShopProduct' == CONTROLLER_NAME and in_array(ACTION_NAME, ['attrlist_index', 'attribute_index'])): ?>class="active"<?php endif; ?> href='<?php echo url("ShopProduct/attrlist_index"); ?>'>商品参数</a>
        </li>
        <li>
            <a <?php if('Shop' == CONTROLLER_NAME and 'conf' == ACTION_NAME): ?>class="active"<?php endif; ?> href='<?php echo url("Shop/conf"); ?>'>商城配置</a>
        </li>
        <!-- <li>
            <a <?php if('Member' == CONTROLLER_NAME): ?>class="active"<?php endif; ?> href='<?php echo url("Member/money_index"); ?>'>财务明细</a>
        </li> -->
    </ul>
</div>
	<div class="page" style="min-width:auto;margin-left:98px;">
		<div class="flexigrid">
			<div class="mDiv">
				<div class="ftitle">
					<h3>数据统计</h3>
				</div>
			</div>
			<div class="list-stats">
				<div class="stats-con">
					开始日期 &nbsp;<input type="text" class="input-txt" id="add_time" name="add_time" value="<?php echo date('Y-m-d H:i:s',$StartTime); ?>" autocomplete="off">
					结束日期 &nbsp;<input type="text" class="input-txt" id="add_time2" name="add_time" value="<?php echo date('Y-m-d H:i:s',$EndTime); ?>" autocomplete="off">
					&nbsp; &nbsp;
					<a href="javascript:void(0);" onclick="TimeProcessing(this, null, null, 1);">一个月</a>
					&nbsp; &nbsp;
					<a href="javascript:void(0);" onclick="TimeProcessing(this, null, null, 3);">三个月</a>
					&nbsp; &nbsp;
					<a href="javascript:void(0);" onclick="TimeProcessing(this, null, null, 6);">六个月</a>
					&nbsp; &nbsp;
					<a href="javascript:void(0);" onclick="TimeProcessing(this, null, null, 9);">九个月</a>
					&nbsp; &nbsp;
					<a href="javascript:void(0);" onclick="TimeProcessing(this, null, null, 12);">一年</a>
				</div>
				<script type="text/javascript">
					layui.use('laydate', function() {
					  	var laydate = layui.laydate;
					  	laydate.render({
						  	elem: '#add_time', type: 'datetime',
						  	change: function(value, date, endDate) {
						  		// TimeProcessing(value);
						  	},
						  	done: function(value, date, endDate){
						    	TimeProcessing(null, value);
						  	}
						});

						laydate.render({
						  	elem: '#add_time2', type: 'datetime',
						  	change: function(value, date, endDate) {
						  		// TimeProcessing(null, null, value);
						  	},
						  	done: function(value, date, endDate){
						    	TimeProcessing(null, null, value);
						  	}
						});
					});

					// 处理时间并查询数据
					function TimeProcessing(obj, Start, End ,Year) {
						Start = Start ? Start : $('#add_time').val();
						End   = End ? End : $('#add_time2').val();
						if (!Year && Start && End) {
							if (End < Start) {
								$('body').click();
								layer.msg('结束日期不可早于开始日期', {icon: 2,time: 2000});
								return false;
							}
							Year = 0;
						}
						if ((!End || !Start) && !Year) return false;
						
						var Url = "<?php echo url('Statistics/GetTimeCycletData'); ?>";
						$.ajax({
                            url  : Url,
                            type : 'post',
                            data : {StartNew:Start, EndNew:End, Year:Year, _ajax:1},
                            dataType : 'json',
                            success : function(res){
                                layer.closeAll();
                                $('#UsersNum').empty().html(res.data.UsersNum);
                                $('#PayOrderNum').empty().html(res.data.PayOrderNum);
                                $('#OrderSales').empty().html(res.data.OrderSales);
                                $('#ProductNum').empty().html(res.data.ProductNum);
                                $('#OrderUsersNum').empty().html(res.data.OrderUsersNum);
                                $('#UsersRecharge').empty().html(res.data.UsersRecharge);
                                if (res.data.Start) $('#add_time').val(res.data.Start);
                                if (res.data.End) $('#add_time2').val(res.data.End);
                                if (obj) {
	                                $('.stats-con a').css('color', '');
	                                $(obj).css('color', 'red');
                                }
                            }
                        });
					}
				</script>

				<ul class="stats2">
					<li>
						<div class="card_box">
							<div class="car_box_l fl">
								<i class="card-icon fa fa-jpy"></i>
							</div>
							<div class="car_box_r fl">
								<h1>用户数量</h1>
								<p><cite id="UsersNum"><?php echo $CycletData['UsersNum']; ?></cite></p>
							</div>
						</div>
					</li>
					<li>
						<div class="card_box">
							<div class="car_box_l fl">
								<i class="card-icon fa fa-list-alt"></i>
							</div>
							<div class="car_box_r fl">
								<h1>付款订单数</h1>
								<p><cite id="PayOrderNum"><?php echo $CycletData['PayOrderNum']; ?></cite></p>
							</div>
						</div>
					</li>
					<li>
						<div class="card_box">
							<div class="car_box_l fl">
								<i class="card-icon fa fa-users"></i>
							</div>
							<div class="car_box_r fl">
								<h1>商品数量</h1>
								<p><cite id="ProductNum"><?php echo $CycletData['ProductNum']; ?></cite></p>
							</div>
						</div>
					</li>
					<li>
						<div class="card_box">
							<div class="car_box_l fl">
								<i class="card-icon fa fa-check-circle-o"></i>
							</div>
							<div class="car_box_r fl">
								<h1>消费人数</h1>
								<p><cite id="OrderUsersNum"><?php echo $CycletData['OrderUsersNum']; ?></cite></p>
							</div>
						</div>
					</li>
					<li>
						<div class="card_box">
							<div class="car_box_l fl">
								<i class="card-icon fa fa-check-circle-o"></i>
							</div>
							<div class="car_box_r fl">
								<h1>付款订单总额</h1>
								<p><cite id="OrderSales"><?php echo $CycletData['OrderSales']; ?></cite></p>
							</div>
						</div>
					</li>
					<li>
						<div class="card_box">
							<div class="car_box_l fl">
								<i class="card-icon fa fa-check-circle-o"></i>
							</div>
							<div class="car_box_r fl">
								<h1>用户充值总额</h1>
								<p><cite id="UsersRecharge"><?php echo $CycletData['UsersRecharge']; ?></cite></p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="page mt20" style="min-width:auto;margin-left:98px;">
		<div class="flexigrid">
			<div class="mDiv">
				<div class="ftitle">
					<h3>近七日交易走势</h3>
				</div>
			</div>
			<div class="list-stats">
				<div class="stats-con">
					<div id="stats-box" style="width:90%;height:400px;margin: 0 auto;"></div>

				</div>
			</div>
		</div>
	</div>

	<div class="stats-content" style="min-width:auto;margin-left:98px;width:calc(100% - 98px); ">
		<div class="stats-content-l fl">
			<div class="flexigrid">
				<div class="mDiv">
					<div class="ftitle">
						<h3>商品销售榜</h3>
					</div>
				</div>
				<div class="list-stats">
					<div class="stats-con">
						<table border="" cellspacing="" cellpadding="" style="width: 100%;">
							<thead>
								<tr>
									<th class="w100 tc">
										<div>排名</div>
									</th>
									<th class="">
										<div>商品</div>
									</th>
									<th class="w100 tc">
										<div>销售</div>
									</th>
									<th class="w100 tc">
										<div>销售额</div>
									</th>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($OrderSalesList) || $OrderSalesList instanceof \think\Collection || $OrderSalesList instanceof \think\Paginator): $i = 0; $__LIST__ = $OrderSalesList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
									<tr>
										<td>
											<div class="tc">
												<?php if($i < '4'): ?>
													<img src="/public/static/admin/images/0<?php echo $i; ?>.png">
												<?php else: ?>
													<?php echo $i; endif; ?>
											</div>
										</td>
										<td>
											<div>
												<a href="<?php echo url('ShopProduct/edit', ['id'=>$vo['aid']]); ?>"><?php echo $vo['title']; ?></a>
												<a href="<?php echo $vo['arcurl']; ?>" target="_blank" style="color: red;">[预览]</a>
											</div>
										</td>
										<td>
											<div class="tc"><?php echo $vo['sales_num']; ?></div>
										</td>
										<td>
											<div class="tc"><?php echo $vo['sales_amount']; ?></div>
										</td>
									</tr>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
		<div class="stats-content-r fr">
			<div class="flexigrid">
				<div class="mDiv">
					<div class="ftitle">
						<h3>用户消费榜</h3>
					</div>
				</div>
				<div class="list-stats">
					<div class="stats-con">
						<table border="" cellspacing="" cellpadding="" style="width: 100%;">
							<thead>
								<tr>
									<th class="w100 tc">
										<div>排名</div>
									</th>
									<th class="">
										<div>用户昵称</div>
									</th>
									<th class="w100 tc">
										<div>实际消费金额</div>
									</th>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($UserConsumption) || $UserConsumption instanceof \think\Collection || $UserConsumption instanceof \think\Paginator): $i = 0; $__LIST__ = $UserConsumption;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
									<tr>
										<td>
											<div class="tc"><?php if($i < '4'): ?><img src="/public/static/admin/images/0<?php echo $i; ?>.png"><?php else: ?><?php echo $i; endif; ?></div>
										</td>
										<td>
											<div><?php echo $vo['nickname']; ?></div>
										</td>
										<td>
											<div class="tc"><?php echo $vo['amount']; ?></div>
										</td>
									</tr>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function getBeforeDate(n) {
	        var n = n;
	        var d = new Date();
	        var year = d.getFullYear();
	        var mon = d.getMonth() + 1;
	        var day = d.getDate();
	        if(day <= n) {
	            if(mon > 1) {
	                mon = mon - 1;
	            } else {
	                year = year - 1;
	                mon = 12;
	            }
	        }
	        d.setDate(d.getDate() - n);
	        year = d.getFullYear();
	        mon = d.getMonth() + 1;
	        day = d.getDate();
	        s = year + "-" + (mon < 10 ? ('0' + mon) : mon) + "-" + (day < 10 ? ('0' + day) : day);
	        return s;
	    }

		// 基于准备好的dom，初始化echarts实例
		var myChart = echarts.init(document.getElementById('stats-box'));

		// 指定图表的配置项和数据
		var option = {
			color: ['#3398DB', '#6be6c1'],
			title: {
				text: ''
			},
			tooltip: {
				trigger: 'axis',
			},
			legend: {
				data: ['成交量', '成交额']
			},
			grid: {
				left: '3%',
				right: '4%',
				bottom: '3%',
				containLabel: true
			},
			toolbox: {
				feature: {
					saveAsImage: {}
				}
			},
			xAxis: {
				type: 'category',
				boundaryGap: false,
				data: [getBeforeDate(6), getBeforeDate(5), getBeforeDate(4), getBeforeDate(3), getBeforeDate(2), getBeforeDate(1), getBeforeDate(0)],
				splitLine: {
					show: true,
					lineStyle: {
						color: ['#eee'],
						width: 1,
						type: 'solid'
					}
				}
			},
			yAxis: {
				type: 'value',
				splitLine: {
					show: true,
					lineStyle: {
						color: ['#eee'],
						width: 1,
						type: 'solid'
					}
				}
			},
			series: [{
					name: '成交量',
					type: 'line',
					data: ['<?php echo $DealNum['0']; ?>','<?php echo $DealNum['1']; ?>','<?php echo $DealNum['2']; ?>','<?php echo $DealNum['3']; ?>','<?php echo $DealNum['4']; ?>','<?php echo $DealNum['5']; ?>','<?php echo $DealNum['6']; ?>'],
				},
				{
					name: '成交额',
					type: 'line',
					data: ['<?php echo $DealAmount['0']; ?>','<?php echo $DealAmount['1']; ?>','<?php echo $DealAmount['2']; ?>','<?php echo $DealAmount['3']; ?>','<?php echo $DealAmount['4']; ?>','<?php echo $DealAmount['5']; ?>','<?php echo $DealAmount['6']; ?>'],
				},
			]
		};

		// 使用刚指定的配置项和数据显示图表。
		myChart.setOption(option);
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
</body>
