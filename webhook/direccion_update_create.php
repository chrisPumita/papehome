<?php
include_once"../control/controlCuentas.php";
session_start();
$idDir = $_POST['idDir'];
$apellidos = $_POST['apellidos'];
$calle_numero = $_POST['calle_numero'];
$celular = $_POST['celular'];
$colonia = $_POST['colonia'];
$cp = $_POST['cp'];
$empresa = $_POST['empresa'];
$estado = $_POST['estado'];
$municipio = $_POST['municipio'];
$nombre = $_POST['nombre'];
$referencias = $_POST['referencias'];
$telefono = $_POST['telefono'];
$idCliente = $_SESSION['id_usuario'];
if(registraActualziaDireccion($idCliente, $idDir, $apellidos, $calle_numero, 
$celular, $colonia, $cp, $empresa, $estado, $municipio, $nombre, 
$referencias, $telefono)){
    $mensaje = "Se ha ".($idDir != 0 ? "actualizado":"registrado")." la nueva Dirección";
    $value = 1;
}
else{
    $mensaje = "Error al tratar de registrar.";
    $value = 0;
}
$rest = array(
    "mensaje" => $mensaje,
    "response" => $value
);

echo json_encode($rest);
