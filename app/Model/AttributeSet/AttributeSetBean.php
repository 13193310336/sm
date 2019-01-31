<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午5:09
 */
namespace App\Model\AttributeSet;

use EasySwoole\Spl\SplBean;

class AttributeSetBean extends SplBean
{
    /**
     * @var
     * @primary         true
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @autoIncrement   true
     * @comment         属性集合id
     */
    protected $set_id;

    /**
     * @var
     * @type            varchar
     * @typeLength      50
     * @notNull         true
     * @comment         属性集C名称
     */
    protected $set_name;

    /**
     * @var
     * @type            varchar
     * @typeLength      50
     * @notNull         true
     * @index           true
     * @indexType       unique
     * @indexMethod     btree
     * @comment         属性code
     */
    protected $set_code;

    /**
     * @var
     * @type            datetime
     * @typeLength      0
     * @comment         创建时间
     */
    protected $created;

    /**
     * @var
     * @type            datetime
     * @typeLength      0
     * @comment         修改时间
     */
    protected $updated;

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
    public function getSetName()
    {
        return $this->set_name;
    }

    /**
     * @param mixed $set_name
     */
    public function setSetName($set_name)
    {
        $this->set_name = $set_name;
    }

    /**
     * @return mixed
     */
    public function getSetCode()
    {
        return $this->set_code;
    }

    /**
     * @param mixed $set_code
     */
    public function setSetCode($set_code)
    {
        $this->set_code = $set_code;
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