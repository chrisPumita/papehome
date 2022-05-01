<?php

$nombre = "JENNI";
$app = "MORALES";
$apm = "ROSAS";
$correo = "JENNI@gmail.com";
$pw = "1234";

include_once "../control/controlCuentas.php";

if (crearCuentaUsuario($nombre,$app,$apm,$correo,$pw)){
    echo "SE CREO EL USUIARIO";
}
else{
    echo "ERROR";
}