<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-15
 * Time: 下午9:21
 */
return [
    [
        'panelName' => '系统相关',
        'panelMenu' => [
            [
                'menuIcon' => 'fa fa-cog',
                'menuName' => '系统设置',
                'menuItem' => [
                    [
                        'itemName' => '节点管理',
                        'itemUri'  => \App\Component\url('')
                    ],
                    [
                        'itemName' => '权限管理',
                        'itemUri'  => \App\Component\url('')
                    ],
                ]
            ],
            [
                'menuIcon' => 'fa fa-user',
                'menuName' => '用户管理',
                'menuItem' => [
                    [
                        'itemName' => '分组管理',
                        'itemUri'  => \App\Component\url('')
                    ],
                    [
                        'itemName' => '用户管理',
                        'itemUri'  => \App\Component\url('')
                    ],
                ]
            ]
        ]
    ],
];