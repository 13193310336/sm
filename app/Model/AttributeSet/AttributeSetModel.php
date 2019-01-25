<?php
/**
 * Created by PhpStorm.
 * Description: 属性集
 * User: original
 * Date: 19-1-25
 * Time: 下午5:11
 */

namespace App\Model\AttributeSet;


use App\Model\Model;

class AttributeSetModel extends Model
{

    protected function setTable()
    {
        // TODO: Implement setTable() method.
        $this->table = 'attribute_set';
    }

    protected function setPrimary()
    {
        // TODO: Implement setPrimary() method.
        $this->primaryKey = 'set_id';
    }

    protected function setBean()
    {
        // TODO: Implement setBean() method.
        $this->bean = AttributeSetBean::class;
    }
}