<?php

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;


function createRoute(string $controllerName, string $methodName)
{
    return [
        'controller' => $controllerName,
        'method' => $methodName,
    ];
}

$routes = [
    '/' => createRoute(IndexController::class, 'indexAction'),
    '/produtos' => createRoute(ProductController::class, 'listAction'),
    '/produtos/novo' => createRoute(ProductController::class, 'addAction'),
    '/produtos/editar' => createRoute(ProductController::class, 'editAction'),
    '/categoria' => createRoute(CategoryController::class, 'listAction'),
    '/categoria/nova' => createRoute(CategoryController::class, 'addAction'),
    '/categoria/excluir' => createRoute(CategoryController::class, 'removeAction'),
    '/categoria/editar' => createRoute(CategoryController::class, 'updateAction'),
];

return $routes;