<?php

declare(strict_types=1);

namespace ConstructPay\Api\Functions\Public;

use GuzzleHttp\Exception\GuzzleException;
use ConstructPay\Api\Core\BaseClient;

/**
 * 退款模块
 */
class OrderRefund extends BaseClient
{
    protected function setParams(): void
    {
        $this->app->baseParams['head']['bizCode'] = "A0002";
    }

    /**
     * 统一退款
     * @param array $params
     * @return array
     * @throws GuzzleException
     */
    public function refund(array $params): array
    {
        $this->setParams();
        return $this->curlRequest($params, 'post');
    }
}
