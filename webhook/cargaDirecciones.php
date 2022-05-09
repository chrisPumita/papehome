<?php
include_once"../control/controlCuentas.php";
session_start();
$idCliente = $_SESSION["id_usuario"];
$lista =consultaDIrecciones($idCliente);
if(count($lista)>0){
    $data = $lista;
    $mensaje = "Se econtraron direcciones";
    $rows = count($lista);
    $value = 1;
}
else{
    $data = null;
    $mensaje = "No se econtraron direcciones";
    $value = 0;
    $rows = 0;
}
$rest = array(
    "data" => $data,
    "mensaje" => $mensaje,
    "response" => $value,
    "numRows"=>$rows
);

echo json_encode($rest);