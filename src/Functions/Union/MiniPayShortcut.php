<?php

declare(strict_types=1);

namespace ConstructPay\Api\Functions\Union;

use GuzzleHttp\Exception\GuzzleException;
use ConstructPay\Api\Core\BaseClient;

/**
 * 订单模块
 */
class MiniPayShortcut extends BaseClient
{
    /**
     * @return void
     */
    protected function setParams(): void
    {
        $this->app->baseParams['head']['bizCode'] = "A0001";
        //        $this->app->baseParams['data']['mrchCode'] = $this->app->mrchCode;
        //        $this->app->baseParams['data']['shopCode'] =  $this->app->shopCode;
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
