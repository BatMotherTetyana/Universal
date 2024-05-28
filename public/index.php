<?php

require __DIR__ . '/../vendor/autoload.php';

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {

    $homeController = new Limbo\ex7\Controllers\HomeController();
    $aboutController = new Limbo\ex7\Controllers\AboutController();
    $contactsController = new Limbo\ex7\Controllers\ContactsController();
    $catalogueController = new Limbo\ex7\Controllers\CatalogueController();

    $r->addRoute('GET', '/', [$homeController, 'index']);
    $r->addRoute('GET', '/home', [$homeController, 'index']);
    $r->addRoute('GET', '/about', [$aboutController, 'index']);
    $r->addRoute('GET', '/contacts', [$contactsController, 'index']);
    $r->addRoute('GET', '/catalogue',[$catalogueController,'index']);
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        header('Location: /');
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        header('Location: /');
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        call_user_func($handler, $vars);
        break;
}