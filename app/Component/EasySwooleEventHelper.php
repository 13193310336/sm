<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-5
 * Time: 下午7:42
 */

namespace App\Component;


use App\Component\Console\MigrateConsole;
use EasySwoole\EasySwoole\Command\CommandContainer;
use EasySwoole\EasySwoole\Config;
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
                    Config::getInstance()->loadFile($file);//引入之后,文件名自动转为小写,成为配置的key
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
    }

}