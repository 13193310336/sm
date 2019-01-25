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

    protected function setTable()
    {
        // TODO: Implement setTable() method.
        $this->table = 'spec';
    }

    protected function setPrimary()
    {
        // TODO: Implement setPrimary() method.
        $this->primaryKey = 'color_id';
    }

    protected function setBean()
    {
        // TODO: Implement setBean() method.
        $this->bean = SpecBean::class;
    }
}