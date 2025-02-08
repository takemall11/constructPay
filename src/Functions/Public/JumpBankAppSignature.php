<?php

declare(strict_types=1);

namespace ConstructPay\Api\Functions\Public;

use GuzzleHttp\Exception\GuzzleException;
use ConstructPay\Api\Core\BaseClient;

/**
 * 退款模块
 */
class JumpBankAppSignature extends BaseClient
{
    protected function setParams(): void
    {
        $this->app->baseParams['head']['bizCode'] = "A1000";
    }

    /**
     * 3.9三方app跳转建行生活app链接签名接口
     * @param array $params
     * @return array
     * @throws GuzzleException
     */
    public function getJumpBankAppSignature(array $params): array
    {
        $this->setParams();
        return $this->curlRequest($params, 'post');
    }
}
