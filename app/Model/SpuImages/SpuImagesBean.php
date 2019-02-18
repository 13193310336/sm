<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午4:39
 */
namespace App\Model\SpuImages;

use EasySwoole\Spl\SplBean;

class SpuImagesBean extends SplBean
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
    protected $spu_img_id;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         图片Id
     */
    protected $img_id;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         spuId
     */
    protected $spu_id;

    /**
     * @var
     * @notNull         true
     * @type            tinyint
     * @typeLength      11
     * @comment         是否主图
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
    public function getSpuImgId()
    {
        return $this->spu_img_id;
    }

    /**
     * @param mixed $spu_img_id
     */
    public function setSpuImgId($spu_img_id)
    {
        $this->spu_img_id = $spu_img_id;
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