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

    protected function table()
    {
        // TODO: Implement table() method.
        $this->table = 'sku_price';
    }

    protected function primaryKey()
    {
        // TODO: Implement primaryKey() method.
        $this->primaryKey = 'price_id';
    }

    protected function bean()
    {
        // TODO: Implement bean() method.
        $this->bean = SkuPriceBean::class;
    }
}