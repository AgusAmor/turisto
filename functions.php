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

function logInCheck(){
    require 'partials/connect.php';

    if (isset($_POST['user'])){
        $email = $_POST['user'];
    }
    if (isset($_POST['pass'])){
        $contra = $_POST['pass'];
    }
    
    $query = "SELECT * FROM usuario WHERE email = '$email' AND contra = MD5('$contra')";
    
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    
    if ($row['acceso'] == 'usuario'){
        if ($row['estado'] == 'banneado'){
            header("Location: ");
        }else{
            $_SESSION = $row;
            header("Location: ");
        }
    }
    
    if($row == NULL){
        header("Location: ");
    }
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
