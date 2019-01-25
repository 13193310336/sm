<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-25
 * Time: 下午3:39
 */
namespace App\Model\Color;

use EasySwoole\Spl\SplBean;

class ColorBean extends SplBean
{
    protected $color_id;
    protected $color_name;
    protected $created;
    protected $updated;

    /**
     * @return mixed
     */
    public function getColorId()
    {
        return $this->color_id;
    }

    /**
     * @param mixed $color_id
     */
    public function setColorId($color_id)
    {
        $this->color_id = $color_id;
    }

    /**
     * @return mixed
     */
    public function getColorName()
    {
        return $this->color_name;
    }

    /**
     * @param mixed $color_name
     */
    public function setColorName($color_name)
    {
        $this->color_name = $color_name;
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