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

function signUpCheck(){
    require 'views/partials/connect.php';

    if ($con){
        $nom = $_POST['nom'];
        $apell = $_POST['apell'];
        $email = $_POST['user'];
        $contra = $_POST['pass'];
    
        $consulta = "INSERT INTO usuario SET nombre = '$nom', apellido = '$apell', 
        email = '$email', contra = MD5('$contra'), acceso = 'usuario', estado = 'activo'";
        
        mysqli_query($con, $consulta);
        header ("Location: /web-app/login?alta=ok");
    }

}