<?php
echo "開始測試基本功能...\n";

// 測試資料庫連線
try {
    require_once __DIR__ . '/app/core/Database.php';
    $db = App\Core\Database::getInstance();
    echo "資料庫連線測試成功！\n";
} catch (Exception $e) {
    die("資料庫連線測試失敗：" . $e->getMessage() . "\n");
}

// 測試檔案權限
$paths = [
    'public/uploads',
    'public/uploads/images',
    'public/uploads/portfolio'
];

foreach ($paths as $path) {
    if (!is_writable(__DIR__ . '/' . $path)) {
        die("警告：{$path} 目錄沒有寫入權限\n");
    }
}
echo "檔案權限測試成功！\n";

echo "基本功能測試完成！\n";