<?php
$servidor = 'localhost';
$usuario = 'root';
$contrasena = '';
$bbdd = 'turisto';
$puerto = '3306';

$con = new mysqli($servidor, $usuario, $contrasena, $bbdd, $puerto);

if ($con->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>