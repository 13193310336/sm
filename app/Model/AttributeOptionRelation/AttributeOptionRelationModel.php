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

    protected function table()
    {
        // TODO: Implement table() method.
        $this->table = 'attribute_option_relation';
    }

    protected function primaryKey()
    {
        // TODO: Implement primaryKey() method.
        $this->primaryKey = 'ao_id';
    }

    protected function bean()
    {
        // TODO: Implement bean() method.
        $this->bean = AttributeOptionRelationBean::class;
    }
}