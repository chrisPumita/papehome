<?php
include_once"../control/controlCuentas.php";

$correo = $_POST['email'];
$password = $_POST['password'];
if(verificaCuentaCliente($correo,$password)){
    $mensaje = "CUENTA VALIDADA";
    $value = 1;
}
else{
    $mensaje = "El usuario no existe, vualva a intentarlo.";
    $value = 0;
}
$rest = array(
    "mensaje" => $mensaje,
    "response" => $value
);

echo json_encode($rest);
