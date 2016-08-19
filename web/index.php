<?php

// FrontController принимает только рестуху и админку
$redirect = true;
if (strpos($_SERVER['REQUEST_URI'], '/api/v1') === 0) {
    $redirect = false;
}
if (strpos($_SERVER['REQUEST_URI'], '/admin') === 0) {
    $redirect = false;
}
if (strpos($_SERVER['REQUEST_URI'], '/gii') === 0) {
    $redirect = false;
}
if ($redirect) {
    $_SERVER['REQUEST_URI'] = '/';
}

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
