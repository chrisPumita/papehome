<?php
include_once"../control/controlCuentas.php";
$no_vendedor = $_POST['no_vendedor'];
$password = $_POST['password'];
if(verificaCuentaSesion($no_vendedor,$password)){
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