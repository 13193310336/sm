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
    /**
     * @var
     * @primary         true
     * @notNull         true
     * @autoIncrement   true
     * @type            int
     * @typeLength      11
     * @comment         主键
     */
    protected $spec_id;

    /**
     * @var
     * @notNull         true
     * @type            varchar
     * @typeLength      50
     * @comment         规格名称
     */
    protected $spec_name;

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