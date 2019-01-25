<?php
/**
 * Created by PhpStorm.
 * Description: 栏目规格关联
 * User: original
 * Date: 19-1-25
 * Time: 下午3:52
 */

namespace App\Model\CategorySpec;


use App\Model\Model;

class CategorySpecModel extends Model
{

    protected function setTable()
    {
        // TODO: Implement setTable() method.
        $this->table = 'category_spec';
    }

    protected function setPrimary()
    {
        // TODO: Implement setPrimary() method.
        $this->primaryKey = 'category_spec_id';
    }

    protected function setBean()
    {
        // TODO: Implement setBean() method.
        $this->bean = CategorySpecBean::class;
    }
}