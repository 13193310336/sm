<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-6
 * Time: 下午10:07
 */
namespace App\Model\User;

use EasySwoole\Spl\SplBean;

class UserBean extends SplBean
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
    protected $id;

    /**
     * @var
     * @notNull         true
     * @type            varchar
     * @typeLength      50
     * @comment         账户
     */
    protected $account;

    /**
     * @var
     * @notNull         true
     * @type            varchar
     * @typeLength      50
     * @comment         名称
     */
    protected $name;

    /**
     * @var
     * @notNull         true
     * @type            varchar
     * @typeLength      50
     * @comment         密码
     */
    protected $password;

    /**
     * @var
     * @notNull         true
     * @type            tinyint
     * @typeLength      1
     * @comment         用户类型
     */
    protected $type;

    /**
     * @var
     * @notNull         true
     * @type            int
     * @typeLength      11
     * @comment         角色
     */
    protected $role;

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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param mixed $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
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