<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/9 0009
 * Time: 17:57
 */

namespace App\Controller\Grpc;


use Grpc\HiReply;
use Grpc\HiUser;
use Hyperf\GrpcClient\BaseClient;

class HiClient extends BaseClient
{
    public function sayHello(HiUser $argument)
    {
        return $this->simpleRequest(
            '/grpc.hi/sayHello',
            $argument,
            [HiReply::class, 'decode']
        );
    }
}
