<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-16
 * Time: 下午7:50
 */
namespace App\Controller\Admin\Access;

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


}