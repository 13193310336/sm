<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-2-22
 * Time: 下午5:21
 */

namespace App\Component\Console;


use App\Model\Role\RoleModel;
use EasySwoole\EasySwoole\Command\CommandInterface;
use EasySwoole\EasySwoole\Command\Utility;

class Test implements CommandInterface
{

    public function commandName(): string
    {
        // TODO: Implement commandName() method.
        return 'test';
    }

    public function exec(array $args):?string
    {
        // TODO: Implement exec() method.

        return '';
    }

    public function help(array $args):?string
    {
        // TODO: Implement help() method.
        return Utility::easySwooleLog() . '测试脚本';
    }
}