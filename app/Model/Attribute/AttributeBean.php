<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午5:14
 */
namespace App\Model\Attribute;

use EasySwoole\Spl\SplBean;

class AttributeBean extends SplBean
{
    protected $attribute_id;
    protected $attribute_name;
    protected $attribute_code;
    protected $attribute_type;
    protected $attribute_must;
    protected $created;
    protected $updated;
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
    public function getAttributeName()
    {
        return $this->attribute_name;
    }

    /**
     * @param mixed $attribute_name
     */
    public function setAttributeName($attribute_name)
    {
        $this->attribute_name = $attribute_name;
    }

    /**
     * @return mixed
     */
    public function getAttributeCode()
    {
        return $this->attribute_code;
    }

    /**
     * @param mixed $attribute_code
     */
    public function setAttributeCode($attribute_code)
    {
        $this->attribute_code = $attribute_code;
    }

    /**
     * @return mixed
     */
    public function getAttributeType()
    {
        return $this->attribute_type;
    }

    /**
     * @param mixed $attribute_type
     */
    public function setAttributeType($attribute_type)
    {
        $this->attribute_type = $attribute_type;
    }

    /**
     * @return mixed
     */
    public function getAttributeMust()
    {
        return $this->attribute_must;
    }

    /**
     * @param mixed $attribute_must
     */
    public function setAttributeMust($attribute_must)
    {
        $this->attribute_must = $attribute_must;
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