<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午3:45
 */
namespace App\Model\CategoryColor;

use App\Model\Spec\SpecBean;

class CategoryColorBean extends SpecBean
{
    protected $category_color_id;
    protected $category_id;
    protected $color_id;

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
    protected $created;
    protected $updated;
}