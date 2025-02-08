<?php

declare(strict_types=1);

namespace ConstructPay\Api\Functions\Public;

use Carbon\Carbon;
use GuzzleHttp\Exception\GuzzleException;
use ConstructPay\Api\Core\BaseClient;
use ConstructPay\Api\Core\Container;

/**
 * 订单模块
 */
class BillReconciliation extends BaseClient
{
    protected function setParams(): void
    {
        // ......
        $this->app->baseParams['head']['bizCode'] = "A0007";
    }


    //对账单查询
    public function billReconciliation(array $params): array
    {
        return $this->curlRequest($params, 'post');
    }
}
