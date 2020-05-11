<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/11 0011
 * Time: 10:51
 */

namespace App\Factory;


use App\Log;
use Psr\Container\ContainerInterface;

class FileLoggerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return Log::get('Sys');
    }
}