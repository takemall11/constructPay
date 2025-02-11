<?php

declare(strict_types=1);

namespace ConstructPay\Api\Core;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use ConstructPay\Api\Constants\ConstructErrorCode;
use ConstructPay\Api\Exception\PayException;
use ConstructPay\Api\Tools\Guzzle;
use ConstructPay\Api\Tools\Sign;
use Hyperf\Codec\Json;
use phpseclib3\Crypt\Hash;
use SM3\Sm3;
use function Hyperf\Support\make;
use function Hyperf\Config\config;

/**
 * Class BaseClient
 * @package ConstructPay\Api\Core
 * @property BaseClient app
 */
abstract class BaseClient
{
    use Sign;

    // 基础参数
    protected Container $app;

    /**
     * BaseClient constructor.
     * @param Container $app
     */
    public function __construct(Container $app)
    {
        $this->app = $app;
        //设置时区
        date_default_timezone_set('Asia/Shanghai');
        // 设置公共参数
        $this->app->baseParams['head']['timestamp'] =  date('YmdHis', time());
    }

    /**
     * 设置参数.
     * @return void
     */
    abstract protected function setParams(): void;

    /**
     * curl 请求
     * @param array $param
     * @param string $method
     * @return array
     * @throws PayException
     */
    public function curlRequest(array $param, string $method = 'get'): array
    {
        try {
            $this->setParams();
            $data['data'] = $param;
            ## 合并公共参数
            $data = array_merge($data, $this->app->baseParams);
            $signatures=Json::encode($data, JSON_UNESCAPED_SLASHES);
            // sm4加密，返回base64
            $signature = $this->encryptionSM4($signatures);
           // sm3加密
           $sign = $this->encryptionSM3($this->app->secretSM3.$this->app->baseParams['head']['timestamp'].$signature);
            ## 开始请求
            $client = $this->getInstance([]);
            ## 发送请求
            $method = 'send' . ucfirst($method);
            ## 获取返回结果
            return $client->$method($this->app->url, [
                'mrchCode' => $this->app->mrchCode,
                'reqData' => $signature,
                'sign' => $sign
            ]);
        } catch (RequestException|ClientException $e) {
            // 请求失败
            logger('constructpay')->error('ConstructPay Request Error', [
                'url' => $this->app->host . $this->app->url,
                'data' => $data,
                'error' => $e->getMessage(),
            ]);
            throw new PayException(ConstructErrorCode::SERVER_ERROR, '支付服务访问失败');
        }
    }

    /**
     * 获取实例.
     * @param array $headers
     * @param int $timeout
     * @return mixed
     */
    private function getInstance(array $headers = [], int $timeout = 10): Guzzle
    {
        $params = [
            'base_uri' => $this->app->host,
            'timeout' => $timeout,
            'verify' => false,
            'headers' => $headers,
        ];
        ## 开始请求
        /** @var Guzzle $client */
        return make(Guzzle::class)->setHttpHandle($params);
    }


}
