<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-8
 * Time: 下午8:47
 */

namespace App\Model\RoleNode;


use App\Model\Model;
use App\Model\Node\NodeModel;
use EasySwoole\Spl\SplArray;

class RoleNodeModel extends Model
{
    protected function setTable()
    {
        // TODO: Implement getTable() method.
        $this->table = 'role_node';
    }

    protected function setPrimary()
    {
        // TODO: Implement getPrimary() method.
        $this->primaryKey = 'rn_id';
    }

    protected function setBean()
    {
        // TODO: Implement getBean() method.
        $this->bean = RoleNodeBean::class;
    }

    /**
     * 创建一个关系
     * @param $roleId
     * @param $nodeId
     * @return mixed
     */
    public function createRelation($roleId, $nodeId)
    {
        $roleNode = $this
            ->getConnect()
            ->where('role_id', $roleId)
            ->where('node_id', $nodeId)
            ->getOne($this->table);
        if (!$roleNode) {
            $createdPrimary = $this->insert([
                'role_id' => $roleId,
                'node_id' => $nodeId
            ]);
            if ($createdPrimary)
                $roleNode = $this->find($createdPrimary);
        }
        return $roleNode;
    }

    /**
     * 移除一个节点或角色的所有关系
     * @param $node
     * @param bool $role
     * @return bool|null
     */
    public function removeRelation($node, $role = false)
    {
        $query = $this
            ->getConnect()
            ->where('node_id', $node);
        if ($role)
            $query->where('role_id', $role);

        return $query->delete($this->table);
    }

    /**
     * 获取分组节点
     * @param bool $roleId
     * @return array
     */
    public function getRelation($roleId = false)
    {
        $nodeModel = new NodeModel();
        $node = $nodeModel->getConnect()->get($nodeModel->getTable());
        $roleNode = [];
        if ($roleId) {
            $roleNode = $this->getConnect()->where('role_id', $roleId)->get($this->getTable());
            $roleNode = (new SplArray($roleNode))->column('node_id')->getArrayCopy();
        }
        return [
            'node' => $node,
            'roleNode' => $roleNode
        ];
    }
}