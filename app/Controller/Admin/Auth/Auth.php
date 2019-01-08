<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-8
 * Time: 下午10:01
 */

namespace App\Controller\Admin\Auth;

use App\Component\Code;
use App\Controller\Admin\Admin;
use App\Model\User\UserModel;

class Auth extends Admin
{
    /**
     * 后台登录
     */
    public function login()
    {
        $model = new UserModel();
        $account = $this->request()->getParsedBody('userName');
        $password = $this->request()->getParsedBody('password');
        if (!$model->checkUser($account, $password, $this->session()))
            $this->jsonResponse([], Code::ACCESS, '认证失败');
        else
            $this->jsonResponse();
    }
}