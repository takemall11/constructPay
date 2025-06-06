<?php

declare(strict_types=1);

namespace ConstructPay\Api\Provider;

use ConstructPay\Api\Core\Container;
use ConstructPay\Api\Functions\Public\BillReconciliation;
use ConstructPay\Api\Functions\Public\OrderDetail;
use ConstructPay\Api\Functions\Public\OrderRefund;
use ConstructPay\Api\Functions\Public\SubsidyBalance;
use ConstructPay\Api\Functions\Public\SubsidyProductPush;
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
            return new OrderDetail($container);
        };
        $container['refund'] = function ($container) {
            return new OrderRefund($container);
        };
        $container['subsidyBalance'] = function ($container) {
            return new SubsidyBalance($container);
        };
        $container['billReconciliation'] = function ($container) {
            return new BillReconciliation($container);
        };
        $container['subsidyProductPush'] = function ($container) {
            return new SubsidyProductPush($container);
        };
    }
}
