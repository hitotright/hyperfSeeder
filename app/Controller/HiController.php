<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/9 0009
 * Time: 17:47
 */

namespace App\Controller;


use Grpc\HiReply;
use Grpc\HiUser;

class HiController extends AbstractController
{
    public function sayHello(HiUser $user)
    {
        $message = new HiReply();
        $message->setMessage("Hello World");
        $message->setUser($user);
        return $message;
    }
}