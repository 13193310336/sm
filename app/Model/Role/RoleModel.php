<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-8
 * Time: 下午8:39
 */

namespace App\Model\Role;


use App\Model\Model;
use App\Model\Node\NodeModel;
use App\Model\RoleNode\RoleNodeModel;

class RoleModel extends Model
{
    protected function setTable()
    {
        $this->table = 'role';
    }

    protected function setPrimary()
    {
        $this->primaryKey = 'role_id';
    }

    protected function setBean()
    {
        $this->bean = RoleBean::class;
    }

    public function getRoleList($name)
    {
        $query = $this
            ->getConnect();
        if ($name)
            $query->where('role_name', $name);

        return $this->page($query);
    }

    /**
     * 创建一个角色并返回
     * @param string $name
     * @param $node
     * @return mixed
     */
    public function createRole(string $name, $node)
    {
        $roleNodeModel = new RoleNodeModel();
        $createdPrimary = $this->insert([
            'role_name' => $name
        ]);
        if ($createdPrimary) {
            foreach ($node as $item)
                $roleNodeModel->createRelation($createdPrimary, $item);
            return $this->find($createdPrimary);
        } else
            return $createdPrimary;
    }

    /**
     * 修改
     * @param $id
     * @param $name
     * @param $node
     * @return bool
     */
    public function updateRole($id, $name, $node)
    {
        $roleNodeModel = new RoleNodeModel();
        $role = $this->find($id);
        if ($role) {
            $roleNodeModel->getConnect()->where('role_id', $id)->delete($roleNodeModel->getTable());
            foreach ($node as $item)
                $roleNodeModel->createRelation($id, $item);
            $this->update($id, [
                'role_name' => $name
            ]);
            return true;
        }
        return false;
    }
}