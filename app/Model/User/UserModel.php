<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-6
 * Time: 下午10:37
 */

namespace App\Model\User;


use App\Model\Model;
use EasySwoole\Http\Request;
use EasySwoole\Http\Session\Session;
use EasySwoole\Utility\Hash;

class UserModel extends Model
{
    const SESSION_KEY = 'sm_auth';

    const TYPE_ADMIN = 1;
    const TYPE_COLLECTION = [
        self::TYPE_ADMIN => '后台用户'
    ];

    protected function setTable()
    {
        $this->table = 'user';
    }

    protected function setPrimary()
    {
        $this->primaryKey = 'id';
    }

    protected function setBean()
    {
        $this->bean = UserBean::class;
    }

    /**
     * 创建一个用户并返回
     * @param $account
     * @param $password
     * @param $name
     * @param $type
     * @param $role
     * @return mixed|null
     */
    public function createUser($account, $password, $name, $type, $role)
    {
        $user = null;
        if (!$this->getUser($account)) {
            $createdPrimary = $this->insert([
                'account' => $account,
                'password' => Hash::makePasswordHash($password),
                'name' => $name,
                'type' => $type,
                'role' => $role
            ]);
            if ($createdPrimary)
                $user = $this->find($createdPrimary);
        }
        return $user;
    }

    public function updateUser($userId, $userName, $role, $password = false)
    {
        $updateArray = [
            'id' => $userId,
            'name' => $userName,
            'role' => $role
        ];

        if ($password)
            $updateArray['password'] = Hash::makePasswordHash($password);

        return $this
            ->getConnect()
            ->where('id', $userId)
            ->update($this->getTable(), $updateArray);

    }

    /**
     * 得到一个用户
     * @param $value
     * @param $field
     * @return \EasySwoole\Mysqli\Mysqli|mixed|null
     */
    public function getUser($value, $field = 'account')
    {
        return $this
            ->getConnect()
            ->where($field, $value)
            ->getOne($this->table);
    }

    /**
     * @param $account
     * @param $name
     * @param $role
     * @return array
     */
    public function getUserList($account, $name, $role)
    {
        $query = $this->getConnect();

        if ($account)
            $query->where('account', $account);

        if ($name)
            $query->where('name', $name);

        if ($role)
            $query->where('role', $role);

        return $this->page($query);
    }

    /**
     * 检查用户登录
     * @param $account
     * @param $password
     * @param Session|null $sessionServer
     * @return bool
     */
    public function checkUser($account, $password, Session $sessionServer = null)
    {
        $user = $this->getUser($account);
        if ($user && Hash::validatePasswordHash($password, $user['password'])) {
            if ($sessionServer) {
                unset($user['password']);
                $sessionServer->set(self::SESSION_KEY, $user);
            }
            return true;
        } else
            return false;
    }
}