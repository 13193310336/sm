<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-15
 * Time: 下午7:42
 */
namespace App\Service\Admin\Auth;

use App\Service\Admin\AdminService;

class AuthService extends AdminService
{
    //用户
    protected $auth = [];
    //当前uri
    protected $path = '';
    //无需验证的uri
    protected $exceptPath = [
        'admin/auth/auth/login',
        'admin/auth/auth/doLogin',
    ];

    public function __construct($auth, $path)
    {
        $this->auth = $auth;
        $this->path = $path;
    }

    /**
     * 用户是否登录
     * @return bool
     */
    public function isLogin(): bool
    {
        $return = true;
        if (!$this->auth)
            $return = false;
        return $return;
    }

    /**
     * 验证权限
     * @param $uri
     * @return bool
     */
    public function checkAccess($uri): bool
    {
        $return = true;

        return $return;
    }

    /**
     * 获取用户
     * @return array
     */
    public function getAuth()
    {
        return $this->auth;
    }


    /**
     * 是否跳过用户验证的路由
     * @return bool
     */
    public function isBreakAuthPath()
    {
        return in_array($this->path, $this->exceptPath);
    }


}