<?php

declare(strict_types=1);

namespace ConstructPay\Api\Functions\Public;

use GuzzleHttp\Exception\GuzzleException;
use ConstructPay\Api\Core\BaseClient;

/**
 * 关闭模块
 */
class OrderClose extends BaseClient
{
    protected function setParams(): void
    {
        $this->app->baseParams['head']['bizCode'] = "A0005";
    }

    /**
     * 统一关闭订单
     * @param array $params
     * @return array
     * @throws GuzzleException
     */
    public function closeOrder(array $params): array
    {
        return $this->curlRequest($params, 'post');
    }
}
