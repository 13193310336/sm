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
    protected $spu_id;
    protected $spu;
    protected $spu_title;
    protected $spu_main_image;
    protected $spu_description;
    protected $spu_min_price;
    protected $spu_max_price;
    protected $spu_avg_price;
    protected $spu_status;
    protected $spu_remark;
    protected $category_id;
    protected $sku_num;
    protected $shop_id;
    protected $created;
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