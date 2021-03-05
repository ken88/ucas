<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        # 数据库
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=47.116.137.216:23306;dbname=ucas',
            'username' => 'root',
            'password' => '8771cd!',
            'charset' => 'utf8',
        ],

        # redis
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => 'localhost',
            'port' => 6379,
            'database' => 0,
        ],
        'elasticsearch' => [
            'class' => 'yii\elasticsearch\Connection',
            'nodes' => [
                ['http_address' => 'localhost:9200'],
            ],
        ],
    ],
];
