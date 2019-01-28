<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-28
 * Time: 下午8:22
 */
namespace App\Component\Console;

use function App\Component\config;
use App\Component\GlobalConst;
use EasySwoole\EasySwoole\Command\CommandInterface;
use EasySwoole\EasySwoole\Command\Utility;

class MigrateConsole implements CommandInterface
{

    protected $modelDirectory = EASYSWOOLE_ROOT . '/app/Model';

    public function commandName(): string
    {
        return 'migrate';
    }

    public function exec(array $args):? string
    {
        $tableName = array_first($args);

        if (!$tableName)
            return "\e[36m参数\e[0m arg \e[36m不合法\e[0m";

        $tableNameMap = $this->tableNameMap();


        return null;
    }

    /**
     * 获取数据表Map
     * @return array
     */
    protected function tableNameMap()
    {
        $map = [];
        foreach ($this->readClassName() as $className) {
            if (class_exists($className)) {
                $reflection = new \ReflectionClass($className);
                if ($this->getTopParentClass($reflection) == config('app.baseModel'))
                {
                    $itemInstance = $reflection->newInstanceArgs();
                    $map[$itemInstance->getTable()] = $itemInstance;
                }
            }
        }
        return $map;
    }

    /**
     * 获取最顶级父类
     * @param \ReflectionClass $reflectionObj
     * @return \ReflectionClass|string
     */
    protected function getTopParentClass(\ReflectionClass $reflectionObj)
    {
        startGet: $parentClass = $reflectionObj->getParentClass();
        if (!$parentClass)
            return $reflectionObj->getName();
        if ($parentClass->name != config('app.baseModel')) {
            $reflectionObj = new \ReflectionClass($parentClass->name);
            goto startGet;
        }
        return $parentClass->name;
    }



    /**
     * 递归读取model目录下所有类
     * @param null $basePath
     * @return array
     */
    protected function readClassName($basePath = null): array
    {
        $modelNamespace = config('app.modelNamespace');
        $returnArray = [];
        if (!$basePath)
            $basePath = $this->modelDirectory;
        $direction = scandir($basePath);
        foreach ($direction as $item) {
            if ($item == '.' || $item == '..')
                continue;
            else if (is_dir($basePath . '/' . $item)) {
                $itemReturn = $this->readClassName($basePath . '/' . $item);
                if ($itemReturn)
                    $returnArray = array_merge($returnArray, $itemReturn);
            } else {
                $modelClass = str_replace(
                    [$this->modelDirectory, '/\\', '/', '.php'],
                    [$modelNamespace, '\\', '\\', ''],
                    $basePath . '/' . $item
                );
                if ($modelClass != config('app.baseModel'))
                array_push($returnArray, $modelClass);
            }
        }
        return $returnArray;
    }


    /**
     * 帮助信息
     * @param array $args
     * @return null|string
     */
    public function help(array  $args):? string
    {
        $logo = Utility::easySwooleLog();
        $allValue = GlobalConst::COMMAND_ALL;
        return $logo . <<<HELP_START
\e[33mOperation:\e[0m
\e[31m  php easyswoole migrate [arg] \e[0m
\e[33mIntro:\e[0m
\e[36m  通过模型生成数据表, arg值为 \e[0m 模型中table属性值 \e[36m或\e[0m {$allValue} 
\e[33mArg:\e[0m
\e[32m  当arg值为table属性值时 \e[0m         创建/重建该数据表
\e[32m  当arg值为{$allValue}时 \e[0m                 创建/重建全部数据表
HELP_START;
    }
}