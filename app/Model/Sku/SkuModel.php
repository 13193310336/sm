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
    protected function setTable()
    {
        // TODO: Implement setTable() method.
        $this->table = 'sku';
    }

    protected function setPrimary()
    {
        // TODO: Implement setPrimary() method.
        $this->primaryKey = 'sku_id';
    }

    protected function setBean()
    {
        // TODO: Implement setBean() method.
        $this->bean = SkuBean::class;
    }
}