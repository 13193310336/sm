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
    /**
     * @var
     * @primary         true
     * @autoIncrement   true
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         属性选项ID
     */
    protected $option_id;

    /**
     * @var
     * @notNull         true
     * @type            varchar
     * @typeLength      100
     * @comment         选项名称
     */
    protected $option_name;

    /**
     * @var
     * @notNull         true
     * @type            varchar
     * @typeLength      100
     * @index           true
     * @indexType       unique
     * @indexMethod     btree
     * @comment         选项code
     */
    protected $option_code;

    /**
     * @var
     * @notNull         true
     * @type            datetime
     * @typeLength      0
     */
    protected $created;

    /**
     * @var
     * @notNull         true
     * @type            datetime
     * @typeLength      0
     */
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