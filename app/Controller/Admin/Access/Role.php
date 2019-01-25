<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-18
 * Time: 下午3:11
 */

namespace App\Controller\Admin\Access;


use App\Component\Code;
use App\Controller\Admin\Admin;
use App\Model\Role\RoleModel;
use App\Model\RoleNode\RoleNodeModel;

class Role extends Admin
{
    protected $viewPath = 'admin.access.role';

    public function index()
    {
        $model = new RoleModel();
        $name = $this->request()->getQueryParam('name') ?? null;
        $this->render('index', $model->getRoleList($name));
    }

    public function create()
    {
        return $this->render('edit', (new RoleNodeModel())->getRelation());
    }

    public function store()
    {
        $mode = new RoleModel();
        $name = $this->request()->getParsedBody('name');
        $node = $this->request()->getParsedBody('node');
        if (!$name)
            $this->jsonResponse([], Code::FAILED, Code::output('分组名称不能为空'));

        if (!$node)
            $this->jsonResponse([], Code::FAILED, Code::output('请选择节点'));

        if ($name && $node) {
            $createResult = $mode->createRole($name, $node);
            if ($createResult)
                $this->jsonResponse($createResult);
            else
                $this->jsonResponse([], Code::FAILED, Code::output('添加分组失败'));
        }
    }

    public function edit()
    {
        $model = new RoleModel();
        $roleId = $this->request()->getQueryParam('id');
        if ($roleId) {
            $data = (new RoleNodeModel())->getRelation($roleId);
            $data['role'] = $model->find($roleId);;
            $this->render('edit', $data);
        }
    }

    public function update()
    {
        $model = new RoleModel();
        $roleId = $this->request()->getQueryParam('id');
        $name = $this->request()->getParsedBody('name');
        $node = $this->request()->getParsedBody('node');

        if (!$name)
            $this->jsonResponse([], Code::FAILED, Code::output('分组名称不能为空'));

        if (!$node)
            $this->jsonResponse([], Code::FAILED, Code::output('请选择节点'));

        if ($roleId && $name && $node) {
            $updateResult = $model->updateRole($roleId, $name, $node);
            if ($updateResult)
                $this->jsonResponse([], Code::SUCCESS);
            else
                $this->jsonResponse([], Code::FAILED);
        }
    }

}