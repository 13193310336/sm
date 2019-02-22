<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-5
 * Time: 下午7:42
 */

namespace App\Component;


use function App\Component\config;
use App\Component\Console\MigrateConsole;
use App\Component\Console\Test;
use App\Component\Pool\MysqlPool;
use App\Component\Pool\RedisPool;
use duncan3dc\Laravel\BladeInstance;
use easySwoole\Cache\Cache;
use easySwoole\Cache\Connector\Redis;
use EasySwoole\Component\Di;
use EasySwoole\Component\Pool\PoolManager;
use EasySwoole\EasySwoole\Command\CommandContainer;
use EasySwoole\EasySwoole\Config as ConfigServer;
use EasySwoole\EasySwoole\SysConst;
use EasySwoole\Utility\File;

class EasySwooleEventHelper
{
    /**
     * 加载配置文件(官网demo)
     */
    public static function loadConf()
    {
        $files = File::scanDirectory(EASYSWOOLE_ROOT . '/config');
        if (is_array($files)) {
            foreach ($files['files'] as $file) {
                $fileNameArr = explode('.', $file);
                $fileSuffix = end($fileNameArr);
                if ($fileSuffix == 'php') {
                    ConfigServer::getInstance()->loadFile($file);//引入之后,文件名自动转为小写,成为配置的key
                }
            }
        }
    }

    /**
     * 加载命令行
     */
    public static function loadConsole()
    {
        CommandContainer::getInstance()->set(new MigrateConsole());
        CommandContainer::getInstance()->set(new Test());
    }

    /**
     * 覆盖默认设置
     */
    public static function overwriteDefaultSetting()
    {
        // 设置时区
        date_default_timezone_set('Asia/Shanghai');

        //设置控制器路径
        Di::getInstance()->set(
            SysConst::HTTP_CONTROLLER_NAMESPACE,
            config('app.controllerNamespace')
        );
    }

    /**
     * 注册缓存驱动
     */
    public static function registerCache()
    {
        $redisOptions = [
            'host'       => config('database.redis.host'),  // Redis服务器
            'port'       => config('database.redis.port'),         // Redis端口
            'password'   => config('database.redis.password'),           // Redis密码
            'select'     => config('database.redis.database'),            // Redis库序号
            'timeout'    => config('cache.timeout'),            // 连接超时
            'expire'     => config('cache.expire'),            // 默认缓存超时
            'persistent' => config('cache.persistent'),        // 是否使用长连接
            'prefix'     => config('cache.prefix'),     // 缓存前缀
        ];
        $redis = new Redis($redisOptions);
        Cache::init($redis);
    }

    /**
     * 注册模板引擎
     */
    public static function registerTemplate()
    {
        Di::getInstance()->set(
            GlobalConst::DI_BLADE, new BladeInstance(
                config('template.path'),
                config('template.cachePath')
            )
        );
    }

    /**
     * 注册连接池
     */
    public static function registerPool()
    {
        //注册MYSQL连接池
        PoolManager::getInstance()->register(MysqlPool::class, config('database.mysql.pool_max'));

        //注册Redis连接池
        PoolManager::getInstance()->register(RedisPool::class, config('database.redis.pool_max'));
    }
}