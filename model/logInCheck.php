<?php
    session_start();
    require '../partials/connect.php';

    if (isset($_POST['user'])){
        $email = $_POST['user'];
    }
    if (isset($_POST['pass'])){
        $pass = $_POST['pass'];
    }
    
    $stmt = $con->prepare("SELECT * FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($id, $email, $hashedPassword, $name, $surname, $nationality, $phone, $access, $banned);
    $stmt->fetch();
    $stmt->close();

if ($hashedPassword) {
    if (password_verify($pass, $hashedPassword)) {
        if ($access == 'usuario'){
            if ($banned == '1'){
                header("Location: /web-app-turisto/logIn?banned=youAreBanned");
            }else{
                $_SESSION['id'] = $id;
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $name;
                $_SESSION['surname'] = $surname;
                $_SESSION['nationality'] = $nationality;
                $_SESSION['phone'] = $phone;
                $_SESSION['access'] = $access;
                $_SESSION['banned'] = $banned;
                header("Location: /web-app-turisto/");
                echo "Contraseña correcta. Acceso permitido.";
            }
        } else {
            header("Location: /web-app-turisto/logIn?password=wrongPassword");
        }
    } else {
        header("Location: /web-app-turisto/logIn?email=emailNotFound");
    }
}
?>