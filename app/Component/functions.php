<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-5
 * Time: 下午8:35
 */
namespace App\Component;

use EasySwoole\Component\Context\ContextManager;
use EasySwoole\EasySwoole\Config;

/**
 * 路由
 * @param $uri
 * @param $urlMessage
 * @return string
 */
function url($uri, $urlMessage = false)
{
    $url = 'http://' . \App\Component\config('app.appHost') . DIRECTORY_SEPARATOR . $uri;

    if ($urlMessage)
        $url .=  '?' . GlobalConst::URI_MESSAGE_FIELD . '=' . $urlMessage;

    return $url;
}

/**
 * 静态文件路由
 * @param $uri
 * @return string
 */
function asset($uri)
{
    return 'http://' . Config::getInstance()->getConf('app.appHost') . DIRECTORY_SEPARATOR . $uri;
}

/**
 * 简化config
 * @param $key
 * @param bool $value
 * @return array|mixed|null
 */
function config($key, $value = false)
{
    if ($value)
        Config::getInstance()->setConf($key, $value);
    else
        return Config::getInstance()->getConf($key);
}

/**
 * 通用获取键方法
 * @param int $unique
 * @param string $keyword
 * @param string $prefix
 * @return string
 */
function getKey(int $unique, string $keyword, string $prefix)
{
    return 'REDIS_' . $prefix . '_' . $unique . '_' . $keyword;
}

/**
 * 获取admin模块redis键
 * @param string $keyword
 * @param int $unique
 * @return string
 */
function getAdminRedisKey(string $keyword, int $unique = 0)
{
    if (!$unique) {
        $userId = ContextManager::getInstance()->get(GlobalConst::CONTEXT_SESSION)['user_id'];
    }
    return getKey($unique, $keyword, 'ADMIN_REDIS_');
}

/**
 * 获取admin模块缓存键
 * @param string $keyword
 * @param int $unique
 * @return string
 */
function getAdminCacheKey(string $keyword, int $unique = 0)
{
    if (!$unique) {
        $userId = ContextManager::getInstance()->get(GlobalConst::CONTEXT_SESSION)['user_id'];
    }
    return getKey($unique, $keyword, 'ADMIN_CACHE_');
}






