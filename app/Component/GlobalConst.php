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

    //httpRequest Content常亮
    const CONTENT_HTTP_REQUEST = 'CO_HTTP_REQUEST';

    //get参数CONTENT常量
    const CONTENT_HTTP_QUERY = 'CO_HTTP_QUERY';

    //uri参数CONTENT常量
    const CONTENT_URI = 'CO_URI';

    //session参数context常亮
    const CONTEXT_SESSION = 'CO_SESSION';

    //路由message字段
    const URI_MESSAGE_FIELD = 'MESSAGE';

    //自定义命令中参数ALL的值
    const COMMAND_ALL = 'all';

    //用户权限缓存KEY
    const KEY_USER_ACCESS = 'KEY_USER_ACCESS';
}