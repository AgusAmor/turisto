<?php
    session_start();
    require '../../partials/connect.php';

    if (isset($_POST['user'])){
        $email = $_POST['user'];
    }
    if (isset($_POST['pass'])){
        $pass = $_POST['pass'];
    }
    
    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
    
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    
    if ($row['access'] == 'usuario'){
        if ($row['banned'] == '1'){
            header("Location: /web-app-turisto/logIn?banned=youAreBanned");
        }else{
            $_SESSION = $row;
            header("Location: /web-app-turisto/");
        }
    }
    
    if($row == NULL){
        header("Location: /web-app-turisto/logIn?formIncompleto=1");
    }

?>