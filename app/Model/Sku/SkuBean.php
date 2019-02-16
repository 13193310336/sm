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
    /**
     * @var
     * @primary         true
     * @notNull         true
     * @autoIncrement   true
     * @type            int
     * @typeLength      11
     * @comment         主键
     */
    protected $sku_id;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @index           true
     * @indexType       normal
     * @indexMethod     btree
     * @comment         SPUid
     */
    protected $spu_id;

    /**
     * @var
     * @notNull         true
     * @type            varchar
     * @typeLength      50
     * @index           true
     * @indexType       normal
     * @indexMethod     btree
     * @comment         spu
     *
     */
    protected $spu;

    /**
     * @var
     * @notNull         true
     * @type            varchar
     * @typeLength      50
     * @index           true
     * @indexType       normal
     * @indexMethod     btree
     * @comment         sku
     */
    protected $sku;

    /**
     * @var
     * @notNull         true
     * @type            varchar
     * @typeLength      100
     * @comment         sku标题
     */
    protected $sku_title;

    /**
     * @var
     * @notNull         true
     * @type            varchar
     * @typeLength      500
     * @comment         主图链接
     */
    protected $sku_main_image;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         sku长度
     */
    protected $sku_length;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         sku宽度
     */
    protected $sku_width;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         sku高度
     */
    protected $sku_height;

    /**
     * @var
     * @notNull         true
     * @type            float
     * @typeLength      10
     * @typeFloat       2
     * @comment         重量
     */
    protected $sku_weight;

    /**
     * @var
     * @notNull         true
     * @type            tinyint
     * @typeLength      2
     * @comment         sku状态
     */
    protected $sku_status;

    /**
     * @var
     * @notNull         true
     * @type            varchar
     * @typeLength      50
     * @comment         商品条码
     */
    protected $barcode;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         栏目ID
     */
    protected $category_id;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         颜色ID
     */
    protected $color_id;

    /**
     * @var
     * @notNull         true
     * @type            varchar
     * @typeLength      50
     * @comment         颜色名称
     */
    protected $color_name;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         规格ID
     */
    protected $spec_id;

    /**
     * @var
     * @notNull         true
     * @type            varchar
     * @typeLength      50
     * @comment         规格名称
     */
    protected $spec_name;

    /**
     * @var
     * @notNull         true
     * @type            decimal
     * @typeLength      10
     * @typeFloat       4
     * @comment         当前售价
     */
    protected $price;

    /**
     * @var
     * @notNull         true
     * @type            decimal
     * @typeLength      10
     * @typeFloat       4
     * @comment         上一次售价
     */
    protected $last_price;


    /**
     * @var
     * @notNull         true
     * @type            tinyint
     * @typeLength      2
     * @comment         库存模式
     */
    protected $stock_model;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         库存数量
     */
    protected $stock_num;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         商户ID
     */
    protected $shop_id;

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