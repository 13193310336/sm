<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午3:45
 */
namespace App\Model\CategoryColor;

use EasySwoole\Spl\SplBean;

class CategoryColorBean extends SplBean
{
    /**
     * @var
     * @primary         true
     * @type            int
     * @typeLength      11
     * @notNull         true
     * @autoIncrement   true
     * @comment         逐渐
     */
    protected $category_color_id;

    /**
     * @var
     * @type            int
     * @typeLength      11
     * @notNull         true
     * @comment         栏目ID
     */
    protected $category_id;

    /**
     * @var
     * @type            int
     * @typeLength      11
     * @notNull         true
     * @comment         颜色ID
     */
    protected $color_id;

    /**
     * @var
     * @type            datetime
     * @typeLength      0
     * @notNull         true
     * @comment         创建时间
     */
    protected $created;

    /**
     * @var
     * @type            datetime
     * @typeLength      0
     * @notNull         true
     * @comment         修改时间
     */
    protected $updated;

    /**
     * @return mixed
     */
    public function getCategoryColorId()
    {
        return $this->category_color_id;
    }

    /**
     * @param mixed $category_color_id
     */
    public function setCategoryColorId($category_color_id)
    {
        $this->category_color_id = $category_color_id;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * @return mixed
     */
    public function getColorId()
    {
        return $this->color_id;
    }

    /**
     * @param mixed $color_id
     */
    public function setColorId($color_id)
    {
        $this->color_id = $color_id;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param mixed $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
}