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

    protected function table()
    {
        // TODO: Implement table() method.
        $this->table = 'images';
    }

    protected function primaryKey()
    {
        // TODO: Implement primaryKey() method.
        $this->primaryKey = 'img_id';
    }

    protected function bean()
    {
        // TODO: Implement bean() method.
        $this->bean = ImagesBean::class;
    }
}