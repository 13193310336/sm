<?php
/**
 * Created by PhpStorm.
 * Description: 属性选项
 * User: original
 * Date: 19-1-25
 * Time: 下午5:21
 */

namespace App\Model\AttributeOption;


use App\Model\Model;

class AttributeOptionModel extends Model
{

    protected function setTable()
    {
        // TODO: Implement setTable() method.
        $this->table = 'attribute_option';
    }

    protected function setPrimary()
    {
        // TODO: Implement setPrimary() method.
        $this->primaryKey = 'option_id';
    }

    protected function setBean()
    {
        // TODO: Implement setBean() method.
        $this->bean = AttributeOptionBean::class;
    }
}