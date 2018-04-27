<?php

require 'vendor/autoload.php';
require 'Util.php';
require 'cfg\Config.php';

define('ROOT_PATH', __DIR__ . '/');
define('LAYOUT_PATH' , ROOT_PATH . 'src/View/layout/');
define('ASSETS' , ROOT_PATH. '/public/');

echo "Salut les noob";
echo "test branche secondaire";


if (isset($_GET['p'])){

    $p = $_GET['p'];
}
else{

    $p = "home";
}

if ($p === "home"){

    $controller = new App\Controller\PostController();
    $controller->index('home');

}elseif ($p === "post") {

    $controller = new App\Controller\PostController();
    $controller->byId($_GET['id'], 'presentation');

}elseif ($p === "login") {

    $controller = new App\Controller\AdminController();
    $controller->login();

}elseif ($p === "logout") {

    $controller = new App\Controller\AdminController();
    $controller->logout();

}
