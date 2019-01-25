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

    protected function setTable()
    {
        // TODO: Implement setTable() method.
        $this->table = 'category_color';
    }

    protected function setPrimary()
    {
        // TODO: Implement setPrimary() method.
        $this->primaryKey = 'category_color_id';
    }

    protected function setBean()
    {
        // TODO: Implement setBean() method.
        $this->bean = CategoryColorBean::class;
    }
}