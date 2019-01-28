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

    protected function table()
    {
        // TODO: Implement table() method.
        $this->table = 'category_spec';
    }

    protected function primaryKey()
    {
        // TODO: Implement primaryKey() method.
        $this->primaryKey = 'category_spec_id';
    }

    protected function bean()
    {
        // TODO: Implement bean() method.
        $this->bean = CategorySpecBean::class;
    }
}