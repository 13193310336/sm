<?php
/**
 * Created by PhpStorm.
 * Description: 历史价格
 * User: original
 * Date: 19-1-25
 * Time: 下午5:04
 */

namespace App\Model\HistoryPrice;


use App\Model\Model;

class HistoryPriceModel extends Model
{

    protected function setTable()
    {
        $this->table = 'history_price';
    }

    protected function setPrimary()
    {
        $this->primaryKey = 'history_price_id';
    }

    protected function setBean()
    {
        // TODO: Implement setBean() method.
        $this->bean = HistoryPriceBean::class;
    }
}