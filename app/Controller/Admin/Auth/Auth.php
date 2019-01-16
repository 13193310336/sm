<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-8
 * Time: 下午10:01
 */

namespace App\Controller\Admin\Auth;

use App\Component\Code;
use function App\Component\url;
use App\Controller\Admin\Admin;
use App\Model\User\UserModel;

class Auth extends Admin
{
    protected $viewPath = 'admin.auth';
    /**
     * 显示登录页面
     */
    public function login()
    {
        if (!$this->getAuthService()->isLogin())
            $this->render('login');
        else
            $this->response()->redirect(url('admin/main/console'));
    }

    /**
     * 后台登录
     */
    public function doLogin()
    {
        $model = new UserModel();
        $account = $this->request()->getParsedBody('userName');
        $password = $this->request()->getParsedBody('password');
        if (!$model->checkUser($account, $password, $this->session()))
            $this->jsonResponse([], Code::ACCESS, '认证失败');
        else
            $this->jsonResponse();
    }

    /**
     * 退出
     */
    public function logout()
    {
        if ($this->session()->set(UserModel::SESSION_KEY, []))
            $this->response()->redirect(url('admin/auth/auth/login', Code::output('退出成功')));
        else
            $this->response()->redirect($this->request()->getUri()->getPath(), Code::output('退出失败,请稍后再试'));
    }
}