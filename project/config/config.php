<?php
    ob_start();
    session_start();
    date_default_timezone_set('Asia/Kathmandu');

    if($_SERVER['SERVER_ADDR'] == '127.0.0.1' || $_SERVER['SERVER_ADDR'] == '::1'){
        //local server
        define("ENVIRONMENT","DEVELOPMENT");
    }else{
        //live server
        define("ENVIRONMENT","PRODUCTION");
    }

    if(ENVIRONMENT == 'DEVELOPMENT'){
        error_reporting(E_ALL);
        define('DB_HOST', 'localhost');
        define('DB_NAME','learnphp');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('SITE_URL','localhost/learn/project/');

    }else{
        error_reporting(0);
        define('DB_HOST', 'localhost');
        define('DB_NAME','learnphp');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('SITE_URL','project.com/');
    }

    define('ERROR_PATH',$_SERVER['DOCUMENT_ROOT'].'/learn/project/error/');
    define('CLASS_PATH',$_SERVER['DOCUMENT_ROOT'].'/learn/project/class/');
    define('CONFIG_PATH',$_SERVER['DOCUMENT_ROOT'].'/learn/project/config/');
    define('UPLOAD_PATH',$_SERVER['DOCUMENT_ROOT'].'/learn/project/upload/');
?>