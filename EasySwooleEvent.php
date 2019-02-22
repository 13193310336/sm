<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2018/5/28
 * Time: 下午6:33
 */

namespace EasySwoole\EasySwoole;


use App\Component\EasySwooleEventHelper;
use App\Component\GlobalConst;
use EasySwoole\Component\Context\ContextManager;
use EasySwoole\EasySwoole\Swoole\EventRegister;
use EasySwoole\EasySwoole\AbstractInterface\Event;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;

class EasySwooleEvent implements Event
{

    public static function initialize()
    {
        //覆盖默认设置
        EasySwooleEventHelper::overwriteDefaultSetting();

        //加载自定义配置
        EasySwooleEventHelper::loadConf();

        //注册缓存驱动
        EasySwooleEventHelper::registerCache();

        //加载自定义命令
        EasySwooleEventHelper::loadConsole();

        //注册连接池
        EasySwooleEventHelper::registerPool();

    }

    public static function mainServerCreate(EventRegister $register)
    {
        // TODO: Implement mainServerCreate() method.
    }

    public static function onRequest(Request $request, Response $response): bool
    {
        // TODO: Implement onRequest() method.
        //存储必要数据
        ContextManager::getInstance()->set(GlobalConst::CONTENT_HTTP_REQUEST, $request);
        ContextManager::getInstance()->set(GlobalConst::CONTENT_HTTP_QUERY, $request->getQueryParams());
        ContextManager::getInstance()->set(GlobalConst::CONTENT_URI, $request->getUri());
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