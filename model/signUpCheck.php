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
    header ("Location: /web-app-turisto/signUp?user=registedAlready");
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
    header ("Location: /web-app-turisto/?user=registed");
}
$con->close();
?>