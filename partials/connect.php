<?php
$servidor = 'localhost';
$usuario = 'root';
$contrasena = '';
$bbdd = 'turisto';
$puerto = '336';


try{
    $con = new mysqli($servidor, $usuario, $contrasena, $bbdd, $puerto);
} catch (mysqli_sql_exception $e) {
    echo "Error de conexion con el seridor: " . $e->getMessage();
    echo "<br>";
    echo "<a href='" . htmlspecialchars($_SERVER['HTTP_REFERER']) . "'>Volver</a>";
    die();
}
?>