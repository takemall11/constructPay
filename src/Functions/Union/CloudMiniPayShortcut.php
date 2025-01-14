<?php

declare(strict_types=1);

namespace ConstructPay\Api\Functions\Union;

use GuzzleHttp\Exception\GuzzleException;
use ConstructPay\Api\Core\BaseClient;

/**
 * 订单模块
 */
class CloudMiniPayShortcut extends BaseClient
{
    /**
     * @return void
     */
    protected function setParams(): void
    {
        $this->app->baseParams['tradeType'] = "UP_WX_MINI";
        $this->app->baseParams['instMid'] = "MINIDEFAULT";
    }

    /**
     * 创建订单
     * @param array $params
     * @return array
     * @throws GuzzleException
     */
    public function createOrder(array $params): array
    {
        return $this->curlRequest($params, 'post');
    }


}
