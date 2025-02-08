<?php

declare(strict_types=1);

namespace ConstructPay\Api\Tools;

use Hyperf\Codec\Json;
use OneSm\Sm4;

use function Hyperf\Support\make;

trait Sign
{
    use NationalSecert;

    /** 获取签名字符串
     * @param string $signature 加密后的字符串
     * @param string $timestamp 时间戳
     * @param string $nationalSecret SM3|SM4
     * @return string
     */
    public function getSign(string$signature, string $timestamp, string $nationalSecret = 'SM3'): string
    {
        $secretSM = 'secret' . ucfirst($nationalSecret);
        $signature =  $timestamp . $signature;
        if ($nationalSecret == 'SM3') {
            //
            //           $s= bin2hex( $this->app->$secretSM);
            //
            //            $sm3 = new \OneSm\Sm3();
            //            // 创建SM3实例，并使用盐值进行签名（注意：这里假设SM3类支持带盐的签名，实际情况可能需要根据库的实现进行调整）
            //// 由于phpsci/sm3库默认不支持带盐的签名，我们需要自己实现带盐签名的逻辑
            //            $saltedData = $sm3Salt . $dataToSign; // 将盐值附加到数据前面
            //            $signature = strtoupper(bin2hex($sm3->hash($saltedData)));

            $signature = $this->encryptionSM3($signature);
        };
        //        if ($nationalSecret == 'SM4') {
        //            $signature = $this->encryptionSM4($signature, $this->app->$secretSM, $this->app->encryptionTypeSM4);
        //        }
        return $signature;
    }

    /**获取 请求报文加密字符串 reqData
     * @param array $body
     * @param string $nationalSecret SM3|SM4
     * @return string
     */
    public function getReqData(array $body, string $nationalSecret = 'SM4'): string
    {
        $secretSM = 'secret' . ucfirst($nationalSecret);
        $signature = Json::encode($body);
        //        if ($nationalSecret == 'SM3') {
        //            $signature = $this->encryptionSM3($signature);
        //        }
        if ($nationalSecret == 'SM4') {
            $signature = $this->encryptionSM4($signature, $this->app->$secretSM, $this->app->encryptionTypeSM4);
        }
        return  base64_encode($signature);
    }

}
