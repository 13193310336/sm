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
    protected $spu_img_id;
    protected $img_id;
    protected $spu_id;
    protected $main;
    protected $created;
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