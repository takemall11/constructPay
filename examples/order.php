<?php
/**
 * Created by PhpStorm.
 * User: stbz
 * Date: 2020/6/17
 * Time: 4:00 PM
 */

require_once __DIR__ . '/../vendor/autoload.php';

use ConstructPay\Api\ConstructPay;

//date_default_timezone_set('PRC');
date_default_timezone_set('Asia/Shanghai');

//商户编号：105001257227241，商户名称：慧惠（徐州）供应链管理有限公司，
//门店编号：999930001507704，9位柜台号 ：088809157

// 生产参数
$appId = "SY5019"; //商户code
$appSecret = "999930001507704";//线上渠道编号
$smThreeSecret = "b1fddca5a6394f17ac48527bc5c718c2"; //sm3 key
$setSecretSM4 = "r48527fc7c718c28";//sm4 key
$payClient = new ConstructPay();
## 初始化配置
$payClient->setMrchCode('SY5019');
$payClient->setShopCode('SY5019100');
$payClient->setSecretSM3('b1fddca5a6394f17ac48527bc5c718c2');
$payClient->setSecretSM4('r48527fc7c718c28');
$payClient->setEncryptionTypeSM4('ecb');
$payClient->setHost('https://aty.huamaihome.com');
$payClient->setUrl('/ccb_equity_api_new/gateway/bizProcessApi');

// 下单接口
$param =
//    "head" => [
//        'bizCode' => "A0001",
//        'timestamp' => "20240718012310",
//    ],
     array(
        "mrchCode" => "SY5019",
        "shopCode" => "SY5019100",
        "payResultNoticeUrl" => "https://pay-test.nahuomall.com/notify/unionNotify",
        "shopOrderNumber" => "NH202404256314562196721124",
        "buyerMobile" => "13112255249",
        "shopOriginalPrice" => 100,
        "addCode" => "100010",
        "address" => "江苏省南京市",
        "goodsList" => array(
            array(
                "goodsOrderNumber" => "22234445564545646",
                "goodsCode" => "oLLD10OE0bZiUE_UUola5ecJPDLI",
                "goodsName" => "llllll",
                "shopGoodsOriginalPrice" => 11,
                "goodsCount" => 1
            )
        )
    )
;

// 下单
$response = $payClient->wechatMini->createOrder($param);

exit;
$param = [
    "head" => [
        'bizCode' => "A0004",
        'timestamp' => "20240718012310",
    ],
    'data' => [
        'shopOrderNumber' => "SY5001", //线上平台支付订单编号，支持批量查询，多个订单号以半角逗号分割，最多50个订单号
        'ccbPayOrderNumber' => "SY5001",//建行支付订单号
        'userActualPayPrice' => "SY5001",//用户实际支付金额，两位小数，单位：元
        'subsidyTotalAmount' => "SY5001",//补贴总金额，所有补贴商品的补贴金额合计，两位小数，单位：元
        'payType' => "SY5001", //0-建行生活app
        'payState' => "SY5001",//支付状态 2-支付成功，3-支付失败
        /**
         * 品类code，参考附录A、B表，空调品类会反馈具体核销资格品类编码，具体如下：
         * 空调1：A0401，
         * 空调2：A0402，
         * 空调3：A0403
         */
        'cateCode' => "SY5001",
        'goodsList' => [
            'goodsCode' => "SY5001", //平台商品编号，报送商务厅/商务局商品清单中企业商品编号
            'shopGoodsActualPayPrice' => "SY5001",//商品实际支付金额，两位小数，单位：元
            'subsidyAmount' => "SY5001",//商品补贴金额，两位小数，单位：元
        ],
    ]
];
//建行推送商户订单支付结果接口
//$response = $payClient->paymentResult->getPaymentResult($param);


//订单详情

$param = [
    "head" => [
        'bizCode' => "A0003",
        'timestamp' => "20240718012310",
    ],
    'data' => [
        'shopOrderNumber' => "SY5001", //线上平台支付订单编号，支持批量查询，多个订单号以半角逗号分割，最多50个订单号
    ]
];
// $response = $payClient->search->getInfo($param);
//退款
$param = [
    "head" => [
        'bizCode' => "A0002",
        'timestamp' => "20240718012310",
    ],
    'data' => [
        'shopRefundOrderNumber' => "SY5001",//线上平台退款订单号
        'shopOrderNumber' => "SY5001", //线上平台支付订单编号
        'ccbPayOrderNumber' => "SY5001", //建行支付订单号
        'refundAmount' => "SY5001", //退款金额
    ]
];

//$response = $payClient->refund->refund($param);


//订单取消
$param = [
    "head" => [
        'bizCode' => "A0005",
        'timestamp' => "20240718012310",
    ],
    'data' => [
        'shopOrderNumber' => "SY5001", //线上平台支付订单编号
    ]
];

//$response = $payClient->close->closeOrder($param);


//物流查询
//$param = [];
//$response = $supplyClient->order->setApi("/v2/logistic/firms")->get();


//3.6 购买人(顾客)渠道补贴余额查询接口
$param = [
    "head" => [
        'bizCode' => "A0008",
        'timestamp' => "20240718012310",
    ],
    'data' => [
        'mrchCode' => "SY5001", //商户code
        'buyerMobile' => "SY5001", //购买人手机号，需与建行生活app注册登录手机号一致
    ]
];

//$response = $payClient->subsidyBalance->subsidyBalanceInquiry($param);


//3.7建行支付对账单接口
$param = [
    "head" => [
        'bizCode' => "A0007",
        'timestamp' => "20240718012310",
    ],
    'data' => [
        'tradeDate' => "SY5001", //交易日期(yyyy-MM-dd)
        'mrchCode' => "SY5001", //商户code
        'pageNumber' => "SY5001", //页码
    ]
];

//$response = $payClient->billReconciliation->billReconciliation($param);


//3.9三方app跳转建行生活app链接签名接口
$param = [
    "head" => [
        'bizCode' => "A1000",
        'timestamp' => "20240718012310",
    ],
    'data' => [
        'mrchCode' => "SY5001", //商户code
        /**
         * 三方app手机系统渠道：示例：
         * 苏宁app跳转建行生活app，
         * iOS：SuningEMall；
         * 安卓：com.suning.mobile.ebuy
         */
        'ccbCH' => "SY5001",
    ]
];

//$response = $payClient->jumpBankAppSignature->getJumpBankAppSignature($param);

//3.10建行生活app跳转三方app链接签名接口
$param = [

        'mrchCode' => "SY5001", //商户code
        /**
         * 三方app手机系统渠道：示例：
         * 苏宁app跳转建行生活app
         * iOS：https://m.suning.com；
         * 安卓：suning://m.suning.com/indexy
         */
        'appInfo' => "SY5001",
];

$response = $payClient->jumpThirdAppSignature->getJumpThirdAppSignature($param);


//物流查询
//$param = [];
//$response = $supplyClient->order->setApi("/v2/logistic/firms")->get();

var_dump($response);
exit();