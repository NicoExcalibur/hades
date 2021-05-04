<?php

// include Composer's dependances
require __DIR__ . '/../vendor/autoload.php';

// include my controllers
require __DIR__ . '/../app/Controllers/CoreController.php';
require __DIR__ . '/../app/Controllers/MainController.php';

// include my Models
require __DIR__ . '/../app/Models/CoreModel.php';
require __DIR__ . '/../app/Models/Item.php';
require __DIR__ . '/../app/Models/Character.php';

// define the base path
$router = new AltoRouter;

// mapping paths
$router->map(
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => 'MainController'
    ],
    'homepage'
);

// comparing my path to existing paths
$match = $router->match();

if ($match === false) {
    exit ('erreur 404');
}

// triggers controller's method <= frontcontroller
// get method's, controller's and arguments names to use
$methodName = $match['target']['method'];
$controllerName = $match['target']['controller'];
$arguments = $match['params'];

$controller = new $controllerName();
$controller->$methodName($arguments);