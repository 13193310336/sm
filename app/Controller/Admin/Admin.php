<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-5
 * Time: 下午6:46
 */
namespace App\Controller\Admin;

use App\Component\Code;
use App\Component\GlobalConst;
use App\Model\Role\RoleModel;
use App\Model\User\UserModel;
use EasySwoole\Component\Di;
use EasySwoole\Http\AbstractInterface\Controller;

class Admin extends Controller
{
    public function index()
    {
        $this->render('admin.auth.login');
    }

    public function test()
    {
        $user = (new UserModel())->createUser('13193310336', 'original2018', 'original', UserModel::TYPE_ADMIN, 1);
        var_dump($user);
    }

    public function render($view, $params = [])
    {
        $this->response()->write(Di::getInstance()->get(GlobalConst::DI_BLADE)->render($view, $params));
    }

    public function jsonResponse($data = [], $code = Code::SUCCESS, $message = Code::MESSAGE[Code::SUCCESS])
    {
        $this->response()->write(json_encode([
            'code' => $code,
            'message' => $message,
            'data' => $data
        ]));
    }
}