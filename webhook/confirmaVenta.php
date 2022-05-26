<?php
include_once "../control/controlCuentas.php";
$idDir      = $_POST['idDir'];
$formaPago  = $_POST['formaPago'];
include_once "../control/controlVenta.php";

session_start();
$idCliente = $_SESSION['id_usuario'];
$email = $_SESSION['email'];
$idCarrito = session_id();
$idPedido = creaVenta($idDir,$formaPago,$idCliente,$idCarrito,$email);

if ($idPedido>0)
{
    $mensaje = "VENTA RESALIAZADA";
    $idPedido = $idPedido;
    $value = 1;
} else {
    $mensaje = "ERROR";
    $value = 0;
    $idPedido = 0;
}

$rest = array(
    "mensaje" => $mensaje,
    "response" => $value,
    "idPedido"=> $idPedido
);

echo json_encode($rest);