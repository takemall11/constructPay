<?php

declare(strict_types=1);

namespace ConstructPay\Api\Functions\Public;

use GuzzleHttp\Exception\GuzzleException;
use ConstructPay\Api\Core\BaseClient;

/**
 * 退款模块
 */
class JumpThirdAppSignature extends BaseClient
{
    protected function setParams(): void
    {
        $this->app->baseParams['head']['bizCode'] = "A1001";
    }

    /**
     * 3.10建行生活app跳转三方app链接签名接口
     * @param array $params
     * @return array
     * @throws GuzzleException
     */
    public function getJumpThirdAppSignature(array $params): array
    {
        $this->setParams();
        return $this->curlRequest($params, 'post');
    }
}
