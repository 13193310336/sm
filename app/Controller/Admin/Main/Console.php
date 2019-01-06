<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-5
 * Time: 下午7:56
 */

namespace App\Controller\Admin\Main;

use App\Controller\Admin\Admin;
use App\Model\User\UserModel;

class Console extends Admin
{
    public function index()
    {
        $insert = (new UserModel())->insert([
            'account' => '13193310335' . rand(1, 100),
            'password' => md5('123456'),
            'name' => 'original',
            'type' => 1,
            'role' => 1
        ]);

        $this->render('hello', ['id' => $insert]);
    }
}