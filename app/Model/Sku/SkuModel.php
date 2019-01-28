<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午4:22
 */

namespace App\Model\Sku;


use App\Model\Model;

class SkuModel extends Model
{
    protected function table()
    {
        // TODO: Implement table() method.
        $this->table = 'sku';
    }

    protected function primaryKey()
    {
        // TODO: Implement primaryKey() method.
        $this->primaryKey = 'sku_id';
    }

    protected function bean()
    {
        // TODO: Implement bean() method.
        $this->bean = SkuBean::class;
    }
}