<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午3:50
 */
namespace App\Model\CategorySpec;

use EasySwoole\Spl\SplBean;

class CategorySpecBean extends SplBean
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
    protected $category_spec_id;

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
     * @comment         规格ID
     */
    protected $spec_id;

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
    public function getCategorySpecId()
    {
        return $this->category_spec_id;
    }

    /**
     * @param mixed $category_spec_id
     */
    public function setCategorySpecId($category_spec_id)
    {
        $this->category_spec_id = $category_spec_id;
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
    public function getSpecId()
    {
        return $this->spec_id;
    }

    /**
     * @param mixed $spec_id
     */
    public function setSpecId($spec_id)
    {
        $this->spec_id = $spec_id;
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