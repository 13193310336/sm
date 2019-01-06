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
use EasySwoole\Component\Pool\PoolManager;
use EasySwoole\Spl\SplBean;

abstract class Model
{
    private $object;

    protected $table = null;

    protected $primaryKey = null;

    protected $bean = null;

    protected $guarded = [];

    public function __construct(MysqlObject $object = null)
    {
        $this->object = $object;

        /**
         * 如果没有传入链接，从连接池取一个
         */
        if (!$object)
            $this->object = PoolManager::getInstance()->getPool(MysqlPool::class)->getObj(config('database.mysql.POOL_TIME_OUT'));

        /**
         * 如果没有设置过滤黑名单，将主键默认放进去
         */
        if (!$this->guarded)
            array_push($this->guarded, $this->primaryKey);
    }

    public function getConnect(): MysqlObject
    {
        return $this->object;
    }

    //销毁链接
    public function gc()
    {
        PoolManager::getInstance()->getPool(MysqlPool::class)->recycleObj($this->object);
    }

    /**
     * 通用插入方法
     * @param array $data
     * @return mixed
     */
    public function insert(Array $data)
    {
        $bean = new $this->bean($data);
        $bean->setCreated(date('Y-m-d H:i:s'));
        $bean->setUpdated(date('Y-m-d H:i:s'));
        $insertResult = $this->object->insert($this->table, $bean->toArray(null, SplBean::FILTER_NOT_NULL));
        return $insertResult;
    }



    public function __destruct()
    {
        $this->gc();
    }
}