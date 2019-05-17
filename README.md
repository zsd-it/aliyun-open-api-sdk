# aliyun-open-api-sdk
阿里云开放接口api的通用请求sdk

# 引入
```shell
composer require zsd/aliyun-open-api-sdk
```

# 举例
```php

//举例查询余额
/** @var \AOApi\AliyunOpenApi $aliyunApi */
$aliyunApi       = new \AOApi\AliyunOpenApi();
$accessKeyId     = 'xxxx'; //账号的 accessKeyId
$accessKeySecret = 'xxx'; //账号的 accessKeySecret

$sendResult = $aliyunApi->request(
    $accessKeyId,
    $accessKeySecret,
    "business.aliyuncs.com", //使用时注意 需要根据阿里云提供的不同公共API的要求进行修改.
    array_merge([], [
        "RegionId" => "cn-hangzhou",
        "Action"   => "QueryAccountBalance", //使用时注意 `Action`,`Version` 需要根据阿里云提供的不同公共API的要求进行修改.
        "Version"  => "2017-12-14",
    ]),
    true //启用https
);
//处理返回结果
var_dump($sendResult);

```