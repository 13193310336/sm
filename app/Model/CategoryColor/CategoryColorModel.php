<?php
/**
 * Created by PhpStorm.
 * Description: 栏目颜色关联模型
 * User: original
 * Date: 19-1-25
 * Time: 下午3:47
 */

namespace App\Model\CategoryColor;


use App\Model\Model;

class CategoryColorModel extends Model
{

    protected function table()
    {
        // TODO: Implement table() method.
        $this->table = 'category_color';
    }

    protected function primaryKey()
    {
        // TODO: Implement primaryKey() method.
        $this->primaryKey = 'category_color_id';
    }

    protected function bean()
    {
        // TODO: Implement bean() method.
        $this->bean = CategoryColorBean::class;
    }
}