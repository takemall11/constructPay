# 适配hyperf的聚合支付平台SDK

## Installing

```shell
$ composer require nahuomall/constructPay -vvv
```

## Usage

```php
        $obj = \Hyperf\Support\make(\ConstructPay\Api\Wechat::class)
        
        $obj->setMchId('你的商户ID');
        // app
        $res =$obj->app->createOrder([]);
        
        var_dump($res);
```

## License
MIT