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
    /**
     * @var
     * @primary         true
     * @type            int
     * @typeLength      11
     * @notNull         true
     * @autoIncrement   true
     * @comment         逐渐
     */
    protected $category_id;

    /**
     * @var
     * @type            varchar
     * @typeLength      50
     * @notNull         true
     * @comment         栏目名称
     */
    protected $category_name;

    /**
     * @var
     * @type            int
     * @typeLength      11
     * @notNull         true
     * @comment         栏目等级
     */
    protected $category_level;

    /**
     * @var
     * @type            decimal
     * @typeLength      10
     * @typeFloat       4
     * @notNull         true
     * @comment         栏目均价
     */
    protected $category_avg_price;

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