<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-6
 * Time: 下午9:15
 */

namespace App\Component\Pool;


use EasySwoole\Component\Pool\PoolObjectInterface;
use EasySwoole\Mysqli\Mysqli;

class MysqlObject extends Mysqli implements PoolObjectInterface
{
    public function objectRestore()
    {
        $this->resetDbStatus();
    }

    public function beforeUse(): bool
    {
        return $this->getMysqlClient()->connected;
    }

    public function gc()
    {
        $this->resetDbStatus();
        $this->getMysqlClient()->close();
    }
}