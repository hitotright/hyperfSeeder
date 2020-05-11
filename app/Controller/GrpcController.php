<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/9 0009
 * Time: 17:51
 */

namespace App\Controller;


use App\Controller\Grpc\HiClient;

class GrpcController
{
    public function hello()
    {
        $client = new HiClient('127.0.0.1:9503', [
            'credentials' => null,
        ]);

        $request = new \Grpc\HiUser();
        $request->setName('hyperf');
        $request->setSex(1);

        /**
         * @var \Grpc\HiReply $reply
         */
        list($reply, $status) = $client->sayHello($request);

        $message = $reply->getMessage();
        $user = $reply->getUser();
        $client->close();
        var_dump($user);
        var_dump(memory_get_usage(true));
        return $message;
    }

}