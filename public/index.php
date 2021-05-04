<?php

// include Composer's dependances
require __DIR__ . '/../vendor/autoload.php';

// include my controllers
require __DIR__ . '/../app/Controllers/CoreController.php';
require __DIR__ . '/../app/Controllers/MainController.php';
require __DIR__ . '/../app/Controllers/PlayerController.php';
require __DIR__ . '/../app/Controllers/TeamController.php';

// include my Models
require __DIR__ . '/../app/Models/CoreModel.php';
require __DIR__ . '/../app/Models/Team.php';
require __DIR__ . '/../app/Models/Player.php';

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

$router->map(
    'GET',
    '/players',
    [
        'method' => 'playerListPage',
        'controller' => 'PlayerController'
    ],
    'player-list'
);

$router->map(
    'GET',
    '/players/[i:id]',
    [
        'method' => 'player',
        'controller' => 'PlayerController'
    ],
    'single-player'
);

$router->map(
    'GET',
    '/players/add',
    [
        'method' => 'add',
        'controller' => 'PlayerController'
    ],
    'player-add'
);

$router->map(
    'POST',
    '/players/add',
    [
        'method' => 'create',
        'controller' => 'PlayerController'
    ],
    'player-create'
);

$router->map(
    'GET',
    '/teams/[i:id]',
    [
        'method' => 'team',
        'controller' => 'TeamController'
    ],
    'single-team'
);

$router->map(
    'GET',
    '/ranks',
    [
        'method' => 'rankings',
        'controller' => 'TeamController'   
    ],
    'ranking'
);

$router->map(
    'GET',
    '/players/update/[i:id]',
    [
        'controller' => 'PlayerController',
        'method' => 'showUpdate',
    ],
    'player-update'
);

$router->map(
    'POST',
    '/players/update/[i:id]',
    [
        'controller' => 'PlayerController',
        'method' => 'edit',
    ],
    'player-update-post'
);

$router->map(
    'GET',
    '/players/delete/[i:id]',
    [
        'controller' => 'PlayerController',
        'method' => 'delete',
    ],
    'player-delete'
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