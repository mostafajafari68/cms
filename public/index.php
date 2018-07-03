<?php





//Define some absolute path constants to aid in location resources
define('BASE_PATH',dirname(__DIR__).'/');
define('APP_PATH',BASE_PATH.'app/');

//Register Auto Loader

$loader =new Phalcon\Loader;
$loader->registerDirs(

    [
        APP_PATH.'controllers/',
        APP_PATH.'models/',
    ]

);
$loader->register();

