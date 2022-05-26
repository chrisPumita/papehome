<?php

include_once "../control/controlVenta.php";

$idPedido= $_POST['idPedido'];
session_start();
$idCliente = $_SESSION['id_usuario'];
$data = consultaPedidos($idPedido,$idCliente);
if (count($data) > 0)
{
    $mensaje = "MOSTRANDO PEDIDOS";
    $value = 1;
} else {
    $mensaje = "ERROR";
    $value = 0;
    $data = null;
}

$rest = array(
    "mensaje" => $mensaje,
    "response" => $value,
    "data"=>$data
);

echo json_encode($rest);