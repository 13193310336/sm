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

    protected function table()
    {
        // TODO: Implement table() method.
        $this->table = 'spu_images';
    }

    protected function primaryKey()
    {
        // TODO: Implement primaryKey() method.
        $this->primaryKey = 'spu_img_id';
    }

    protected function bean()
    {
        // TODO: Implement bean() method.
        $this->bean = SpuImagesBean::class;
    }

}