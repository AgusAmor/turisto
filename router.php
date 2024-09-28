<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// showInfo($uri);

$routes = [
    //site
    '/web-app-turisto/' => 'controllers/index.php',
    
    //sesion
    '/web-app-turisto/signUp' => 'controllers/sesion/signUp.php',
];

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        abort($uri);
    }
}

routeToController($uri, $routes);