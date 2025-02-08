<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace ConstructPay\Api\Constants;

use Hyperf\Constants\AbstractConstants;
use Hyperf\Constants\Annotation\Constants;

#[Constants]
class ConstructErrorCode extends AbstractConstants
{
    public const SERVER_ERROR = 500;

    /**
     * @Message("订单信息入参不能为空")
     */
    public const ORDER_INFO_REQUIRED = 10001;

    /**
     * @Message("商户code不能为空")
     */
    public const MERCHANT_CODE_REQUIRED = 10002;

    /**
     * @Message("门店编号不能为空")
     */
    public const STORE_CODE_REQUIRED = 10003;

    /**
     * @Message("支付结果通知地址不能为空")
     */
    public const PAYMENT_NOTIFICATION_URL_REQUIRED = 10004;

    /**
     * @Message("支付结果通知地址不是合法的url")
     */
    public const PAYMENT_NOTIFICATION_URL_INVALID = 10005;

    /**
     * @Message("门店销售人员工号不能为空")
     */
    public const STORE_STAFF_ID_REQUIRED = 10006;

    /**
     * @Message("门店订单号不能为空")
     */
    public const STORE_ORDER_NO_REQUIRED = 10007;

    /**
     * @Message("购买人手机号不能为空")
     */
    public const BUYER_PHONE_REQUIRED = 10008;

    /**
     * @Message("购买人手机号格式不正确")
     */
    public const BUYER_PHONE_INVALID = 10009;

    /**
     * @Message("门店订单实际支付金额不能为空")
     */
    public const STORE_ORDER_ACTUAL_PAYMENT_REQUIRED = 10011;


    /**
     * @Message("门店订单实际支付金额必须为大于0的数字")
     */
    public const STORE_ORDER_ACTUAL_PAYMENT_INVALID = 10012;

    /**
     * @Message("门店订单实际支付金额必须为大于1元")
     */
    public const STORE_ORDER_ACTUAL_PAYMENT_MIN_INVALID = 10013;

    /**
     * @Message("门店订单优惠后金额不能为空")
     */
    public const STORE_ORDER_DISCOUNTED_AMOUNT_REQUIRED = 10014;

    /**
     * @Message("门店订单优惠后金额必须为大于0的数字")
     */
    public const STORE_ORDER_DISCOUNTED_AMOUNT_INVALID = 10015;

    /**
     * @Message("门店订单优惠后金额必须为大于1元")
     */
    public const STORE_ORDER_DISCOUNTED_AMOUNT_MIN_INVALID = 10016;

    /**
     * @Message("补贴总金额不能为空")
     */
    public const TOTAL_SUBSIDY_AMOUNT_REQUIRED = 10017;

    /**
     * @Message("补贴总金额必须为大于0的数字")
     */
    public const TOTAL_SUBSIDY_AMOUNT_INVALID = 10018;

    /**
     * @Message("补贴总金额必须为大于1元")
     */
    public const TOTAL_SUBSIDY_AMOUNT_MIN_INVALID = 10019;

    /**
     * @Message("商品明细列表不能为空")
     */
    public const PRODUCT_DETAIL_LIST_REQUIRED = 10020;

    /**
     * @Message("商户code非法")
     */
    public const MERCHANT_CODE_INVALID = 10021;

    /**
     * @Message("商品编码不能为空")
     */
    public const PRODUCT_CODE_REQUIRED = 10022;

    /**
     * @Message("商品名称不能为空")
     */
    public const PRODUCT_NAME_REQUIRED = 10023;

    /**
     * @Message("商品数量不能为空")
     */
    public const PRODUCT_QUANTITY_REQUIRED = 10024;

    /**
     * @Message("商品数量必须大于0")
     */
    public const PRODUCT_QUANTITY_INVALID = 10025;

    /**
     * @Message("商品实际支付金额不能为空")
     */
    public const PRODUCT_ACTUAL_PAYMENT_REQUIRED = 10026;

    /**
     * @Message("商品门店优惠后金额不能为空")
     */
    public const PRODUCT_DISCOUNTED_AMOUNT_REQUIRED = 10027;

    /**
     * @Message("商品补贴金额不能为空")
     */
    public const PRODUCT_SUBSIDY_AMOUNT_REQUIRED = 10028;

    /**
     * @Message("该购买人手机号购买国家补贴商品品类超过最大购买数量1台")
     */
    public const BUYER_PHONE_EXCEEDS_MAX_PURCHASE = 10029;

    /**
     * @Message("商品补贴金额不等于该商品政府补贴额度")
     */
    public const PRODUCT_SUBSIDY_AMOUNT_MISMATCH = 10030;

    /**
     * @Message("为非补贴商品，商品补贴金额必须为0")
     */
    public const NON_SUBSIDY_PRODUCT_SUBSIDY_INVALID = 10031;

    /**
     * @Message("此商品实际支付金额不等于（商品平台优惠后成交价-商品补贴金额）")
     */
    public const PRODUCT_ACTUAL_PAYMENT_MISMATCH = 10032;

    /**
     * @Message("此订单中没有政府补贴的商品")
     */
    public const ORDER_NO_GOVERNMENT_SUBSIDY_PRODUCTS = 10033;

    /**
     * @Message("此订单中所有补贴商品的政府补贴累计金额不等于订单的补贴总金额")
     */
    public const ORDER_SUBSIDY_AMOUNT_MISMATCH = 10034;

    /**
     * @Message("订单实际支付总金额不等于（商品平台优惠后成交价-订单补贴总金额）")
     */
    public const ORDER_ACTUAL_PAYMENT_MISMATCH = 10035;

    /**
     * @Message("订单实际支付总金额不等于所有商品实际支付金额累计总金额")
     */
    public const ORDER_ACTUAL_PAYMENT_SUM_MISMATCH = 10036;

    /**
     * @Message("系统监测当前门店存在风险行为，无法参与活动！")
     */
    public const STORE_RISK_BEHAVIOR_DETECTED = 10037;

    /**
     * @Message("该购买人手机号已经超过最大累计江苏补贴金额")
     */
    public const BUYER_PHONE_EXCEEDS_MAX_JIANGSU_SUBSIDY = 10038;

    /**
     * @Message("活动没有配置")
     */
    public const ACTIVITY_NOT_CONFIGURED = 10039;

    /**
     * @Message("活动总补贴额度没有配置")
     */
    public const ACTIVITY_TOTAL_SUBSIDY_AMOUNT_NOT_CONFIGURED = 10040;

    /**
     * @Message("活动总补贴额度必须为大于0的数字")
     */
    public const ACTIVITY_TOTAL_SUBSIDY_AMOUNT_INVALID = 10041;

    /**
     * @Message("活动补贴总额度已用完")
     */
    public const ACTIVITY_SUBSIDY_BUDGET_EXHAUSTED = 10042;

    /**
     * @Message("门店销售单号已存在，请核实后再输入")
     */
    public const STORE_SALE_ORDER_NO_EXISTS = 10043;

    /**
     * @Message("商品补贴活动备案价不能为空")
     */
    public const PRODUCT_SUBSIDY_CATALOG_PRICE_REQUIRED = 10044;

    /**
     * @Message("商品补贴活动备案价必须为大于0的数字")
     */
    public const PRODUCT_SUBSIDY_CATALOG_PRICE_INVALID = 10045;

    /**
     * @Message("商品补贴活动备案价必须为大于1元")
     */
    public const PRODUCT_SUBSIDY_CATALOG_PRICE_MIN_INVALID = 10046;

    /**
     * @Message("商品门店单价不能高于活动备案价")
     */
    public const PRODUCT_STORE_PRICE_EXCEEDS_CATALOG_PRICE = 10047;

    /**
     * @Message("请勿重复操作")
     */
    public const DUPLICATE_OPERATION = 10048;

    /**
     * @Message("该购买人手机号已经超过最大累计国家补贴金额")
     */
    public const BUYER_PHONE_EXCEEDS_MAX_NATIONAL_SUBSIDY = 10050;

    /**
     * @Message("商品行订单号不能为空")
     */
    public const PRODUCT_LINE_ORDER_NO_REQUIRED = 10051;

    /**
     * @Message("999开头的门店商户号必须是15个字符")
     */
    public const MERCHANT_CODE_999_INVALID_LENGTH = 10052;

    /**
     * @Message("999开头的门店商户号含有空格")
     */
    public const MERCHANT_CODE_999_CONTAINS_SPACE = 10053;

    /**
     * @Message("105开头的支付商户号必须是15个字符")
     */
    public const MERCHANT_CODE_105_INVALID_LENGTH = 10054;

    /**
     * @Message("105开头的支付商户号含有空格")
     */
    public const MERCHANT_CODE_105_CONTAINS_SPACE = 10055;

    /**
     * @Message("柜台号必须是9个字符")
     */
    public const COUNTER_NO_INVALID_LENGTH = 10056;

    /**
     * @Message("柜台号含有空格")
     */
    public const COUNTER_NO_CONTAINS_SPACE = 10057;

    /**
     * @Message("商户公钥必须是30个字符")
     */
    public const MERCHANT_PUBLIC_KEY_INVALID_LENGTH = 10058;

    /**
     * @Message("商户公钥含有空格")
     */
    public const MERCHANT_PUBLIC_KEY_CONTAINS_SPACE = 10059;

    /**
     * @Message("购买人暂未报名，请引导客户前往建行生活APP申请补贴~")
     */
    public const BUYER_NOT_REGISTERED_FOR_SUBSIDY = 10060;

    /**
     * @Message("该顾客实名认证信息缺失，没有身份证号")
     */
    public const BUYER_IDENTITY_INFO_MISSING = 10061;

    /**
     * @Message("该用户还没有申领过此商品的国家补贴资格，请引导顾客申领此商品的国家补贴资格")
     */
    public const BUYER_NOT_CLAIMED_SUBSIDY_QUALIFICATION = 10062;

    /**
     * @Message("活动补贴总额度已用完")
     */
    public const ACTIVITY_SUBSIDY_BUDGET_EXHAUSTED_AGAIN = 10063;

    /**
     * @Message("门店支付配置不存在")
     */
    public const STORE_PAYMENT_CONFIG_NOT_FOUND = 10064;

    /**
     * @Message("分行id必须是320000000或者322000000")
     */
    public const BRANCH_ID_INVALID = 10065;

    /**
     * @Message("一个订单只能购买一件商品")
     */
    public const ORDER_ONE_PRODUCT_ONLY = 10070;

    /**
     * @Message("商品数量不能为空或者0")
     */
    public const PRODUCT_QUANTITY_REQUIRED_OR_ZERO = 10071;

    /**
     * @Message("一个订单只能购买商品数量为1")
     */
    public const ORDER_PRODUCT_QUANTITY_MUST_BE_ONE = 10072;

    /**
     * @Message("收货地区编码不能为空")
     */
    public const RECEIVING_AREA_CODE_REQUIRED = 10073;

    /**
     * @Message("收货地址不能为空")
     */
    public const RECEIVING_ADDRESS_REQUIRED = 10074;

    /**
     * @Message("收货地区编码不是数字")
     */
    public const RECEIVING_AREA_CODE_NOT_NUMERIC = 10082;

    /**
     * @Message("收货地区编码必须是6位的数字")
     */
    public const RECEIVING_AREA_CODE_INVALID_LENGTH = 10083;



    /**
     * @Message("退款信息参数不能为空")
     */
    public const REFUND_INFO_REQUIRED = 20001;

    /**
     * @Message("门店退款订单号不能为空")
     */
    public const STORE_REFUND_ORDER_NO_REQUIRED = 20002;

    /**
     * @Message("门店支付订单编号不能为空")
     */
    public const STORE_PAYMENT_ORDER_NO_REQUIRED = 20003;

    /**
     * @Message("建行支付订单号不能为空")
     */
    public const CBC_PAYMENT_ORDER_NO_REQUIRED = 20004;

    /**
     * @Message("退款金额不能为空")
     */
    public const REFUND_AMOUNT_REQUIRED = 20005;

    /**
     * @Message("退款金额必须大于0")
     */
    public const REFUND_AMOUNT_INVALID = 20052;

    /**
     * @Message("未查询到订单")
     */
    public const ORDER_NOT_FOUND = 20006;

    /**
     * @Message("订单状态为空")
     */
    public const ORDER_STATUS_REQUIRED = 20007;

    /**
     * @Message("订单的顾客实际订单金额没有，请联系江苏建行客服")
     */
    public const ORDER_ACTUAL_AMOUNT_MISSING = 20008;

    /**
     * @Message("订单支付方式为空")
     */
    public const ORDER_PAYMENT_METHOD_REQUIRED = 20009;

    /**
     * @Message("订单支付方式非法")
     */
    public const ORDER_PAYMENT_METHOD_INVALID = 20010;

    /**
     * @Message("订单全额退款金额不能大于顾客实际订单金额")
     */
    public const FULL_REFUND_AMOUNT_EXCEEDS_ACTUAL = 20011;

    /**
     * @Message("此笔支付订单处于退款中，但是门店退款订单号不存在，退款失败")
     */
    public const REFUND_IN_PROGRESS_NO_STORE_REFUND_ORDER_NO = 20013;

    /**
     * @Message("退款中，请联系江苏建行客服确认")
     */
    public const REFUND_IN_PROGRESS = 20014;

    /**
     * @Message("此订单当前支付状态不能退款，请联系江苏建行客服")
     */
    public const ORDER_STATUS_CANNOT_REFUND = 20015;

    /**
     * @Message("支付类型为空")
     */
    public const PAYMENT_TYPE_REQUIRED = 20016;

    /**
     * @Message("退款处理中，请稍后再试")
     */
    public const REFUND_PROCESSING = 20018;

    /**
     * @Message("退款失败，请联系江苏建行客服")
     */
    public const REFUND_FAILED = 20019;

    /**
     * @Message("顾客正在退款，请稍后再试")
     */
    public const CUSTOMER_REFUND_IN_PROGRESS = 20020;

    /**
     * @Message("商户的建行账户配置信息丢失")
     */
    public const CBC_ACCOUNT_CONFIG_MISSING = 20021;

    /**
     * @Message("此门店退款订单号已经存在，不能再次发起退款")
     */
    public const STORE_REFUND_ORDER_NO_EXISTS = 20017;

    /**
     * @Message("订单号不能为空")
     */
    public const ORDER_NO_EMPTY = 50001;

    /**
     * @Message("未查询到订单")
     */
    public const ORDER_NOT_FOUND_50002 = 50002;

    /**
     * @Message("订单状态为空")
     */
    public const ORDER_STATUS_EMPTY = 50003;

    /**
     * @Message("订单支付方式为空")
     */
    public const ORDER_PAYMENT_METHOD_EMPTY = 50004;

    /**
     * @Message("订单支付方式非法")
     */
    public const ORDER_PAYMENT_METHOD_ILLEGAL = 50005;

    /**
     * @Message("支付中，不能取消订单")
     */
    public const ORDER_CANNOT_CANCEL_WHILE_PAYING = 50006;

    /**
     * @Message("取消订单退款中的退款订单不存在，请联系建行客服")
     */
    public const CANCEL_ORDER_REFUND_NOT_EXISTS = 50011;

    /**
     * @Message("退款中，商户门店建行账户配置信息丢失")
     */
    public const REFUND_MERCHANT_ACCOUNT_INFO_LOST = 50007;

    /**
     * @Message("退款处理中，请稍后再试")
     */
    public const REFUND_PROCESSING_50008 = 50008;

    /**
     * @Message("取消订单失败，支付状态为")
     */
    public const CANCEL_ORDER_FAILED_WITH_PAYMENT_STATUS = 50009;

    /**
     * @Message("查询条件为空，查询失败")
     */
    public const QUERY_CONDITIONS_EMPTY = 80001;

    /**
     * @Message("手机号为空，查询失败")
     */
    public const PHONE_NUMBER_EMPTY = 80002;

    /**
     * @Message("商户code为空，查询失败")
     */
    public const MERCHANT_CODE_EMPTY = 80003;

    /**
     * @Message("购买人暂未报名，请引导客户前往建行生活APP申请补贴~")
     */
    public const BUYER_NOT_REGISTERED = 80004;

}
