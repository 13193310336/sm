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

    protected function table()
    {
        // TODO: Implement table() method.
        $this->table = 'color';
    }

    protected function primaryKey()
    {
        // TODO: Implement primaryKey() method.
        $this->primaryKey = 'color_id';
    }

    protected function bean()
    {
        // TODO: Implement bean() method.
        $this->bean = ColorBean::class;
    }

}