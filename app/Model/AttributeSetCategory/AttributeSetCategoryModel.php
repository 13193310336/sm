<?php
/**
 * Created by PhpStorm.
 * Description: 栏目和属性集
 * User: original
 * Date: 19-1-25
 * Time: 下午5:46
 */

namespace App\Model\AttributeSetCategory;


use App\Model\Model;

class AttributeSetCategoryModel extends Model
{
    protected function table()
    {
        // TODO: Implement table() method.
        $this->table= 'attribute_set_category';
    }

    protected function primaryKey()
    {
        // TODO: Implement primaryKey() method.
        $this->primaryKey = 'asc_id';
    }

    protected function bean()
    {
        // TODO: Implement bean() method.
        $this->bean = AttributeSetCategoryBean::class;
    }
}