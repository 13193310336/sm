<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-6
 * Time: 下午10:37
 */

namespace App\Model\User;


use App\Model\Model;

class UserModel extends Model
{
    protected $table = 'user';

    protected $bean = UserBean::class;

    protected $primaryKey = 'id';

    protected $guarded = [];
}