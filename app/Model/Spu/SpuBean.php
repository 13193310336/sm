<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午4:00
 */

namespace App\Model\Spu;


use EasySwoole\Spl\SplBean;

class SpuBean extends SplBean
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
    protected $spu_id;

    /**
     * @var
     * @notNull         true
     * @type            varchar
     * @typeLength      100
     * @comment         spu
     */
    protected $spu;

    /**
     * @var
     * @notNull         true
     * @type            varchar
     * @typeLength      50
     * @comment         spu标题
     */
    protected $spu_title;

    /**
     * @var
     * @notNull         true
     * @type            varchar
     * @typeLength      250
     * @comment         主图
     */
    protected $spu_main_image;

    /**
     * @var
     * @notNull         true
     * @type            varchar
     * @typeLength      500
     * @comment         spu介绍
     */
    protected $spu_description;

    /**
     * @var
     * @notNull         true
     * @type            decimal
     * @typeLength      10
     * @typeFloat       4
     * @comment         spu最小价格
     */
    protected $spu_min_price;

    /**
     * @var
     * @notNull         true
     * @type            decimal
     * @typeLength      10
     * @typeFloat       4
     * @comment         spu最大价格
     */
    protected $spu_max_price;

    /**
     * @var
     * @notNull         true
     * @type            decimal
     * @typeLength      10
     * @typeFloat       4
     * @comment         spu平均价格
     */
    protected $spu_avg_price;

    /**
     * @var
     * @notNull         true
     * @type            tinyint
     * @typeLength      1
     * @comment         spu状态
     */
    protected $spu_status;

    /**
     * @var
     * @notNull         true
     * @type            varchar
     * @typeLength      250
     * @comment         spu备注
     */
    protected $spu_remark;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         栏目Id
     */
    protected $category_id;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         sku数量
     */
    protected $sku_num;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         商户id
     */
    protected $shop_id;

    /**
     * @var
     * @notNull         true
     * @type            tinyint
     * @typeLength      1
     * @comment         是否sku主图
     */
    protected $main;

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
    public function getSpuId()
    {
        return $this->spu_id;
    }

    /**
     * @param mixed $spu_id
     */
    public function setSpuId($spu_id)
    {
        $this->spu_id = $spu_id;
    }

    /**
     * @return mixed
     */
    public function getSpu()
    {
        return $this->spu;
    }

    /**
     * @param mixed $spu
     */
    public function setSpu($spu)
    {
        $this->spu = $spu;
    }

    /**
     * @return mixed
     */
    public function getSpuTitle()
    {
        return $this->spu_title;
    }

    /**
     * @param mixed $spu_title
     */
    public function setSpuTitle($spu_title)
    {
        $this->spu_title = $spu_title;
    }

    /**
     * @return mixed
     */
    public function getSpuMainImage()
    {
        return $this->spu_main_image;
    }

    /**
     * @param mixed $spu_main_image
     */
    public function setSpuMainImage($spu_main_image)
    {
        $this->spu_main_image = $spu_main_image;
    }

    /**
     * @return mixed
     */
    public function getSpuDescription()
    {
        return $this->spu_description;
    }

    /**
     * @param mixed $spu_description
     */
    public function setSpuDescription($spu_description)
    {
        $this->spu_description = $spu_description;
    }

    /**
     * @return mixed
     */
    public function getSpuMinPrice()
    {
        return $this->spu_min_price;
    }

    /**
     * @param mixed $spu_min_price
     */
    public function setSpuMinPrice($spu_min_price)
    {
        $this->spu_min_price = $spu_min_price;
    }

    /**
     * @return mixed
     */
    public function getSpuMaxPrice()
    {
        return $this->spu_max_price;
    }

    /**
     * @param mixed $spu_max_price
     */
    public function setSpuMaxPrice($spu_max_price)
    {
        $this->spu_max_price = $spu_max_price;
    }

    /**
     * @return mixed
     */
    public function getSpuAvgPrice()
    {
        return $this->spu_avg_price;
    }

    /**
     * @param mixed $spu_avg_price
     */
    public function setSpuAvgPrice($spu_avg_price)
    {
        $this->spu_avg_price = $spu_avg_price;
    }

    /**
     * @return mixed
     */
    public function getSpuStatus()
    {
        return $this->spu_status;
    }

    /**
     * @param mixed $spu_status
     */
    public function setSpuStatus($spu_status)
    {
        $this->spu_status = $spu_status;
    }

    /**
     * @return mixed
     */
    public function getSpuRemark()
    {
        return $this->spu_remark;
    }

    /**
     * @param mixed $spu_remark
     */
    public function setSpuRemark($spu_remark)
    {
        $this->spu_remark = $spu_remark;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * @return mixed
     */
    public function getSkuNum()
    {
        return $this->sku_num;
    }

    /**
     * @param mixed $sku_num
     */
    public function setSkuNum($sku_num)
    {
        $this->sku_num = $sku_num;
    }

    /**
     * @return mixed
     */
    public function getShopId()
    {
        return $this->shop_id;
    }

    /**
     * @param mixed $shop_id
     */
    public function setShopId($shop_id)
    {
        $this->shop_id = $shop_id;
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