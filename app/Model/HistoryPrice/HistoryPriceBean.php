<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午4:57
 */
namespace App\Model\HistoryPrice;

use EasySwoole\Spl\SplBean;

class HistoryPriceBean extends SplBean
{
    /**
     * @var
     * @primary         true
     * @type            int
     * @typeLength      11
     * @notNull         true
     * @autoIncrement   true
     * @comment         逐渐
     */
    protected $history_price_id;

    /**
     * @var
     * @type            varchar
     * @typeLength      50
     * @notNull         true
     * @comment         价格ID
     */
    protected $price_id;


    /**
     * @var
     * @type            decimal
     * @typeLength      10
     * @typeFloat       4
     * @notNull         true
     * @comment         上次价格
     */
    protected $last_price;


    /**
     * @var
     * @type            decimal
     * @typeLength      10
     * @typeFloat       4
     * @notNull         true
     * @comment         当前价格
     */
    protected $price;


    /**
     * @var
     * @type            int
     * @typeLength      11
     * @notNull         true
     * @comment         改价原因
     */
    protected $change_reason;

    /**
     * @var
     * @type            datetime
     * @typeLength      0
     * @notNull         true
     * @comment         创建时间
     */
    protected $created;

    /**
     * @var
     * @type            datetime
     * @typeLength      0
     * @notNull         true
     * @comment         修改时间
     */
    protected $updated;


    /**
     * @return mixed
     */
    public function getHistoryPriceId()
    {
        return $this->history_price_id;
    }

    /**
     * @param mixed $history_price_id
     */
    public function setHistoryPriceId($history_price_id)
    {
        $this->history_price_id = $history_price_id;
    }

    /**
     * @return mixed
     */
    public function getPriceId()
    {
        return $this->price_id;
    }

    /**
     * @param mixed $price_id
     */
    public function setPriceId($price_id)
    {
        $this->price_id = $price_id;
    }

    /**
     * @return mixed
     */
    public function getLastPrice()
    {
        return $this->last_price;
    }

    /**
     * @param mixed $last_price
     */
    public function setLastPrice($last_price)
    {
        $this->last_price = $last_price;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getChangeReason()
    {
        return $this->change_reason;
    }

    /**
     * @param mixed $change_reason
     */
    public function setChangeReason($change_reason)
    {
        $this->change_reason = $change_reason;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param mixed $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

}