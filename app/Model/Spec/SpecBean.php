<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午3:42
 */
namespace App\Model\Spec;

use EasySwoole\Spl\SplBean;

class SpecBean extends SplBean
{
    protected $spec_id;
    protected $spec_name;
    protected $created;
    protected $updated;
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
    public function getSpecName()
    {
        return $this->spec_name;
    }

    /**
     * @param mixed $spec_name
     */
    public function setSpecName($spec_name)
    {
        $this->spec_name = $spec_name;
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