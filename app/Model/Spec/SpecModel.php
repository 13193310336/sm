<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午3:43
 */

namespace App\Model\Spec;


use App\Model\Model;

class SpecModel extends Model
{

    protected function table()
    {
        // TODO: Implement table() method.
        $this->table = 'spec';
    }

    protected function primaryKey()
    {
        // TODO: Implement primaryKey() method.
        $this->primaryKey = 'color_id';
    }

    protected function bean()
    {
        // TODO: Implement bean() method.
        $this->bean = SpecBean::class;
    }
}