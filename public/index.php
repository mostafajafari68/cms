<?php

//Define some absolute path constants to aid in location resources
define('BASE_PATH',dirname(__DIR__).'/');
define('APP_PATH',BASE_PATH.'app/');

//Register Auto Loader

$loader = new \Phalcon\Loader();
$loader->registerDirs(

    [
        APP_PATH.'controllers/',
        APP_PATH.'models/',
    ]

);
$loader->register();

// create a di
$di = new \Phalcon\Di\FactoryDefault();

//setup the view componen
$di->set('view',function (){

    $view = new \Phalcon\Mvc\View();
    $view->setViewsDir(APP_PATH.'views');
    return $view;
});

$di->set('url',function (){

    $url =new Phalcon\Mvc\Url();
    $url->setBaseUri('/cms/');
    return $url;
});

$application=new Phalcon\Mvc\Application($di);
try {


    $response = $application->handle();
    $response->send();
}

catch (\Exception $e){
    echo 'Exception:',$e->getMessage();
}


