<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/kesandus/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/kesandus/');

// DIR
define('DIR_APPLICATION', '/var/www/html/kesandus/catalog/');
define('DIR_SYSTEM', '/var/www/html/kesandus/system/');
define('DIR_IMAGE', '/var/www/html/kesandus/image/');
define('DIR_STORAGE', '/var/www/storages/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'njoku');
define('DB_PASSWORD', 'nuhTMX6z');
define('DB_DATABASE', 'kesandus');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');