<?php

ini_set('display_errors', 1);

include '../vendor/autoload.php';

use App\Controller\ErrorController;
use App\Connection\Connection;

$connection = Connection::getConnection();

$query = 'SELECT * FROM tb_category;';

$preparacao = $connection->prepare($query);
$preparacao->execute();

//var_dump($preparacao);

//while ($registro = $preparacao-> fetch()) {
//    var_dump($registro);
//}

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

$routes = include '../config/routes.php';

if(false === isset($routes[$url])) {
    (new ErrorController()) -> notFoundAction();
    exit;
}

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName())->$methodName();







//$c = new IndexController();
//$c->loginAction();
//
//$p = new ProductController();
//$p->listAction();
//$p->addAction();
//$p->editAction();
//
//$cat = new CategoryController();
//$cat->listAction();
//$cat->addAction();
//$cat->editAction();

//echo 'Ola mundo';