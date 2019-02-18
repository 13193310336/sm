<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午4:34
 */
namespace App\Model\SkuImages;

use EasySwoole\Spl\SplBean;

class SkuImagesBean extends SplBean
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
    protected $sku_img_id;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @index           true
     * @indexType       normal
     * @indexMethod     btree
     * @comment         skuID
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
     * @comment         图片ID
     */
    protected $img_id;

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
    public function getSkuImgId()
    {
        return $this->sku_img_id;
    }

    /**
     * @param mixed $sku_img_id
     */
    public function setSkuImgId($sku_img_id)
    {
        $this->sku_img_id = $sku_img_id;
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
    public function getImgId()
    {
        return $this->img_id;
    }

    /**
     * @param mixed $img_id
     */
    public function setImgId($img_id)
    {
        $this->img_id = $img_id;
    }

    /**
     * @return mixed
     */
    public function getMain()
    {
        return $this->main;
    }

    /**
     * @param mixed $main
     */
    public function setMain($main)
    {
        $this->main = $main;
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