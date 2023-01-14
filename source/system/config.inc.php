<?php
error_reporting(0);
ini_set('date.timezone', 'PRC');
ini_set('default_charset', 'utf-8');
define('IN_ROOT', substr(dirname(__FILE__), 0, -13));
define('IN_PATH', '/');
define('IN_DATA_PATH', IN_ROOT . 'data/');
define('IN_ATTACHMENT_PATH', IN_ROOT . 'data/attachment/');
define('IN_CERT_PATH', IN_ROOT . 'data/cert/');
define('IN_IMAGES_PATH', IN_ROOT . 'data/image/');
define('IN_IPADIR_PATH', IN_ROOT . 'data/ipadir/');
define('IN_TMP_PATH', IN_ROOT . "data/tmp/");
define('IN_UPLOADS_PATH', IN_ROOT . 'data/uploads/');
define('IN_SOURCE', IN_ROOT . 'source/');
define('IN_STATIC_PATH', IN_ROOT . 'static/');
define('IN_DEBUG', '1');

if (is_file(IN_SOURCE . 'system/db_config.php')) {
    include_once IN_SOURCE . 'system/db_config.php';
} else {
    define('IN_DBHOST', '127.0.0.1');
    define('IN_DBUSER', 'root');
    define('IN_DBPW', 'root');
    define('IN_DBNAME', 'xffenfa');
    define('IN_DBCHARSET', 'utf8');
    define('IN_DBTABLE', 'prefix_');
}