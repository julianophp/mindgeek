<?php

require '../vendor/autoload.php';

$uri    = explode("/", $_SERVER['REQUEST_URI']);
$routes = require('../src/Config/routes.php');

if (!isset($uri[2]) || !isset($routes[$uri[1]]) || !isset($routes[$uri[1]]['actions'][$uri[2]])) {
    header("HTTP/1.0 404 Not Found");
    exit;
}

$controllerName = "Mindgeek\\Controller\\" . $routes[$uri[1]]['controller'];
$actionName     = $routes[$uri[1]]['actions'][$uri[2]];

$controller = new $controllerName();

/* -------------------- POST METHOD NOT IMPLEMENTED ----------------*/
if ($routes[$uri[1]]['controller'] == 'StudentController') {        //
    $controller->$actionName([                                      //
        'id'            => 1,                                       //
        'name'          => 'Maria Silva',                           //
        'gradeList'     => [7, 4.5, 8],                             //
        'schoolBoard'   => new \Mindgeek\Model\SchoolBoardCsm()     //
    ]);                                                             //
    exit;                                                           //
}                                                                   //
/* -------------------- POST METHOD NOT IMPLEMENTED ----------------*/

if (isset($uri[3])) {
    $controller->$actionName($uri[3]);
} else {
    $controller->$actionName();
}

