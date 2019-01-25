<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午4:10
 */

namespace App\Model\Sku;

use EasySwoole\Spl\SplBean;

class SkuBean extends SplBean
{
    protected $sku_id;
    protected $spu_id;
    protected $spu;
    protected $sku;
    protected $sku_title;
    protected $sku_main_images;
    protected $sku_length;
    protected $sku_width;
    protected $sku_height;
    protected $sku_weight;
    protected $sku_status;
    protected $barcode;
    protected $category_id;
    protected $color_id;
    protected $color_name;
    protected $spec_id;
    protected $spec_name;
    protected $price;
    protected $last_price;
    protected $stock_model;
    protected $stock_num;
    protected $shop_id;
    protected $created;
    protected $updated;

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
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return mixed
     */
    public function getSkuTitle()
    {
        return $this->sku_title;
    }

    /**
     * @param mixed $sku_title
     */
    public function setSkuTitle($sku_title)
    {
        $this->sku_title = $sku_title;
    }

    /**
     * @return mixed
     */
    public function getSkuMainImages()
    {
        return $this->sku_main_images;
    }

    /**
     * @param mixed $sku_main_images
     */
    public function setSkuMainImages($sku_main_images)
    {
        $this->sku_main_images = $sku_main_images;
    }

    /**
     * @return mixed
     */
    public function getSkuLength()
    {
        return $this->sku_length;
    }

    /**
     * @param mixed $sku_length
     */
    public function setSkuLength($sku_length)
    {
        $this->sku_length = $sku_length;
    }

    /**
     * @return mixed
     */
    public function getSkuWidth()
    {
        return $this->sku_width;
    }

    /**
     * @param mixed $sku_width
     */
    public function setSkuWidth($sku_width)
    {
        $this->sku_width = $sku_width;
    }

    /**
     * @return mixed
     */
    public function getSkuHeight()
    {
        return $this->sku_height;
    }

    /**
     * @param mixed $sku_height
     */
    public function setSkuHeight($sku_height)
    {
        $this->sku_height = $sku_height;
    }

    /**
     * @return mixed
     */
    public function getSkuWeight()
    {
        return $this->sku_weight;
    }

    /**
     * @param mixed $sku_weight
     */
    public function setSkuWeight($sku_weight)
    {
        $this->sku_weight = $sku_weight;
    }

    /**
     * @return mixed
     */
    public function getSkuStatus()
    {
        return $this->sku_status;
    }

    /**
     * @param mixed $sku_status
     */
    public function setSkuStatus($sku_status)
    {
        $this->sku_status = $sku_status;
    }

    /**
     * @return mixed
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param mixed $barcode
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
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
    public function getColorId()
    {
        return $this->color_id;
    }

    /**
     * @param mixed $color_id
     */
    public function setColorId($color_id)
    {
        $this->color_id = $color_id;
    }

    /**
     * @return mixed
     */
    public function getColorName()
    {
        return $this->color_name;
    }

    /**
     * @param mixed $color_name
     */
    public function setColorName($color_name)
    {
        $this->color_name = $color_name;
    }

    /**
     * @return mixed
     */
    public function getSpecId()
    {
        return $this->spec_id;
    }

    /**
     * @param mixed $spec_id
     */
    public function setSpecId($spec_id)
    {
        $this->spec_id = $spec_id;
    }

    /**
     * @return mixed
     */
    public function getSpecName()
    {
        return $this->spec_name;
    }

    /**
     * @param mixed $spec_name
     */
    public function setSpecName($spec_name)
    {
        $this->spec_name = $spec_name;
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
    public function getStockModel()
    {
        return $this->stock_model;
    }

    /**
     * @param mixed $stock_model
     */
    public function setStockModel($stock_model)
    {
        $this->stock_model = $stock_model;
    }

    /**
     * @return mixed
     */
    public function getStockNum()
    {
        return $this->stock_num;
    }

    /**
     * @param mixed $stock_num
     */
    public function setStockNum($stock_num)
    {
        $this->stock_num = $stock_num;
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