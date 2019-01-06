<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-6
 * Time: 下午9:13
 */
namespace App\Component\Pool;

use function App\Component\config;
use EasySwoole\Component\Pool\AbstractPool;
use EasySwoole\Mysqli\Config as DbConfig;

class MysqlPool extends AbstractPool
{

    public function createObject()
    {
        return new MysqlObject(new DbConfig(config('database.mysql')));
    }
}