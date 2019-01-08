<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-8
 * Time: 下午8:44
 */
namespace App\Model\RoleNode;

use EasySwoole\Spl\SplBean;

class RoleNodeBean extends SplBean
{
    protected $rn_id;
    protected $role_id;
    protected $node_id;
    protected $created;
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