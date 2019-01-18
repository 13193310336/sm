<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-18
 * Time: 下午3:11
 */

namespace App\Controller\Admin\Access;


use App\Controller\Admin\Admin;
use App\Model\Role\RoleModel;

class Role extends Admin
{
    protected $viewPath = 'admin.access.role';

    public function index()
    {
        $model = new RoleModel();
        $name = $this->request()->getQueryParam('name') ?? null;

    }
}