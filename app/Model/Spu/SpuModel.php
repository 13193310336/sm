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

    protected function table()
    {
        // TODO: Implement table() method.
        $this->table = 'spu';
    }

    protected function primaryKey()
    {
        // TODO: Implement primaryKey() method.
        $this->primaryKey = 'spu_id';
    }

    protected function bean()
    {
        // TODO: Implement bean() method.
        $this->bean = SpuBean::class;
    }
}