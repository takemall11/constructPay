<?php

declare(strict_types=1);

namespace ConstructPay\Api\Provider;

use ConstructPay\Api\Core\Container;
use ConstructPay\Api\Functions\Union\CloudMiniPayShortcut;
use ConstructPay\Api\Functions\Union\MiniPayShortcut;
use ConstructPay\Api\Interfaces\Provider;

/**
 * Class ConstructPayProvider
 * @package ConstructPay\Api\Provider
 */
class ConstructPayProvider implements Provider
{
    /**
     * 服务提供者
     * @param Container $container
     */
    public function serviceProvider(Container $container): void
    {
        $container['wechatMini'] = function ($container) {
            return new MiniPayShortcut($container, '/wx/mini-pre-order');
        };
        $container['uacMini'] = function ($container) {
            return new CloudMiniPayShortcut($container, '/uac/mini-order');
        };
    }
}
