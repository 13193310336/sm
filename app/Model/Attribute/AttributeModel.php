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

    public function table()
    {
        $this->table = 'attribute';
    }

    public function primaryKey()
    {
        $this->primaryKey = 'attribute_id';
    }

    protected function bean()
    {
        $this->bean = AttributeBean::class;
    }

}