<?php
include_once"../control/controlCuentas.php";

$correo = $_POST['correo'];
$password = $_POST['password'];
if(verificaCuentaSesion($correo,$password)){
    $mensaje = "CUENTA VALIDADA";
    $value = 1;
}
else{
    $mensaje = "CONTRASEÑA O NO DE VENDEDOR INCORRECTO";
    $value = 0;
}
$rest = array(
    "mensaje" => $mensaje,
    "response" => $value
);

echo json_encode($rest);
