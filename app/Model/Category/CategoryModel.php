<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午3:36
 */

namespace App\Model\Category;


use App\Model\Model;

class CategoryModel extends Model
{
    protected function setTable()
    {
        // TODO: Implement setTable() method.
        $this->table = 'category';
    }

    protected function setPrimary()
    {
        // TODO: Implement setPrimary() method.
        $this->primaryKey = 'category_id';
    }

    protected function setBean()
    {
        // TODO: Implement setBean() method.
        $this->bean = CategoryBean::class;
    }
}