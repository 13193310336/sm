<?php
/**
 * Created by PhpStorm.
 * Description: 商品图片
 * User: original
 * Date: 19-1-25
 * Time: 下午4:30
 */

namespace App\Model\Images;


use App\Model\Model;

class ImagesModel extends Model
{

    protected function setTable()
    {
        // TODO: Implement setTable() method.
        $this->table = 'images';
    }

    protected function setPrimary()
    {
        // TODO: Implement setPrimary() method.
        $this->primaryKey = 'img_id';
    }

    protected function setBean()
    {
        // TODO: Implement setBean() method.
        $this->bean = ImagesBean::class;
    }
}