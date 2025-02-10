<?php

declare(strict_types=1);

namespace ConstructPay\Api\Functions\Public;

use GuzzleHttp\Exception\GuzzleException;
use ConstructPay\Api\Core\BaseClient;

/**
 * 审计商品上传接口
 */
class SubsidyProductPush extends BaseClient
{
    protected function setParams(): void
    {
        $this->app->baseParams['head']['bizCode'] = "A2002";
        $this->app->baseParams['data']['shopCode'] = $this->app->shopCode;
    }

    /**
     * 审计商品上传接口
     * @param array $params
     * @return array
     * @throws GuzzleException
     */
    public function push(array $params): array
    {
        $this->setParams();
        return $this->curlRequest($params, 'post');
    }
}
