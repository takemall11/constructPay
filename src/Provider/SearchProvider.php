<?php

declare(strict_types=1);

namespace ConstructPay\Api\Provider;

use ConstructPay\Api\Core\Container;
use ConstructPay\Api\Functions\Public\BillReconciliation;
use ConstructPay\Api\Functions\Public\JumpThirdAppSignature;
use ConstructPay\Api\Functions\Public\OrderDetail;
use ConstructPay\Api\Functions\Public\OrderPaymentResult;
use ConstructPay\Api\Functions\Public\OrderRefund;
use ConstructPay\Api\Functions\Public\JumpBankAppSignature;
use ConstructPay\Api\Functions\Public\SubsidyBalance;
use ConstructPay\Api\Interfaces\Provider;

/**
 * Class ConstructPayProvider
 * @package ConstructPay\Api\Provider
 */
class SearchProvider implements Provider
{
    /**
     * 服务提供者
     * @param Container $container
     */
    public function serviceProvider(Container $container): void
    {
        $container['search'] = function ($container) {
            return new OrderDetail($container, '/ccb_equity_api_new/gateway/bizProcessApi');
        };
        $container['refund'] = function ($container) {
            return new OrderRefund($container, '/ccb_equity_api_new/gateway/bizProcessApi');
        };
        $container['paymentResult'] = function ($container) {
            return new OrderPaymentResult($container, '/ccb_equity_api_new/gateway/bizProcessApi');
        };
        $container['subsidyBalance'] = function ($container) {
            return new SubsidyBalance($container, '/ccb_equity_api_new/gateway/bizProcessApi');
        };
        $container['billReconciliation'] = function ($container) {
            return new BillReconciliation($container, '/ccb_equity_api_new/gateway/bizProcessApi');
        };
        $container['jumpBankAppSignature'] = function ($container) {
            return new JumpBankAppSignature($container, '/ccb_equity_api_new/gateway/bizProcessApi');
        };
        $container['jumpThirdAppSignature'] = function ($container) {
            return new JumpThirdAppSignature($container, '/ccb_equity_api_new/gateway/bizProcessApi');
        };
    }
}
