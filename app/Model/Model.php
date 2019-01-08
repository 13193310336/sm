<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-6
 * Time: 下午9:56
 */
namespace App\Model;

use function App\Component\config;
use App\Component\Pool\MysqlObject;
use App\Component\Pool\MysqlPool;
use Carbon\Carbon;
use EasySwoole\Component\Pool\PoolManager;
use EasySwoole\Spl\SplBean;

abstract class Model
{
    private $object;

    protected $table = null;

    protected $primaryKey = null;

    protected $bean = null;

    public function __construct(MysqlObject $object = null)
    {
        $this->object = $object;

        /**
         * 如果没有传入链接，从连接池取一个
         */
        if (!$object)
            $this->object = PoolManager::getInstance()->getPool(MysqlPool::class)->getObj(config('database.mysql.POOL_TIME_OUT'));

        $this->table = $this->getTable();
        $this->primaryKey = $this->getPrimary();
        $this->bean = $this->getBean();
    }

    /**
     * 获取表名
     * @return string
     */
    abstract protected function getTable(): string;

    /**
     * 获取主键
     * @return string
     */
    abstract protected function getPrimary(): string;

    /**
     * 获取Bean
     * @return string
     */
    abstract protected function getBean(): string;

    /**
     * 获取链接
     * @return MysqlObject
     */
    public function getConnect(): MysqlObject
    {
        return $this->object;
    }

    /**
     * 回收链接
     */
    protected function recoveryConnect()
    {
        PoolManager::getInstance()->getPool(MysqlPool::class)->recycleObj($this->object);
    }

    /**
     * 通用获取单条数据
     * @param bool $primary
     * @return mixed
     */
    public function find($primary = false)
    {
        if ($primary)
            return $this->object->where($this->primaryKey, $primary)->getOne($this->table);
        else
            return $this->object->getOne($this->table);
    }

    /**
     * 通用插入方法
     * @param array $data
     * @return mixed
     */
    public function insert(array $data)
    {
        $bean = new $this->bean($data);
        $bean->setCreated(Carbon::now());
        $bean->setUpdated(Carbon::now());
        $insertResult = $this->object->insert($this->table, $bean->toArray(null, SplBean::FILTER_NOT_NULL));
        return $insertResult;
    }

    /**
     * 通用更新方法
     * @param $primary
     * @param array $data
     * @return mixed
     */
    public function update($primary, array $data)
    {
        $bean = new $this->bean($data);
        $bean->setUpdated(Carbon::now());
        return $this->object
            ->where($this->primaryKey, $primary)
            ->update($this->table, $bean->toArray(null, SplBean::FILTER_NOT_NULL));
    }


    public function __destruct()
    {
        $this->recoveryConnect();
    }
}