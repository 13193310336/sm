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
    /**
     * @var
     * @primary         true
     * @type            int
     * @typeLength      11
     * @notNull         true
     * @autoIncrement   true
     * @comment         逐渐
     */
    protected $color_id;

    /**
     * @var
     * @type            varchar
     * @typeLength      50
     * @notNull         true
     * @comment         颜色名称
     */
    protected $color_name;
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