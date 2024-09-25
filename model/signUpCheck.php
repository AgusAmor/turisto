<?php
session_start();
require '../partials/connect.php';

$email = $_POST['email'];

$stmt = $con->prepare("SELECT COUNT(*) FROM user WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($emailExists);
$stmt->fetch();
$stmt->close();

if ($emailExists) {
    echo "Este correo electrónico ya está registrado.";
}else{
    echo "Usuario registrado con exito.";
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $name = $con->real_escape_string($_POST['name']);
    $surname = $con->real_escape_string($_POST['surname']);
    $nationality = $con->real_escape_string($_POST['nationality']);
    $phone = $_POST['phone'];
    $access = 'usuario';
    $banned = false;

    $name = $con->real_escape_string($_POST['name']);

    $stmt = $con->prepare("INSERT INTO user (email, password, name, surname, nationality, phone, access, banned) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssisb", $email, $pass, $name, $surname, $nationality, $phone, $access, $banned);
    $stmt->execute();
    $stmt->close();
}



















// $name = $_POST['name'];
// $surname = $_POST['surname'];
// $nationality = $_POST['nationality'];
// $phone = $_POST['phone'];
// $email = $_POST['email'];
// $pass = $_POST['pass'];


// if (!isset($_POST['terms'])){
//     header("Location: /web-app-turisto/signUp?terms=notAcepted");
//     die();
// }else if($mailvalido){
//     header("Location: /web-app-turisto/signUp?email=alreadyUsed");
//     die();
// }else{
//     $query = "INSERT INTO user SET name = '$name', surname = '$surname', 
//     email = '$email', password = MD5('$pass'), phone = '$phone', nationality = '$nationality',
//     access = 'usuario', banned = '0'";
        
//     mysqli_query($con, $query);
//     header ("Location: /web-app-turisto/?register=correct");

// }

?>