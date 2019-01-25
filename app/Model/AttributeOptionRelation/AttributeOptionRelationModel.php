<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午5:26
 */

namespace App\Model\AttributeOptionRelation;


use App\Model\Model;

class AttributeOptionRelationModel extends Model
{

    protected function setTable()
    {
        // TODO: Implement setTable() method.
        $this->table = 'attribute_option';
    }

    protected function setPrimary()
    {
        // TODO: Implement setPrimary() method.
        $this->primaryKey = 'ao_id';
    }

    protected function setBean()
    {
        // TODO: Implement setBean() method.
        $this->bean = AttributeOptionRelationModel::class;
    }
}