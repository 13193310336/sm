<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午5:23
 */
namespace App\Model\AttributeOptionRelation;

use EasySwoole\Spl\SplBean;

class AttributeOptionRelationBean extends SplBean
{
    /**
     * @var
     * @primary         true
     * @autoIncrement   true
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         主键
     */
    protected $ao_id;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         属性集ID
     */
    protected $set_id;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         属性ID
     */
    protected $attribute_id;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         属性选项ID
     */
    protected $option_id;

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
    public function getAoId()
    {
        return $this->ao_id;
    }

    /**
     * @param mixed $ao_id
     */
    public function setAoId($ao_id)
    {
        $this->ao_id = $ao_id;
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
    public function getAttributeId()
    {
        return $this->attribute_id;
    }

    /**
     * @param mixed $attribute_id
     */
    public function setAttributeId($attribute_id)
    {
        $this->attribute_id = $attribute_id;
    }

    /**
     * @return mixed
     */
    public function getOptionId()
    {
        return $this->option_id;
    }

    /**
     * @param mixed $option_id
     */
    public function setOptionId($option_id)
    {
        $this->option_id = $option_id;
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