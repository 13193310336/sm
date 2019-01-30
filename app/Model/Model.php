<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-6
 * Time: 下午9:56
 */
namespace App\Model;

use function App\Component\config;
use App\Component\GlobalConst;
use App\Component\Pool\MysqlObject;
use App\Component\Pool\MysqlPool;
use function App\Component\url;
use Carbon\Carbon;
use EasySwoole\Component\Context\ContextManager;
use EasySwoole\Component\Pool\PoolManager;
use EasySwoole\Spl\SplBean;

abstract class Model
{
    /**
     * 链接对象
     * @var MysqlObject
     */
    private $object;

    /**
     * 模型回收时是否自动释放连接池链接
     * @var bool
     */
    private $autoReleaseConnect;

    /**
     * 数据表名称
     * @var string
     */
    protected $table = '';

    /**
     * 数据表主键
     * @var string
     */
    protected $primaryKey = '';

    /**
     * 数据模型Bean对象
     * @var SplBean|null
     */
    protected $bean = null;

    /**
     * Model constructor.
     * @param MysqlObject|null $object  链接
     * @param bool $autoGetConnect      链接不存在是否自动获取链接
     * @param bool $autoReleaseConnect  是否自动释放链接
     */
    public function __construct(MysqlObject $object = null, $autoGetConnect = true, $autoReleaseConnect = true)
    {
        $this->object = $object;
        $this->autoReleaseConnect = $autoReleaseConnect;
        /**
         * 如果没有传入链接，从连接池取一个
         */
        if (!$object && $autoReleaseConnect) {
            $this->object = PoolManager::getInstance()
                ->getPool(MysqlPool::class)
                ->getObj(config('database.mysql.POOL_TIME_OUT'));
        }
        $this->table();
        $this->primaryKey();
        $this->bean();
    }

    /**
     * 设置表名
     * @return string
     */
    abstract protected function table();

    /**
     * 设置主键
     * @return string
     */
    abstract protected function primaryKey();

    /**
     * 设置Bean
     * @return string
     */
    abstract protected function bean();

    /**
     * 得到bean对象
     * @param array $data
     * @return object
     */
    public function getDataBean(Array $data = [])
    {
        $reflection = new \ReflectionClass($this->bean);
        return $reflection->newInstanceArgs($data);
    }

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
     * 通用分页
     * @param MysqlObject $query
     * @param string $select
     * @param int $pageSize
     * @return array
     */
    public function page(MysqlObject $query, string $select = '*', int $pageSize = 15)
    {
        $page = 1;
        $httpQuery = ContextManager::getInstance()->get(GlobalConst::CONTENT_HTTP_QUERY);
        !isset($httpQuery['page']) ?:  $page = $httpQuery['page'];
        //总数
        $total = $query->count($this->getTable());
        //总页数
        $totalPage = (int) ceil($total / $pageSize);
        //上一页
        $prevPage = $page > 1 ? $page - 1 : 1;
        //下一页
        $nextPage = $page + 1 <= $totalPage ? $page + 1 : $page;
        //开始条数
        $startRows = ($page - 1) * $pageSize;
        //结束条数
        $endRows = $startRows + $pageSize;
        //数据
        $data = $query->get($this->getTable(), [$startRows, $pageSize], $select);
        $url = url(trim(ContextManager::getInstance()->get(GlobalConst::CONTENT_URI)->getPath(), '/'));
        $httpQuery['page'] = $page;
        $currentUrl = $url . '?' . http_build_query($httpQuery);
        $httpQuery['page'] = $prevPage;
        $prevUrl = $url . '?' . http_build_query($httpQuery);
        $httpQuery['page'] = $nextPage;
        $nextUrl = $url . '?' . http_build_query($httpQuery);
        return [
            'data' => $data,
            'page' => [
                'total'     => $total,
                'totalPage' => $totalPage,
                'prevPage'  => $prevPage,
                'prevUrl'   => $prevUrl,
                'current'   => $page,
                'currentUrl'=> $currentUrl,
                'nextPage'  => $nextPage,
                'nextUrl'   => $nextUrl,
                'pageSize'  => $pageSize,
                'startRows' => $startRows,
                'endRows'   => $endRows
            ],
        ];
    }

    /**
     * 通用获取单条数据
     * @param bool $primary
     * @return mixed
     */
    public function find($primary = false)
    {
        if ($primary)
            return $this->getConnect()->where($this->getPrimary(), $primary)->getOne($this->getTable());
        else if ($primary === false)
            return $this->getConnect()->getOne($this->getTable());
    }

    /**
     * 通用插入方法
     * @param array $data
     * @return mixed
     */
    public function insert(array $data)
    {
        $bean = $this->getDataBean($data);
        $bean->setCreated(Carbon::now());
        $bean->setUpdated(Carbon::now());
        $insertResult = $this->getConnect()->insert($this->getTable(), $bean->toArray(null, SplBean::FILTER_NOT_NULL));
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
        $bean = $this->getDataBean($data);
        $bean->setUpdated(Carbon::now());
        return $this
            ->getConnect()
            ->where($this->getPrimary(), $primary)
            ->update($this->getTable(), $bean->toArray(null, SplBean::FILTER_NOT_NULL));
    }

    public function getBean(): string
    {
        return $this->bean;
    }

    public function getTable(): string
    {
        return $this->table;
    }

    public function getPrimary(): String
    {
        return $this->primaryKey;
    }

    public function getIndex()
    {
        return $this->index;
    }

    public function __destruct()
    {
        if ($this->autoReleaseConnect) {
            $this->recoveryConnect();
        }
    }
}