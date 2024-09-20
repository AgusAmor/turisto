<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//showInfo($uri);

$routes = [
    '/web-app-turisto/index.php' => 'controllers/index.php',
    
];

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        abort();
    }
}

routeToController($uri, $routes);

