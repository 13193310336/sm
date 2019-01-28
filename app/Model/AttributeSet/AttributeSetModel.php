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

    protected function table()
    {
        // TODO: Implement table() method.
        $this->table = 'attribute_set';
    }

    protected function primaryKey()
    {
        // TODO: Implement primaryKey() method.
        $this->primaryKey = 'set_id';
    }

    protected function bean()
    {
        // TODO: Implement bean() method.
        $this->bean = Attributebean::class;
    }
}