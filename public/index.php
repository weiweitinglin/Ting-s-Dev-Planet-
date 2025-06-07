<?php
require_once '../vendor/autoload.php';

// 載入設定
$config = require_once '../app/config/config.php';

// 設定時區
date_default_timezone_set($config['timezone']);

// 錯誤處理
if ($config['debug']) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// 啟動應用程式
$app = new App\Core\App();