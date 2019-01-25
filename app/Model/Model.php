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
use EasySwoole\Component\Context;
use EasySwoole\Component\Di;
use EasySwoole\Component\Pool\PoolManager;
use EasySwoole\Spl\SplBean;
use PhpParser\Node\Scalar\String_;

abstract class Model
{
    private $object;

    protected $table = '';

    protected $primaryKey = '';

    /**
     * @var SplBean|null
     */
    protected $bean = null;

    public function __construct(MysqlObject $object = null)
    {
        $this->object = $object;

        /**
         * 如果没有传入链接，从连接池取一个
         */
        if (!$object)
            $this->object = PoolManager::getInstance()->getPool(MysqlPool::class)->getObj(config('database.mysql.POOL_TIME_OUT'));

        $this->setTable();
        $this->setPrimary();
        $this->setBean();
    }

    /**
     * 设置表名
     * @return string
     */
    abstract protected function setTable();

    /**
     * 设置主键
     * @return string
     */
    abstract protected function setPrimary();

    /**
     * 设置Bean
     * @return string
     */
    abstract protected function setBean();

    /**
     * 得到bean对象
     * @param $data
     * @return SplBean
     */
    public function getBean($data): SplBean
    {
        return new $this->bean($data);
    }


    public function getTable(): string
    {
        return $this->table;
    }

    public function getPrimary(): String
    {
        return $this->primaryKey;
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
        $httpQuery = Context::getInstance()->get(GlobalConst::CONTENT_HTTP_QUERY);
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
        $url = url(trim(Context::getInstance()->get(GlobalConst::CONTENT_URI)->getPath(), '/'));
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
        $bean = $this->getBean($data);
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
        $bean = $this->getBean($data);
        $bean->setUpdated(Carbon::now());
        return $this
            ->getConnect()
            ->where($this->getPrimary(), $primary)
            ->update($this->getTable(), $bean->toArray(null, SplBean::FILTER_NOT_NULL));
    }

    public function __destruct()
    {
        $this->recoveryConnect();
    }
}