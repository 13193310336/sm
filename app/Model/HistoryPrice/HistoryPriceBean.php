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
    protected $history_price_id;
    protected $price_id;
    protected $last_price;
    protected $price;
    protected $change_reason;
    protected $created;
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