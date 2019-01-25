<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-16
 * Time: 下午7:50
 */
namespace App\Controller\Admin\Access;

use App\Component\Code;
use App\Controller\Admin\Admin;
use App\Model\Node\NodeModel;

class Node extends Admin
{
    protected $viewPath = 'admin.access.node';
    /**
     * 首页
     */
    public function index()
    {
        $model = new NodeModel();
        $name = $this->request()->getQueryParam('name') ?? null;
        $path = $this->request()->getQueryParam('path') ?? null;
        $type = $this->request()->getQueryParam('type') ?? null;
        $this->render('index', $model->getNodeList($name, $path, $type));
    }

    /**
     * 添加页面
     */
    public function create()
    {
        return $this->render('edit', [
            'type' => NodeModel::TYPE_COLLECTION
        ]);
    }

    /**
     * 添加节点
     */
    public function store()
    {
        $model = new NodeModel();
        $name = $this->request()->getParsedBody('name') ?? null;
        $uri = $this->request()->getParsedBody('uri') ?? null;
        $type = $this->request()->getParsedBody('type') ?? null;
        if (!$name)
            $this->jsonResponse([], Code::FAILED, Code::output('节点名称不能为空'));
        if (!$uri)
            $this->jsonResponse([], Code::FAILED, Code::output('节点不能为空'));
        if (!$type)
            $this->jsonResponse([], Code::FAILED, Code::output('节点类型不能为空'));
        if ($name && $uri && $type) {
            $newNode = $model->createNode($name, $uri, $type);
            if ($newNode)
                $this->jsonResponse($newNode);
            else
                $this->jsonResponse([], Code::FAILED, Code::output('创建失败'));
        } else
            $this->jsonResponse([], Code::FAILED, Code::output('不能为空'));
    }

}