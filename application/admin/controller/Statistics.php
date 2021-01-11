<?php

namespace app\admin\controller;
use think\Db;
use think\Config;

// 数据统计
class Statistics extends Base {

    public function _initialize() {
        parent::_initialize();
        $this->language_access(); // 多语言功能操作权限
    }
    
    /**
     * 数据表列表
     */
    public function index()
    {
        // 近七日成交量成交额折线图数据
        $LineChartData = $this->GetLineChartData();
        $this->assign('DealNum', $LineChartData['DealNum']);
        $this->assign('DealAmount', $LineChartData['DealAmount']);

        // 起始时间
        $StartTime = $this->GetTime(6);
        $EndTime   = getTime();
        $this->assign('StartTime', $StartTime);
        $this->assign('EndTime', $EndTime);
        // 数据统计
        $CycletData = $this->GetTimeCycletData($StartTime, $EndTime);
        $this->assign('CycletData', $CycletData);

        // 商品销售榜
        $OrderSalesList = $this->GetOrderSalesList();
        $this->assign('OrderSalesList', $OrderSalesList);

        // 用户消费榜
        $UserConsumption = $this->GetUserConsumption();
        $this->assign('UserConsumption', $UserConsumption);

        return $this->fetch();
    }

    // 用户消费榜
    private function GetUserConsumption()
    {
        $where = [
            'order_status' => ['IN', [1, 2, 3]]
        ];
        $Return = Db::name('shop_order')->field('users_id, sum(order_total_amount+shipping_fee) as amount')->where($where)->group('users_id')->select();
        $users_id = get_arr_column($Return, 'users_id');
        $Return   = convert_arr_key($Return, 'users_id');

        $UsersData = Db::name('users')->field('users_id, username, nickname')->select();
        foreach ($UsersData as $key => $value) {
            $UsersData[$key]['amount'] = !empty($Return[$value['users_id']]['amount']) ? $Return[$value['users_id']]['amount'] : 0;
            $UsersData[$key]['nickname'] = !empty($UsersData[$key]['nickname']) ? $UsersData[$key]['nickname'] : $UsersData[$key]['username'];
        }

        // 以消费金额排序
        array_multisort(get_arr_column($UsersData, 'amount'), SORT_DESC, $UsersData);
        // 读取前十数据
        $UsersData = array_slice($UsersData, 0, 10);

        return $UsersData;
    }

    // 商品销售榜
    private function GetOrderSalesList()
    {
        $Return = Db::name('archives')
            ->field('aid, title, sales_num')
            ->order('sales_num desc')
            ->limit('0, 10')
            ->where('channel', 2)
            ->select();
        $aid  = get_arr_column($Return, 'aid');

        $where = [
            'a.product_id' => ['IN', $aid],
            'b.order_status' => ['IN', [1, 2, 3]],
        ];
        $Price = Db::name('shop_order_details')->alias('a')
            ->field('a.product_id, sum(a.product_price*a.num) as price, a.num')
            ->join('__SHOP_ORDER__ b', 'a.order_id = b.order_id', 'LEFT')
            ->where($where)
            ->group('product_id')
            ->select();
        $Price = convert_arr_key($Price, 'product_id');
        $array_new = get_archives_data($Return, 'aid');
        $Return = convert_arr_key($Return, 'aid');

        foreach ($Return as $key => $value) {
            $Return[$key]['sales_amount'] = !empty($Price[$value['aid']]['price']) ? $Price[$value['aid']]['price'] : 0;
            $Return[$key]['title'] = @msubstr($value['title'], 0, 25, '...');
            $Return[$key]['arcurl'] = get_arcurl($array_new[$value['aid']]);
            $Return[$key]['sales_num'] = !empty($Price[$value['aid']]['num']) ? $Price[$value['aid']]['num'] : 0;
        }
        return $Return;
    }

    // 获取时间周期内的指定数据
    public function GetTimeCycletData($Start = null, $End = null)
    {
        $param = input('param.');
        if (0 != $param['Year']) {
            $param['Start'] = strtotime("-0 year -{$param['Year']} month -0 day");
            $param['End']   = getTime();
        } else {
            if (empty($Start) || empty($End)) {
                $param['Start'] = strtotime($param['StartNew']);
                $param['End']   = strtotime($param['EndNew']);
            } else {
                $param = [
                    'Start' => $Start,
                    'End'   => $End,
                ];
            }
        }

        // 用户查询条件
        $Uwhere = [
            'reg_time' => ['between', [$param['Start'], $param['End']]]
        ];

        // 商品查询条件
        $Awhere = [
            'channel'  => 2,
            'add_time' => ['between', [$param['Start'], $param['End']]]
        ];

        // 商品查询条件
        $Swhere = [
            'add_time' => ['between', [$param['Start'], $param['End']]]
        ];

        // 订单查询条件
        $Owhere = [
            'order_status' => ['IN', [1, 2, 3]],
            'add_time' => ['between', [$param['Start'], $param['End']]]
        ];
        // 查询订单数据
        $Result = $this->GetTimeWhereData($Owhere);

        // 充值查询条件
        $Mwhere = [
            'cause' => Config::get('global.pay_cause_type_arr')[1],
            'cause_type' => 1,
            'status' => 3,
            'add_time' => ['between', [$param['Start'], $param['End']]]
        ];
        
        $Return = [
            // 用户人数
            'UsersNum' => Db::name('users')->where($Uwhere)->count(),
            // 付款订单数
            'PayOrderNum' => $Result['deal_num'],
            // 订单销售额
            'OrderSales' => $Result['deal_amount'],
            // 商品数
            'ProductNum' => Db::name('archives')->where($Awhere)->count(),
            // 消费人数
            'OrderUsersNum' => Db::name('shop_order')->where($Swhere)->group('users_id')->count(),
            // 充值金额
            'UsersRecharge' => Db::name('users_money')->where($Mwhere)->sum('money'),
            // 返回查询时间
            'Start' => date("Y-m-d H:i:s", $param['Start']),
            'End' => date("Y-m-d H:i:s", $param['End'])
        ];

        if (IS_AJAX_POST) {
            $this->success('查询成功！', null, $Return);
        } else {
            return $Return;
        }
    }

    // 近七日成交量成交额折线图数据    
    private function GetLineChartData()
    {
        /*七日内每日起始结束时间戳*/
        $Time = [
            // 当天
            'ToDaysStart' => strtotime(date("Y-m-d"),time()),
            'ToDaysEnd' => getTime(),
            // 昨天
            'YesterDaysStart' => $this->GetTime(1),
            'YesterDaysEnd' => $this->GetTime(1) + 86399,
            // 前天
            'AgoDaysStart' => $this->GetTime(2),
            'AgoDaysEnd' => $this->GetTime(2) + 86399,
            // 三天前
            'ThreeDaysAgoStart' => $this->GetTime(3),
            'ThreeDaysAgoEnd' => $this->GetTime(3) + 86399,
            // 四天前
            'FourDaysAgoStart' => $this->GetTime(4),
            'FourDaysAgoEnd' => $this->GetTime(4) + 86399,
            // 五天前
            'FiveDaysAgoStart' => $this->GetTime(5),
            'FiveDaysAgoEnd' => $this->GetTime(5) + 86399,
            // 六天前
            'SixDaysAgoStart' => $this->GetTime(6),
            'SixDaysAgoEnd' => $this->GetTime(6) + 86399,
        ];
        /* END */

        $where['order_status'] = ['IN', [1, 2, 3]];
        // 六天前
        $where['add_time']  = ['between', [$Time['SixDaysAgoStart'], $Time['SixDaysAgoEnd']]];
        $Six = $this->GetTimeWhereData($where);
        $Six['deal_amount'] = !empty($Six['deal_amount']) ? $Six['deal_amount'] : 0;
        // 五天前
        $where['add_time']  = ['between', [$Time['FiveDaysAgoStart'], $Time['FiveDaysAgoEnd']]];
        $Five = $this->GetTimeWhereData($where);
        $Five['deal_amount'] = !empty($Five['deal_amount']) ? $Five['deal_amount'] : 0;
        // 四天前
        $where['add_time']  = ['between', [$Time['FourDaysAgoStart'], $Time['FourDaysAgoEnd']]];
        $Four = $this->GetTimeWhereData($where);
        $Four['deal_amount'] = !empty($Four['deal_amount']) ? $Four['deal_amount'] : 0;
        // 三天前
        $where['add_time']  = ['between', [$Time['ThreeDaysAgoStart'], $Time['ThreeDaysAgoEnd']]];
        $Three = $this->GetTimeWhereData($where);
        $Three['deal_amount'] = !empty($Three['deal_amount']) ? $Three['deal_amount'] : 0;
        // 前天
        $where['add_time']  = ['between', [$Time['AgoDaysStart'], $Time['AgoDaysEnd']]];
        $Ago = $this->GetTimeWhereData($where);
        $Ago['deal_amount'] = !empty($Ago['deal_amount']) ? $Ago['deal_amount'] : 0;
        // 昨天
        $where['add_time']  = ['between', [$Time['YesterDaysStart'], $Time['YesterDaysEnd']]];
        $Yester = $this->GetTimeWhereData($where);
        $Yester['deal_amount'] = !empty($Yester['deal_amount']) ? $Yester['deal_amount'] : 0;
        // 当天
        $where['add_time']  = ['between', [$Time['ToDaysStart'], $Time['ToDaysEnd']]];
        $ToDays = $this->GetTimeWhereData($where);
        $ToDays['deal_amount'] = !empty($ToDays['deal_amount']) ? $ToDays['deal_amount'] : 0;

        $Return = [
            'DealAmount' => [$Six['deal_amount'], $Five['deal_amount'], $Four['deal_amount'], $Three['deal_amount'], $Ago['deal_amount'], $Yester['deal_amount'], $ToDays['deal_amount']],

            'DealNum' => [$Six['deal_num'], $Five['deal_num'], $Four['deal_num'], $Three['deal_num'], $Ago['deal_num'], $Yester['deal_num'], $ToDays['deal_num']]
        ];

        return $Return;
    }

    // 获取指定日期下的数据
    private function GetTimeWhereData($where = [])
    {
        $field = 'sum(order_total_amount+shipping_fee) as deal_amount, count(users_id) as deal_num';
        $Return = Db::name('shop_order')->field($field)->where($where)->select();

        $Return[0]['deal_amount'] = $Return[0]['deal_amount'] ? $Return[0]['deal_amount'] : 0;
        $Return[0]['deal_num'] = $Return[0]['deal_num'] ? $Return[0]['deal_num'] : 0;
        return $Return[0];
    }

    // 获取指定日期时间戳
    private function GetTime($num = null)
    {
        $time = strtotime(date("Y-m-d", strtotime("-{$num} day")));
        return $time;
    }

}