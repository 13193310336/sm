<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-8
 * Time: 下午8:39
 */

namespace App\Model\Role;


use function App\Component\getAdminCacheKey;
use App\Component\GlobalConst;
use App\Model\Model;
use App\Model\Node\NodeModel;
use App\Model\RoleNode\RoleNodeModel;
use easySwoole\Cache\Cache;

class RoleModel extends Model
{
    protected function table()
    {
        $this->table = 'role';
    }

    protected function primaryKey()
    {
        $this->primaryKey = 'role_id';
    }

    protected function bean()
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
    public function updateRole(int $id, string $name, string $node): bool
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

    /**
     * 生成缓存
     * @param int $roleId
     */
    public function generateRoleAccess(int $roleId)
    {
        $roleNodeModel = new RoleNodeModel();
        $roleNode = $roleNodeModel->getRelation($roleId);
        Cache::set(getAdminCacheKey(GlobalConst::KEY_USER_ACCESS), $roleNode);
        $roleNodeModel->recoveryConnect();
    }

}