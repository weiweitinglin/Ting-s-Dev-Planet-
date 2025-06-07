<?php
namespace App\Core;

abstract class Controller {
    // 載入視圖
    protected function view($view, $data = []) {
        // 將資料解壓到變數中
        extract($data);
        
        // 先檢查視圖檔案是否存在
        $viewFile = APP_ROOT . '/views/' . $view . '.php';
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            throw new \Exception("視圖 {$view} 不存在");
        }
    }

    // 載入模型
    protected function model($model) {
        $modelClass = 'App\\Models\\' . $model;
        if (class_exists($modelClass)) {
            return new $modelClass();
        }
        throw new \Exception("模型 {$model} 不存在");
    }

    // JSON 回應
    protected function json($data, $status = 200) {
        header('Content-Type: application/json');
        http_response_code($status);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        exit;
    }
}