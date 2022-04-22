<?php

 function crearCuentaUsuario($nombre,$app,$apm,$correo,$pw){
    include_once "../model/CLIENTE_USUARIO.php";
    include_once "keyGen/generadorClaves.php";
    $USER = new CLIENTE_USUARIO();
    $USER->setIdUsuario(gen_user_id());
    $USER->setNombre($nombre);
    $USER->setApp($app);
    $USER->setApm($apm);
    $USER->setEmail($correo);
    $USER->setPw(md5($pw));
    return $USER->create_usuario();
}

/*USUARIOS DEL SISTEMA*/
function verificaCuentaSesion($correo,$pw){
    include_once "../model/VENDEDOR.php";
    $VENDEDOR = new VENDEDOR();
    $VENDEDOR->setEmail($correo);
    $VENDEDOR->setPw(md5($pw));
    $result = $VENDEDOR->query_valida_user();
    if ($result){
        session_start();
        $_SESSION['admin_name'] = $result[0]['nombre'];
        return true;
    }
    else{
        return false;
    }
}
/*USUARIOS DEL SISTEMA*/