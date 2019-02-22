<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-2-22
 * Time: 下午2:25
 */

namespace App\Component\Pool;


use EasySwoole\Component\Pool\PoolObjectInterface;
use Swoole\Coroutine\Redis;

class RedisObject extends Redis implements PoolObjectInterface
{
    public function objectRestore()
    {
        // TODO: Implement objectRestore() method.
    }

    public function beforeUse(): bool
    {
        // TODO: Implement beforeUse() method.
        return true;
    }

    public function gc()
    {
        // TODO: Implement gc() method.
        $this->close();
    }
}