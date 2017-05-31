<?php

require 'vendor/autoload.php';
require 'Util.php';
require 'cfg\Config.php';

define('ROOT_PATH', __DIR__ . '/');
define('LAYOUT_PATH' , ROOT_PATH . 'src/View/layout/');
define('ASSETS' , ROOT_PATH. '/public/');




if (isset($_GET['p'])){

    $p = $_GET['p'];
}
else{

    $p = "home";
}

if ($p === "home"){

    $controller = new App\Controller\AdminController();
    $controller->index('admin');

}else if ($p === "post"){

    $controller = new \App\Controller\AdminController();
    $controller->byId( $_GET['id'], 'presentation');

}else if ($p === "update") {

    $controller = new \App\Controller\AdminController();
    $controller->Update($_GET['id'], 'update');

}else if ($p === "delete") {

    $controller = new \App\Controller\AdminController();
    $controller->Delete($_GET['id'], 'admin');

}else if ($p === "create") {

    $controller = new \App\Controller\AdminController();
    $controller->Create('create');

}