<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id'           => 'basic',
    'basePath'     => dirname(__DIR__),
    'bootstrap'    => ['log'],
    'components'   => require(__DIR__ . '/components.php'),
    'params'       => $params,
    // 默认控制器
    'defaultRoute' => 'blog/index/index',
    // 多模块
    'modules'      => [
        // 后台
        'admin' => [
            'class' => 'app\moudles\admin\Admin',
        ],
        // 前台
        'blog' => [
            'class' => 'app\moudles\blog\Blog',
        ],
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][]      = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][]    = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
