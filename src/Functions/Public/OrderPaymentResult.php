<?php

declare(strict_types=1);

namespace ConstructPay\Api\Functions\Public;

use GuzzleHttp\Exception\GuzzleException;
use ConstructPay\Api\Core\BaseClient;
use ConstructPay\Api\Core\Container;

/**
 * 订单模块 建行推送商户订单支付结果接口
 */
class OrderPaymentResult extends BaseClient
{
    protected function setParams(): void
    {
        $this->app->baseParams['head']['bizCode'] = "A0004";
    }

    /**
     * 统一查询订单
     * @param array $params
     * @return array
     * @throws GuzzleException
     */
    public function getPaymentResult(array $params): array
    {
        return $this->curlRequest($params, 'post');
    }

}
