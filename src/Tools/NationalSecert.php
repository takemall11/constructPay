<?php

declare(strict_types=1);

namespace ConstructPay\Api\Tools;

use OneSm\Sm4;

trait NationalSecert
{
    // 国密SM3加密
    private function encryptionSM3(string $signature)
    {
        $sm3 = new \OneSm\Sm3();
        return $sm3->sign($signature);
    }

    /**国密SM4加密
     * @param string $signature
     * @param string $secret 秘钥
     * @param $type 加密类型 ctr | ofb| cfb |cbc| ecb
     * @return mixed
     * @throws \Exception
     */
    private function encryptionSM4(string $signature, string $secret, string $type = 'ecb')
    {
        $sm4 = new Sm4($secret);
        $type = ucfirst($type);
        $method = 'enData' . $type;
        if ($type == 'Ecb') {
            $signature = $sm4->$method($signature);
        } else {
            $signature = $sm4->$method($signature, $secret);
        }
        return $signature;

    }

    /** 解密 sm4
     * @param string $signature
     * * @param string $secret 秘钥
     * * @param $type 加密类型 ctr | ofb| cfb |cbc| Ecb
     * @throws \Exception
     */
    private function decryptSM4(string $signature, string $secret, string $type = 'ecb')
    {
        $sm4 = new Sm4($secret);
        $type = ucfirst($type);
        $method = 'deData' . $type;
        if ($type == 'Ecb') {
            $signature = $sm4->$method($signature);
        } else {
            $signature = $sm4->$method($signature, $secret);
        }
        return $signature;
    }
}
