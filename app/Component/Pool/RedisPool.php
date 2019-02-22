<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-2-22
 * Time: 下午2:24
 */

namespace App\Component\Pool;


use function App\Component\config;
use EasySwoole\Component\Pool\AbstractPool;
use Swoole\Coroutine\Redis;

class RedisPool extends AbstractPool
{

    public function createObject()
    {
        $redis = new Redis();
        if ($redis->connect(config('database.redis.host'), config('database.redis.port'))) {
            if (config('database.redis.password')) {
                $redis->auth(config('database.redis.password'));
            }
            return $redis;
        }
        return null;
    }
}