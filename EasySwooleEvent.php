<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2018/5/28
 * Time: 下午6:33
 */

namespace EasySwoole\EasySwoole;


use function App\Component\config;
use App\Component\EasySwooleEventHelper;
use App\Component\GlobalConst;
use App\Component\Pool\MysqlPool;
use duncan3dc\Laravel\BladeInstance;
use EasySwoole\Component\Di;
use EasySwoole\Component\Pool\PoolManager;
use EasySwoole\EasySwoole\Swoole\EventRegister;
use EasySwoole\EasySwoole\AbstractInterface\Event;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;

class EasySwooleEvent implements Event
{

    public static function initialize()
    {
        // 设置时区
        date_default_timezone_set('Asia/Shanghai');

        //加载自定义配置
        EasySwooleEventHelper::loadConf();

        //设置控制器路径
        Di::getInstance()->set(
            SysConst::HTTP_CONTROLLER_NAMESPACE,
            config('app.controllerNameSpace')
        );

        //注册mysql连接池
        PoolManager::getInstance()->register(MysqlPool::class, config('database.mysql.POOL_MAX_NUM'));

        //注册blade引擎
        Di::getInstance()->set(
            GlobalConst::DI_BLADE, new BladeInstance(
                Config::getInstance()->getConf('template.path'),
                Config::getInstance()->getConf('template.cachePath')
            )
        );
    }

    public static function mainServerCreate(EventRegister $register)
    {
        // TODO: Implement mainServerCreate() method.
    }

    public static function onRequest(Request $request, Response $response): bool
    {
        // TODO: Implement onRequest() method.
        return true;
    }

    public static function afterRequest(Request $request, Response $response): void
    {
        // TODO: Implement afterAction() method.
    }

    public static function onReceive(\swoole_server $server, int $fd, int $reactor_id, string $data):void
    {

    }

}