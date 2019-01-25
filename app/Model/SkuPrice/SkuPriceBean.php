<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午4:51
 */
namespace App\Model\SkuPrice;

use EasySwoole\Spl\SplBean;

class SkuPriceBean extends SplBean
{

    protected $price_id;
    protected $sku_id;
    protected $price;
    protected $last_price;
    /**
     * 与上次价格相差绝对值
     * @var
     */
    protected $last_absolute_price;
    protected $up_or_down;
    /**
     * 与上次价格比较百分比
     * @var
     */
    protected $change_percentage;
    protected $created;
    protected $updated;

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
    public function getSkuId()
    {
        return $this->sku_id;
    }

    /**
     * @param mixed $sku_id
     */
    public function setSkuId($sku_id)
    {
        $this->sku_id = $sku_id;
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
    public function getLastAbsolutePrice()
    {
        return $this->last_absolute_price;
    }

    /**
     * @param mixed $last_absolute_price
     */
    public function setLastAbsolutePrice($last_absolute_price)
    {
        $this->last_absolute_price = $last_absolute_price;
    }

    /**
     * @return mixed
     */
    public function getUpOrDown()
    {
        return $this->up_or_down;
    }

    /**
     * @param mixed $up_or_down
     */
    public function setUpOrDown($up_or_down)
    {
        $this->up_or_down = $up_or_down;
    }

    /**
     * @return mixed
     */
    public function getChangePercentage()
    {
        return $this->change_percentage;
    }

    /**
     * @param mixed $change_percentage
     */
    public function setChangePercentage($change_percentage)
    {
        $this->change_percentage = $change_percentage;
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