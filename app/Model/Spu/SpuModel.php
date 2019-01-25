<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午4:08
 */

namespace App\Model\Spu;


use App\Model\Model;

class SpuModel extends Model
{

    protected function setTable()
    {
        // TODO: Implement setTable() method.
        $this->table = 'spu';
    }

    protected function setPrimary()
    {
        // TODO: Implement setPrimary() method.
        $this->primaryKey = 'spu_id';
    }

    protected function setBean()
    {
        // TODO: Implement setBean() method.
        $this->bean = SpuBean::class;
    }
}