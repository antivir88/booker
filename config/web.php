<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'minimal',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'gii'],
    'modules' => [
        'gii' => ['class'=>'yii\gii\Module'],
        'admin' => ['class' => 'app\modules\admin\Module'],
        'api' => [
            'class' => 'app\modules\api\Module',
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '6Q5Be1bZgT7NbwZ3Qu7nlgDX9AOsaIyK',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                [ // book
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api.v1.book',
                    'only' => ['index', 'view', 'update', 'delete'],
                    'except' => ['create']
                ],
#                [ // author
#                    'class' => 'yii\rest\UrlRule',
#                    'controller' => 'api.v1.author',
#                    'only' => ['view'],
#                    'except' => ['delete']
#                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

return $config;
