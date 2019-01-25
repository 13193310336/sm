<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午4:55
 */

namespace App\Model\SkuPrice;


use App\Model\Model;

class SkuPriceModel extends Model
{

    protected function setTable()
    {
        // TODO: Implement setTable() method.
        $this->table = 'sku_price';
    }

    protected function setPrimary()
    {
        // TODO: Implement setPrimary() method.
        $this->primaryKey = 'price_id';
    }

    protected function setBean()
    {
        // TODO: Implement setBean() method.
        $this->bean = SkuPriceBean::class;
    }
}