<?php
/**
 * Created by PhpStorm.
 * Description: sku图片关联
 * User: original
 * Date: 19-1-25
 * Time: 下午4:36
 */

namespace App\Model\SkuImages;


use App\Model\Model;

class SkuModel extends Model
{

    protected function setTable()
    {
        // TODO: Implement setTable() method.
        $this->table = 'sku_images';
    }

    protected function setPrimary()
    {
        // TODO: Implement setPrimary() method.
        $this->primaryKey = 'sku_img_id';
    }

    protected function setBean()
    {
        // TODO: Implement setBean() method.
        $this->bean = SkuImagesBean::class;
    }
}