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
    protected $set_id;
    protected $set_name;
    protected $set_code;
    protected $created;
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