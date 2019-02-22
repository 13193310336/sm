<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-5
 * Time: 下午8:40
 */
return [
    /**
     * MYSQL
     */
    'mysql' => [
        'host'          => '127.0.0.1',
        'port'          => '3306',
        'timeout'       => '5',
        'charset'       => 'utf8mb4',
        'user'          => 'root',
        'password'      => '123456',
        'database'      => 'sm',
        'pool_max'      => 20,
        'pool_timeout'  => 0.1,
    ],
    /**
     * REDIS
     */
    'redis' => [
        'host'          => '127.0.0.1',
        'port'          => 6379,
        'password'      => null,
        'database'      => 0,
        'pool_max'      => 20,
        'pool_timeout'  => 0.1
    ]
];