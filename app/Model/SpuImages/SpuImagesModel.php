<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午4:41
 */

namespace App\Model\SpuImages;


use App\Model\Model;

class SpuImagesModel extends Model
{

    protected function setTable()
    {
        // TODO: Implement setTable() method.
        $this->table = 'spu_images';
    }

    protected function setPrimary()
    {
        // TODO: Implement setPrimary() method.
        $this->primaryKey = 'spu_img_id';
    }

    protected function setBean()
    {
        // TODO: Implement setBean() method.
        $this->bean = SpuImagesBean::class;
    }

}