<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-5
 * Time: 下午7:24
 */
namespace App\Component;

class GlobalConst
{

    //BLADE引擎DI常量
    const DI_BLADE = 'DI_BLADE';

    //httpRequest DI常亮
    const DI_HTTP_REQUEST = 'DI_HTTP_REQUEST';

    //get参数DI常量
    const DI_HTTP_QUERY = 'DI_HTTP_QUERY';

    //uriDi常量
    const DI_URI = 'DI_URI';

    //路由message字段
    const URI_MESSAGE_FIELD = 'MESSAGE';
}