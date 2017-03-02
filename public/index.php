<?php


use Illuminate\Database\Capsule\Manager as Capsule;

// 定义 BASE_PATH

define('BASE_PATH', __DIR__);

// Autoload 自动载入
require BASE_PATH . '/../vendor/autoload.php';

$capsule = new Capsule;

$capsule->addConnection(require '../config/database.php');

$capsule->bootEloquent();

// 路由配置
require '../config/routes.php';

