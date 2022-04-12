<?php

 function crearCuentaUsuario($nombre,$app,$apm,$correo,$pw){
    include_once "../model/CLIENTE_USUARIO.php";
    $USER = new CLIENTE_USUARIO();
    $USER->setIdUsuario("2");
    $USER->setNombre($nombre);
    $USER->setApp($app);
    $USER->setApm($apm);
    $USER->setEmail($correo);
    $USER->setPw($pw);
    return $USER->create_usuario();
}