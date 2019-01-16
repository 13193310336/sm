<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-5
 * Time: 下午7:56
 */

namespace App\Controller\Admin\Main;

use App\Controller\Admin\Admin;

class Console extends Admin
{
    public function index()
    {
        $this->render('main');
    }
}