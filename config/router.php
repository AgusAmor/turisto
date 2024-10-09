<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function abort($value){
    echo "<pre>";
    var_dump($value);
    echo "no existe </pre>";
    die();
}

function showInfo($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

// showInfo($uri);

$routes = [
    //site
    '/web-app-turisto/' => 'app/controllers/index.php',
    //sesion
    '/web-app-turisto/signUp' => 'app/controllers/signUp.php',
];

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        abort($uri);
    }
}

routeToController($uri, $routes);