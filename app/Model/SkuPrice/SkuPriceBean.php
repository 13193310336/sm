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

    /**
     * @var
     * @primary         true
     * @notNull         true
     * @autoIncrement   true
     * @type            int
     * @typeLength      11
     * @comment         主键
     */
    protected $price_id;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @index           true
     * @indexType       normal
     * @indexMethod     btree
     * @comment         图片ID
     */
    protected $sku_id;

    /**
     * @var
     * @notNull         true
     * @type            decimal
     * @typeLength      10
     * @typeFloat       4
     * @comment         当前价格
     */
    protected $price;

    /**
     * @var
     * @notNull         true
     * @type            decimal
     * @typeLength      10
     * @typeFloat       4
     * @comment         上一次价格
     */
    protected $last_price;
    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         与上次价格相差绝对值
     */
    protected $last_absolute_price;

    /**
     * @var
     * @notNull         true
     * @type            tinyint
     * @typeLength      1
     * @comment         与上次价格比较上升还是下降
     */
    protected $up_or_down;

    /**
     * @var
     * @notNull         true
     * @type            decimal
     * @typeLength      10
     * @typeFloat       2
     * @comment         与上次价格比较百分比
     */
    protected $change_percentage;

    /**
     * @var
     * @type            datetime
     * @typeLength      0
     * @comment         创建时间
     */
    protected $created;

    /**
     * @var
     * @type            datetime
     * @typeLength      0
     * @comment         修改时间
     */
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