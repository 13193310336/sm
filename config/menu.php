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
                        'itemName' => '添加节点',
                        'itemUri'  => 'admin/access/node/create'
                    ],
                    [
                        'itemName' => '节点列表',
                        'itemUri'  => 'admin/access/node'
                    ],
                ]
            ],
            [
                'menuIcon' => 'fa fa-user',
                'menuName' => '用户管理',
                'menuItem' => [
                    [
                        'itemName' => '添加分组',
                        'itemUri'  => 'admin/access/role/create'
                    ],
                    [
                        'itemName' => '分组列表',
                        'itemUri'  => 'admin/access/role'
                    ],
                    [
                        'itemName' => '创建用户',
                        'itemUri'  => 'admin/auth/user/create'
                    ],
                    [
                        'itemName' => '用户列表',
                        'itemUri'  => 'admin/auth/user'
                    ]
                ]
            ]
        ]
    ],
];