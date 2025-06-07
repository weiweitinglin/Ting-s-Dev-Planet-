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

namespace App\Core;

class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // 檢查控制器是否存在
        if (isset($url[0])) {
            if (file_exists(APP_ROOT . '/controllers/' . ucfirst($url[0]) . 'Controller.php')) {
                $this->controller = ucfirst($url[0]);
                unset($url[0]);
            }
        }

        $this->controller = 'App\\Controllers\\' . $this->controller . 'Controller';
        $this->controller = new $this->controller;

        // 檢查方法是否存在
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // 取得參數
        $this->params = $url ? array_values($url) : [];

        // 調用控制器方法
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    protected function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}