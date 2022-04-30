<?php
include_once "../control/controlCarrito.php";
session_start();
$id_sesion = session_id();
$lista = loadCarrito($id_sesion);

if(count($lista)>0){
    $data = $lista;
    $mensaje = "Carrito con productos";
    $rows = count($lista);
    $value = 1;
}
else{
    $data = null;
    $mensaje = "No se han agregado productos  al carrito";
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