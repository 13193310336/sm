<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-8
 * Time: 下午8:39
 */

namespace App\Model\Role;


use App\Model\Model;

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

    /**
     * 创建一个角色并返回
     * @param string $name
     * @return mixed
     */
    public function createRole(string $name)
    {
        $createdPrimary = $this->insert([
            'role_name' => $name
        ]);
        if ($createdPrimary)
            return $this->find($createdPrimary);
        else
            return $createdPrimary;
    }
}