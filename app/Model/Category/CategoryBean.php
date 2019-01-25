<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午3:33
 */
namespace App\Model\Category;

use EasySwoole\Spl\SplBean;

class CategoryBean extends SplBean
{
    protected $category_id;
    protected $category_name;
    protected $category_level;
    protected $category_avg_price;
    protected $created;
    protected $updated;
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
    public function getCategoryName()
    {
        return $this->category_name;
    }

    /**
     * @param mixed $category_name
     */
    public function setCategoryName($category_name)
    {
        $this->category_name = $category_name;
    }

    /**
     * @return mixed
     */
    public function getCategoryLevel()
    {
        return $this->category_level;
    }

    /**
     * @param mixed $category_level
     */
    public function setCategoryLevel($category_level)
    {
        $this->category_level = $category_level;
    }

    /**
     * @return mixed
     */
    public function getCategoryAvgPrice()
    {
        return $this->category_avg_price;
    }

    /**
     * @param mixed $category_avg_price
     */
    public function setCategoryAvgPrice($category_avg_price)
    {
        $this->category_avg_price = $category_avg_price;
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