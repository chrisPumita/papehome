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

/*USUARIOS DEL CLIENTE*/
function verificaCuentaCliente($correo,$pw){
    include_once "../model/CLIENTE_USUARIO.php";
    $CLIE = new CLIENTE_USUARIO();
    $CLIE->setEmail($correo);
    $CLIE->setPw(md5($pw));
    $result = $CLIE->validaCliente();
    if ($result){
        session_start();
        $_SESSION['cliente_name'] = $result[0]['nombre'];
        $_SESSION['id_usuario'] = $result[0]['id_usuario'];
        $_SESSION['nombre_completo'] = $result[0]['nombre']." ". $result[0]['app']." ". $result[0]['apm'];
        $_SESSION['email'] = $result[0]['email'];

        return true;
    }
    else{
        return false;
    }
}


function consultaDIrecciones($idCliente){
    include_once "../model/DIRECCION.php";
    $DIR = new DIRECCION();
    $DIR->setIdUsuario($idCliente);
    return $DIR->queryConsultaDirecciones();
}

function registraActualziaDireccion($idCliente, $idDir, $apellidos, $calle_numero, 
$celular, $colonia, $cp, $empresa, $estado, $municipio, $nombre, 
$referencias, $telefono){
    include_once "../model/DIRECCION.php";
    $DIR = new DIRECCION();
    $DIR->setIdUsuario($idCliente);
    $DIR->setIdDir($idDir);
    $DIR->setApellidos($apellidos);
    $DIR->setCalle($calle_numero);
    $DIR->setCelular($celular);
    $DIR->setColonia($colonia);
    $DIR->setCp($cp);
    $DIR->setEmpresa($empresa);
    $DIR->setEstado($estado);
    $DIR->setMunicipio($municipio);
    $DIR->setNombre($nombre);
    $DIR->setReferencias($referencias);
    $DIR->setTelefono($telefono);
    return $idDir != 0 ? $DIR->queryUpdateDireccion() : $DIR->queryRegistraDireccion();
}

/*USUARIOS DEL SISTEMA*/