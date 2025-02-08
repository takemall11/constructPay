<?php

declare(strict_types=1);

namespace ConstructPay\Api\Functions\Public;

use GuzzleHttp\Exception\GuzzleException;
use ConstructPay\Api\Core\BaseClient;

/**
 * 退款模块
 */
class SubsidyBalance extends BaseClient
{
    protected function setParams(): void
    {
        $this->app->baseParams['head']['bizCode'] = "A0008";
        $this->app->baseParams['data']['shopCode'] = $this->app->shopCode;
    }

    /**
     * 统一退款
     * @param array $params
     * @return array
     * @throws GuzzleException
     */
    public function subsidyBalanceInquiry(array $params): array
    {
        $this->setParams();
        return $this->curlRequest($params, 'post');
    }
}
