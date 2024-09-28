<?php
session_start();
require '../../partials/connect.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$nationality = $_POST['nationality'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['pass'];


if (!isset($_POST['terms'])){
    header("Location: /web-app-turisto/signUp?terms=notAcepted");
    die();
}else if($mailvalido){
    header("Location: /web-app-turisto/signUp?email=alreadyUsed");
    die();
}else{
    $query = "INSERT INTO user SET name = '$name', surname = '$surname', 
    email = '$email', password = MD5('$pass'), phone = '$phone', nationality = '$nationality',
    access = 'usuario', banned = '0'";
        
    mysqli_query($con, $query);
    header ("Location: /web-app-turisto/?register=correct");

}

?>