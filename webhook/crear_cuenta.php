<?php
include_once "../control/controlCuentas.php";
$nombre     = $_POST['nombre'];
$app        = $_POST['app'];
$apm        = $_POST['apm'];
$email      = $_POST['email'];
$password   = $_POST['password'];
$r_password = $_POST['r_password'];

if ($password == $r_password) {
    if (crearCuentaUsuario($nombre, $app, $apm, $email, $password))
    {
        $mensaje = "CUENTA VALIDADA";
        $value = 1;
    } else {
        $mensaje = "CONTRASEÑA O NO DE VENDEDOR INCORRECTO";
        $value = 0;
    }
} else {
    $mensaje = "Las contraseñas no coinciden";
    $value = -1;
}

$rest = array(
    "mensaje" => $mensaje,
    "response" => $value
);

echo json_encode($rest);