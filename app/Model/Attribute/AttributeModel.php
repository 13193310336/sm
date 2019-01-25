<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午5:17
 */

namespace App\Model\Attribute;


use App\Model\Model;

class AttributeModel extends  Model
{

    public function setTable()
    {
        $this->table = 'attribute';
    }

    public function setPrimary()
    {
        $this->primaryKey = 'set_id';
    }

    protected function setBean()
    {
        // TODO: Implement setBean() method.
        $this->bean = AttributeBean::class;
    }
}