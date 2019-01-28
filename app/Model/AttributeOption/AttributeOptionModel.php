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

    protected function table()
    {
        // TODO: Implement table() method.
        $this->table = 'attribute_option';
    }

    protected function primaryKey()
    {
        // TODO: Implement primaryKey() method.
        $this->primaryKey = 'option_id';
    }

    protected function bean()
    {
        // TODO: Implement bean() method.
        $this->bean = AttributeOptionBean::class;
    }
}