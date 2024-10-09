<?php
session_start();
require '../../config/connect.php';

if (isset($_SESSION['id'])){
    $origen = $_GET['origen'];
    $destino = $_GET['destino'];
    $ida = (!empty($_GET['idaM'])) ? $_GET['idaM'] : $_GET['ida'];
    $vuelta = (!empty($_GET['vueltaM'])) ? $_GET['vueltaM'] : $_GET['vuelta'];
    $adultos = (!empty($_GET['adultosM'])) ? $_GET['adultosM'] : $_GET['adultos'];
    $ninios = (!empty($_GET['niniosM'])) ? $_GET['niniosM'] : $_GET['ninios'];
    $mascotas = (!empty($_GET['mascotasM'])) ? $_GET['mascotasM'] : $_GET['mascotas'];
    
    $mensaje = "- Nombre: $_SESSION[name]\n- Apellido: $_SESSION[surname]\n- Nacionalidad: $_SESSION[nationality]\n- Contacto: $_SESSION[email] | $_SESSION[phone]\n- Origen: $origen | Destino: $destino\n- Fecha ida: $ida | Fecha vuelta: $vuelta\n- Pasajeros: adultos = $adultos | niños = $ninios | mascotas = $mascotas";
    
    var_dump ($_GET);
    echo "<br><br>$mensaje";

    // se transforma el mensaje para la URL
    $mensaje_url = urlencode($mensaje);

    // URL para enviar el mensaje por WhatsApp
    $numero_empresa = "5491164074689";
    $url_whatsapp = "https://wa.me/$numero_empresa?text=$mensaje_url";

    // te lleva a la URL
    header ("Location: $url_whatsapp");

}else{
    header ("Location: /web-app-turisto/?userNull=true");
    die();
}


?>