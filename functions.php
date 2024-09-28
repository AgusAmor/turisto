<?php

function showInfo($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($value){
    echo "<pre>";
    var_dump($value);
    echo "no existe </pre>";
    die();
}