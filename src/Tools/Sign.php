<?php

declare(strict_types=1);

namespace ConstructPay\Api\Tools;

use Evit\PhpGmCrypto\Encryption\EvitSM3Encryption;
use Evit\PhpGmCrypto\Encryption\EvitSM4Encryption;

trait Sign
{
    /**
     * 国密SM3加密
     * @param string $signature
     * @return string
     */
    private function encryptionSM3(string $signature)
    {
        $sm3 = new EvitSM3Encryption();
        return $sm3->sm3($signature);
    }

    /**
     * 国密SM4加密
     * @param string $signature
     * @param string $type 加密类型ctr | ofb| cfb |cbc| ecb
     * @return string
     * @throws \Exception
     */
    private function encryptionSM4(string $signature, string $type = 'ecb'): string
    {

        $config['key'] = $this->app->secretSM4;
        $config['mode'] = $type;
        $sm4 = new EvitSM4Encryption($config);
        $signature = $sm4->encrypt($signature);
        return base64_encode($signature);
    }

    /** 解密 sm4
     * @param string $signature
     * @param string $type 加密类型 ctr | ofb| cfb |cbc| Ecb
     * @return mixed
     */
    private function decryptSM4(string $signature, string $type = 'ecb'): mixed
    {
        // 解密
        $config['key'] = $this->app->secretSM4;
        $config['mode'] = $type;
        $sm4 = new EvitSM4Encryption($config);
        return $signature = $sm4->decrypt(base64_decode($signature));
    }

}
