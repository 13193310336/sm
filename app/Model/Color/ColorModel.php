<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午3:41
 */

namespace App\Model\Color;


use App\Model\Model;

class ColorModel extends Model
{

    protected function setTable()
    {
        // TODO: Implement setTable() method.
        $this->table = 'color';
    }

    protected function setPrimary()
    {
        // TODO: Implement setPrimary() method.
        $this->primaryKey = 'color_id';
    }

    protected function setBean()
    {
        // TODO: Implement setBean() method.
        $this->bean = ColorBean::class;
    }

}