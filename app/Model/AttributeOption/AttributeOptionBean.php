<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午5:19
 */

namespace App\Model\AttributeOption;

use EasySwoole\Spl\SplBean;

class AttributeOptionBean extends SplBean
{
    protected $option_id;
    protected $option_name;
    protected $option_code;
    protected $created;
    protected $updated;

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
    public function getOptionName()
    {
        return $this->option_name;
    }

    /**
     * @param mixed $option_name
     */
    public function setOptionName($option_name)
    {
        $this->option_name = $option_name;
    }


    /**
     * @return mixed
     */
    public function getOptionCode()
    {
        return $this->option_code;
    }

    /**
     * @param mixed $option_code
     */
    public function setOptionCode($option_code)
    {
        $this->option_code = $option_code;
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