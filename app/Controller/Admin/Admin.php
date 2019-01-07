<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-5
 * Time: 下午6:46
 */
namespace App\Controller\Admin;

use App\Component\GlobalConst;
use EasySwoole\Component\Di;
use EasySwoole\Http\AbstractInterface\Controller;

class Admin extends Controller
{
    public function index()
    {
        $this->render('admin.auth.login');
    }

    public function render($view, $params = [])
    {
        $this->response()->write(Di::getInstance()->get(GlobalConst::DI_BLADE)->render($view, $params));
    }
}