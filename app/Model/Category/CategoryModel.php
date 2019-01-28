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
    protected function table()
    {
        // TODO: Implement table() method.
        $this->table = 'category';
    }

    protected function primaryKey()
    {
        // TODO: Implement primaryKey() method.
        $this->primaryKey = 'category_id';
    }

    protected function bean()
    {
        // TODO: Implement bean() method.
        $this->bean = CategoryBean::class;
    }
}