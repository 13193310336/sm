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
use function App\Component\url;
use App\Model\Role\RoleModel;
use App\Model\User\UserModel;
use App\Service\Admin\Auth\AuthService;
use Co\Http\Response;
use EasySwoole\Component\Di;
use EasySwoole\Http\AbstractInterface\Controller;
use Swoole\Http\Request;

class Admin extends Controller
{
    private $auth;

    protected $viewPath = 'admin';

    public function index()
    {
        $this->response()->redirect(url('admin/main/console'));
    }

    //blade渲染
    public function render($view, $params = [])
    {
        $params['auth'] = $this->getAuthService()->getAuth();
        $this
            ->response()
            ->write(Di::getInstance()
                ->get(GlobalConst::DI_BLADE)
                ->render($this->viewPath . '.' . $view, $params)
            );
    }

    //ajax信息返回
    public function jsonResponse($data = [], $code = Code::SUCCESS, $message = Code::MESSAGE[Code::SUCCESS])
    {
        $this->response()->write(json_encode([
            'code' => $code,
            'message' => $message,
            'data' => $data
        ]));
    }

    /**
     * 接收数据回调,处理权限逻辑
     * @param null|string $action
     * @return bool
     */
    public function onRequest(?string $action): bool
    {
        //开启session
        $this->session()->start();

        //存储必要数据
        Di::getInstance()->set(GlobalConst::DI_HTTP_QUERY, $this->request()->getQueryParams());
        Di::getInstance()->set(GlobalConst::DI_URI, $this->request()->getUri());

        //用户判断
        $this->auth = $authService = new AuthService(
            $this->session()->get(UserModel::SESSION_KEY),
            trim($this->request()->getUri()->getPath(), '/')
            );

        if (!$authService->isBreakAuthPath()) {

            //没登录 先登录
            if (!$authService->isLogin()) {
                $this->response()->redirect(url('/admin/auth/auth/login', Code::output('请先登录!')));
                return false;
            }

            //权限不足
            if (!$authService->checkAccess($this->request()->getUri()->getPath())) {
                $this->response()->redirect(url('/admin/auth/auth/login', Code::output('权限不足')));
                return false;
            }
        }

        return true;
    }

    //得到授权用户
    protected function getAuthService(): AuthService
    {
        return $this->auth;
    }
}