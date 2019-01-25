<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午5:43
 */
namespace App\Model\AttributeSetCategory;

use EasySwoole\Spl\SplBean;

class AttributeSetCategoryBean extends SplBean
{
    protected $asc_id;
    protected $set_id;
    protected $category_id;
    protected $created;
    protected $updated;
    /**
     * @return mixed
     */
    public function getAscId()
    {
        return $this->asc_id;
    }

    /**
     * @param mixed $asc_id
     */
    public function setAscId($asc_id)
    {
        $this->asc_id = $asc_id;
    }

    /**
     * @return mixed
     */
    public function getSetId()
    {
        return $this->set_id;
    }

    /**
     * @param mixed $set_id
     */
    public function setSetId($set_id)
    {
        $this->set_id = $set_id;
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