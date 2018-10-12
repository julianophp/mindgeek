<?php

chdir(dirname(__DIR__));

require __DIR__ . '/../vendor/autoload.php';

$uri    = explode("/", $_SERVER['REQUEST_URI']);
$routes = require(__DIR__ . '/../src/Config/routes.php');

if (!isset($uri[2]) || !isset($routes[$uri[1]]) || !isset($routes[$uri[1]]['actions'][$uri[2]])) {
    header("HTTP/1.0 404 Not Found");
    exit;
}

$controllerName = "School\\Controller\\" . $routes[$uri[1]]['controller'];
$actionName     = $routes[$uri[1]]['actions'][$uri[2]]['name'];
$controller     = new $controllerName();

switch ($routes[$uri[1]]['actions'][$uri[2]]['method'])
{
    case 'GET':
        if (isset($uri[3])) {
            $controller->$actionName($uri[3]);
        } else {
            $controller->$actionName();
        }
        break;

    case 'POST':
        $post = json_decode(file_get_contents('php://input'), true);
        $controller->$actionName($post);
        break;
}
