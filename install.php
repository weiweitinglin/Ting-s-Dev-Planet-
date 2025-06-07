<?php
echo "開始安裝廷造星球網站...\n";

// 建立資料庫連線
try {
    $pdo = new PDO(
        "mysql:host=localhost",
        "root",
        "",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    // 建立資料庫
    $sql = file_get_contents(__DIR__ . '/database/init.sql');
    $pdo->exec($sql);
    echo "資料庫結構建立成功！\n";

    // 匯入測試資料
    $sql = file_get_contents(__DIR__ . '/database/seed.sql');
    $pdo->exec($sql);
    echo "測試資料匯入成功！\n";

} catch (PDOException $e) {
    die("資料庫錯誤：" . $e->getMessage() . "\n");
}