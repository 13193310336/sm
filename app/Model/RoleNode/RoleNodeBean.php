<?php
/**
 * Created by PhpStorm.
 * Description: 角色节点关联
 * User: original
 * Date: 19-1-8
 * Time: 下午8:44
 */
namespace App\Model\RoleNode;

use EasySwoole\Spl\SplBean;

class RoleNodeBean extends SplBean
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
    protected $rn_id;

    /**
     * @var
     * @type            varchar
     * @typeLength      50
     * @notNull         true
     * @comment         角色ID
     */
    protected $role_id;

    /**
     * @var
     * @type            varchar
     * @typeLength      50
     * @notNull         true
     * @comment         节点ID
     */
    protected $node_id;

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
    public function getRnId()
    {
        return $this->rn_id;
    }

    /**
     * @param mixed $rn_id
     */
    public function setRnId($rn_id)
    {
        $this->rn_id = $rn_id;
    }

    /**
     * @return mixed
     */
    public function getRoleId()
    {
        return $this->role_id;
    }

    /**
     * @param mixed $role_id
     */
    public function setRoleId($role_id)
    {
        $this->role_id = $role_id;
    }

    /**
     * @return mixed
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * @param mixed $node_id
     */
    public function setNodeId($node_id)
    {
        $this->node_id = $node_id;
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