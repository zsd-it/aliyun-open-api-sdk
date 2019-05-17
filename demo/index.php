<?php
/**
 * Created by PhpStorm.
 * User: zsd
 * Date: 2019/5/17
 * Time: 下午6:05
 */
$path = dirname(dirname(__FILE__));

require_once $path . '/src/AliyunOpenApi.php';

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
