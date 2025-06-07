<?php
define('BASE_URL', 'http://localhost/ting_planet');
define('SITE_NAME', '廷造星球');
define('APP_ROOT', dirname(dirname(__FILE__)));
define('UPLOAD_PATH', dirname(APP_ROOT) . '/public/uploads/');

return [
    'app_name' => '廷造星球',
    'app_version' => '1.0.0',
    'timezone' => 'Asia/Taipei',
    'locale' => 'zh_TW',
    'debug' => true
];