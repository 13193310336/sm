<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-5
 * Time: 下午8:27
 */

namespace App\Component;


use EasySwoole\EasySwoole\Config;

class Helper
{
    /**
     * 静态文件路由
     * @param $uri
     * @return string
     */
    public static function asset($uri)
    {
        return 'http://' . Config::getInstance()->getConf('app.appHost') . DIRECTORY_SEPARATOR . $uri;
    }

    /**
     * 简化config
     * @param $key
     * @param bool $value
     * @return array|mixed|null
     */
    public function config($key, $value = false)
    {
        if ($value)
            Config::getInstance()->setConf($key, $value);
        else
            return Config::getInstance()->getConf($key);
    }
}