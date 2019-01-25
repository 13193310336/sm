<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-20
 * Time: 下午5:20
 */

namespace App\Controller\Admin\Auth;


use App\Component\Code;
use App\Controller\Admin\Admin;
use App\Model\Role\RoleModel;
use App\Model\User\UserModel;

class User extends Admin
{
    protected $viewPath = 'admin.auth.user';

    public function index()
    {
        $userModel = new UserModel();
        $account = $this->request()->getQueryParam('account');
        $name = $this->request()->getQueryParam('name');
        $role = $this->request()->getQueryParam('role');

        $this->render('index', $userModel->getUserList($account, $name, $role));
    }

    public function create()
    {
        $roleModel = new RoleModel();
        $data['role'] = $roleModel->getConnect()->get($roleModel->getTable());
        $this->render('edit', $data);

    }

    public function store()
    {
        $userModel = new UserModel();
        $account = $this->request()->getParsedBody('account');
        $name = $this->request()->getParsedBody('name');
        $password = $this->request()->getParsedBody('password');
        $role = $this->request()->getParsedBody('role');

        if (!$account)
            $this->jsonResponse([], Code::FAILED, Code::output('用户账号必填'));

        if (!$name)
            $this->jsonResponse([], Code::FAILED, Code::output('用户名称必填'));

        if (!$password)
            $this->jsonResponse([], Code::FAILED, Code::output('用户密码必填'));

        if (!$role)
            $this->jsonResponse([], Code::FAILED, Code::output('用户分组必选'));

        if ($account && $name && $password && $role) {
            $createResult = $userModel->createUser($account, $password, $name, UserModel::TYPE_ADMIN, $role);
            if ($createResult)
                $this->jsonResponse([], Code::SUCCESS);
            else
                $this->jsonResponse([], Code::FAILED);
        }
    }

    public function edit()
    {
        $userModel = new UserModel();
        $roleModel = new RoleModel();
        $userId = $this->request()->getQueryParam('id');
        if ($userId) {
            $data['role'] = $roleModel->getConnect()->get($roleModel->getTable());
            $data['user'] = $userModel->find($userId);
            $this->render('edit', $data);
        }
    }



    public function update()
    {
        $userModel = new UserModel();
        $userId = $this->request()->getQueryParam('id');
        $name = $this->request()->getParsedBody('name');
        $password = $this->request()->getParsedBody('password');
        $role = $this->request()->getParsedBody('role');

        if (!$name)
            $this->jsonResponse([], Code::FAILED, Code::output('用户名称必填'));

        if (!$role)
            $this->jsonResponse([], Code::FAILED, Code::output('用户分组必选'));

        if ($name && $role) {
            $updateResult = $userModel->updateUser($userId, $name, $role, $password);
            if ($updateResult)
                $this->jsonResponse([], Code::SUCCESS);
            else
                $this->jsonResponse([], Code::FAILED);
        }

    }
}