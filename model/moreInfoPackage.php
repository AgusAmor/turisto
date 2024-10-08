<?php
require '../partials/connect.php';

if(isset($_GET['id_package'])){
    $id_package = $_GET['id_package'];

    $stmt = $con->prepare("SELECT * FROM package WHERE id_package = ?");
    $stmt->bind_param("s", $id_package);
    $stmt->execute();
    $stmt->bind_result($id_package, $country, $city, $passengers, $description, $image, $transfer, $luggage, $lodging);
    $stmt->fetch();
    $stmt->close();

    header ("Location: /web-app-turisto/?dsadasd");
}




?>