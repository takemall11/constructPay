<?php

declare(strict_types=1);

namespace ConstructPay\Api;

use ConstructPay\Api\Core\ContainerBase;
use ConstructPay\Api\Provider\ConstructPayProvider;
use ConstructPay\Api\Provider\SearchProvider;

/**
 * Class ConstructPay
 */
class ConstructPay extends ContainerBase
{
    /**
     * 服务提供者
     * @var array
     */
    protected array $provider = [
        ConstructPayProvider::class,
        SearchProvider::class,
        //...其他服务提供者
    ];
}
