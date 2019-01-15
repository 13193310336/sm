<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-8
 * Time: 下午10:07
 */

namespace App\Component;


class Code
{
    const SUCCESS = '001';
    const FAILED = '002';
    const ACCESS = '003';
    const EXCEPTION = '004';

    const MESSAGE = [
        self::SUCCESS => '操作成功',
        self::FAILED => '操作失败',
        self::ACCESS => '权限不足',
        self::EXCEPTION => '系统异常'
    ];

    public static function output($message)
    {
        return $message;
    }
}