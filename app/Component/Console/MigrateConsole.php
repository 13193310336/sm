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
use App\Model\Model;
use EasySwoole\EasySwoole\Command\CommandInterface;
use EasySwoole\EasySwoole\Command\Utility;

class MigrateConsole implements CommandInterface
{

    protected $modelDirectory = EASYSWOOLE_ROOT . '/app/Model';

    protected $fieldSqlMap = [];

    protected $isCover = false;

    public function commandName(): string
    {
        return 'migrate';
    }

    public function exec(array $args):? string
    {
        $tableName = array_first($args);
        if (!$tableName) {
            return Utility::easySwooleLog() . "\e[36m参数\e[0m arg \e[36m不合法\e[0m";
        }
        $tableNameMap = $this->tableNameMap();
        if (strtolower($tableName) != GlobalConst::COMMAND_ALL && !isset($tableNameMap[$tableName])) {
            return Utility::easySwooleLog() . "\e[36m 数据表\e[0m $tableName \e[36m不存在,请确认该参数已在模型table()方法中返回\e[0m";
        }
        if (strtolower($args[1]) == 'true') {
            $this->isCover = true;
        }
        $returnMessage = Utility::easySwooleLog();
        if (isset($tableNameMap[$tableName])) {
            $returnMessage .= $this->analysisProperty($tableNameMap[$tableName]) . PHP_EOL;
        } else {
            foreach ($tableNameMap as $tableModel) {
                $returnMessage .= $this->analysisProperty($tableModel) . PHP_EOL;
            }
        }
        return $returnMessage;
    }

    /**
     * 拼装创建表Sql语句
     * @param $tableName
     * @return string
     */
    protected function makeCreateSql($tableName)
    {
        $tableFields = $this->fieldSqlMap[$tableName];
        $sql = 'CREATE TABLE ' . $tableName . '(';
        $sqlIndex = '';
        foreach ($tableFields as $field => $attribute) {
            $sql .= $this->getCreateAttributeString($field, $attribute);
            $sqlIndex .= $this->getCreateAttributeIndexString($field, $attribute);
        }
        $sql .= trim($sqlIndex, ',');
        $sql .= ')';
        return $sql;
    }

    /**
     * 拼装字段属性内容
     * @param string $field
     * @param array $attributes
     * @return string
     */
    protected function getCreateAttributeString(string $field, array $attributes): string
    {
        $string = '`' . $field . '`';

        /**
         * 拼装类型
         */
        $string .= ' ' . $attributes['type'];
        if ((bool)$attributes['typeFloat']) {
            $string .= '(' . $attributes['typeLength'] . ',' . $attributes['typeFloat'] . ')';
        } else {
            $string .= '(' . $attributes['typeLength'] . ')';
        }

        /**
         * 是否为空
         */
        if ((bool)$attributes['notNull']) {
            $string .= ' NOT NULL';
        } else {
            $string .= ' NULL';
        }

        /**
         * 拼装自动递增
         */
        if ((bool)$attributes['autoIncrement']) {
            $string .= ' AUTO_INCREMENT';
        }

        /**
         * 拼装注释
         */
        if ((bool)$attributes['comment']) {
            $string .= ' COMMENT \'' . $attributes['comment'] . '\'';
        }

        return $string . ',';
    }

    /**
     * 拼装字段索引
     * @param $field
     * @param array $attributes
     * @return string
     */
    public function getCreateAttributeIndexString($field,  array $attributes): string
    {
        $string = '';
            if ($attributes['primary']) {
                $string .= 'PRIMARY KEY (`' . $field . '`),';
            }

            if ($attributes['index']) {
                if (strtoupper($attributes['indexType']) == 'NORMAL') {
                    $string .= 'INDEX `' . $field . '_NORMAL' . '` (`' . $field . '`) USING ' . strtoupper($attributes['indexMethod']) . ',';
                }
                if (strtoupper($attributes['indexType']) == 'UNIQUE') {
                    $string .= 'UNIQUE INDEX `' . $field . '_UNIQUE' . '` (`' . $field . '`) USING ' . strtoupper($attributes['indexMethod']) . ',';
                }
                if (strtoupper($attributes['indexType']) == 'FULLTEXT') {
                    $string .= 'FULLTEXT INDEX `' . $field . '_FULLTEXT' . '` (`' . $field . '`) USING ' . strtoupper($attributes['indexMethod']) . ',';
                }
            }

        return $string;
    }

    /**
     * 执行Sql
     * @param $tableName
     * @param $sql
     * @return string
     */
    public function execSql($tableName, $sql)
    {
        $returnMessage = "\e[36m 数据表\e[0m " . $tableName . " \e[36m迁移成功\e[0m";
        $mysql = new \mysqli(
            config('database.mysql.host'),
            config('database.mysql.user'),
            config('database.mysql.password'),
            config('database.mysql.database'),
            config('database.mysql.port')
        );

        if (!$mysql->get_connection_stats()) {
            return '数据库链接失败！';
        }

        if ($this->isCover) {
            $mysql->query('DROP TABLE `' . $tableName . '`');
        }
        $sqlExec = $mysql->query($sql);
        if (!$sqlExec) {
            $returnMessage = "\e[36m 数据表\e[0m " . $tableName . " \e[36m迁移失败,失败原因\e[0m" . "\e[0m " . $mysql->error . "\e[36m";
        }
        return $returnMessage;
    }


    /**
     * 分析数据属性
     * @param Model $model
     * @return string
     */
    protected function analysisProperty(Model $model): string
    {
        $tableName = $model->getTable();
        $beanClass = $model->getBean();
        $reflectionClass = new \ReflectionClass($beanClass);
        foreach ($reflectionClass->getProperties() as $property) {
            $reflectionProperty = new \ReflectionProperty($beanClass, $property->name);
            $this->fieldSqlMap[$tableName][$property->name]
                = $this->analysisPropertiesDocument($reflectionProperty->getDocComment());
        }

        return $this->execSql($tableName, $this->makeCreateSql($tableName));
    }

    /**
     * 分析属性注释
     * @param $string
     * @return array
     */
    protected function analysisPropertiesDocument($string)
    {
        $analysisKey = [
            'primary'       => false,
            'autoIncrement' => false,
            'notNull'       => false,
            'type'          => false,
            'typeLength'    => false,
            'typeFloat'     => false,
            'index'         => false,
            'indexType'     => false,
            'indexMethod'   => false,
            'comment'       => false
        ];
        foreach ($analysisKey as $key => $item) {
            preg_match('/@' . $key . '\s+(.*)\n/', $string, $matchArray);
            if (isset($matchArray[1])) {
                $value = strtolower($matchArray[1]);
                if ($value == 'true') {
                    $value = true;
                }else if ($value == 'false') {
                    $value = false;
                }
                $analysisKey[$key] = $value;
            }
        }
        return $analysisKey;
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
                    $itemInstance = $reflection->newInstanceArgs([
                        'object'                => null,
                        'autoGetConnect'        => false,
                        'autoReleaseConnect'    => false
                    ]);
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
\e[31m  php easyswoole migrate [arg1] [arg2]\e[0m
\e[33mIntro:\e[0m
\e[36m  通过模型生成数据表, arg1值为 \e[0m 模型中table属性值 \e[36m或\e[0m {$allValue},\e[36m arg2值为\e[0m bool\e[36m型,默认\e[0m false
\e[33mArg:\e[0m
\e[36m  当\e[0m arg1 \e[36m值为\e[0mtable属性值         \e[36m 创建/重建该数据表 \e[0m
\e[36m  当\e[0m arg1 \e[36m值为\e[0m{$allValue}                 \e[36m 创建/重建全部数据表 \e[0m
\e[36m  当\e[0m arg2 \e[36m值为\e[0mtrue                \e[36m 如果数据表已经存在,会直接覆盖 \e[0m
\e[36m  当\e[0m arg2 \e[36m值为\e[0mfalse               \e[36m 如果数据表已经存在,会跳过并报告失败原因 \e[0m
HELP_START;
    }
}