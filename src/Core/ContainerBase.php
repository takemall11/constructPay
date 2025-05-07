<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace ConstructPay\Api\Core;

/**
 * Class ContainerBase.
 */
class ContainerBase extends Container
{
    public string $mchId = '';

    public string $appId = '';

    public string $appKey = '';

    public string $service = '';

    public array $baseParams = [];
    /** 国密SM3key
     */
    public string $secretSM3;


    /** 国密SM4key
     */
    public string $secretSM4;

    public string $mrchCode;
    public string $shopCode;

    /**SM4加密类型 加密类型 ctr | ofb| cfb |cbc| ecb
     * @var string
     */
    public string $encryptionTypeSM4 = 'ecb';

    // 请求地址
    public string $host = 'https://aty.huamaihome.com';
    //请求路由
    public string $url = '/ccb_equity_api_new/gateway/bizProcessApi';

    protected array $provider = [];



    /**
     * ContainerBase constructor.
     */
    public function __construct(array $params = [])
    {
        if (! empty($params)) {
            $this->baseParams = array_merge($this->baseParams, $params);
        }

        $providerCallback = function ($provider) {
            $obj = new $provider();
            $this->serviceRegister($obj);
        };

        array_walk($this->provider, $providerCallback); // 注册
    }

    /**
     * @return mixed
     */
    public function __get($id)
    {
        return $this->offsetGet($id);
    }

    /**
     * @return ContainerBase
     */
    public function setMchId(string $mchId): static
    {
        $this->mchId = $mchId;
        return $this;
    }

    /**
     * @return ContainerBase
     */
    public function setAppId(string $appId): static
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return ContainerBase
     */
    public function setAppKey(string $appKey): static
    {
        $this->appKey = $appKey;
        return $this;
    }

    /**
     * @return ContainerBase
     */
    public function setSecretSM3(string $smThreeSecret): static
    {
        $this->secretSM3 = $smThreeSecret;
        return $this;
    }
    /**
     * @return ContainerBase
     */
    public function setSecretSM4(string $secretSM4): static
    {
        $this->secretSM4 = $secretSM4;
        return $this;
    }

    /**
     * @return ContainerBase
     */
    public function setMrchCode(string $mrchCode): static
    {
        $this->mrchCode = $mrchCode;
        return $this;
    }
    /**
     * @return ContainerBase
     */
    public function setShopCode(string $shopCode): static
    {
        $this->shopCode = $shopCode;
        return $this;
    }

    /**
     * @param string $host
     * @return $this
     */
    public function setHost(string $host): static
    {
        $this->host = $host;
        return $this;
    }

}
