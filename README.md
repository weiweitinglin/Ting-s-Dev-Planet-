# 廷造星球

個人網站專案，使用 PHP 與 MariaDB 開發。

## 網站連結
https://weiweitinglin.github.io/ting_planet/

## 安裝步驟

1. 複製專案
```bash
git clone https://github.com/your-username/ting_planet.git
cd ting_planet
```

2. 安裝相依套件
```bash
composer install
```

3. 設定環境
- 複製 `app/config/config.example.php` 為 `app/config/config.php`
- 修改資料庫連線設定

4. 建立資料庫
```bash
php install.php
```

## 開發環境需求
- PHP 8.0+
- MariaDB 10.4+
- Apache 2.4+

## 授權方式
MIT Licensegit add .
git commit -m "初始化專案"
