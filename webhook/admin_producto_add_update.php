<?php
$id = $_POST['recipient-name'];
$idCat = $_POST['listCategorias'];
$idMarca = $_POST['listMarcas'];
$sku = $_POST['sku'];
$BarCode = $_POST['BarCode'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$almacenMinimo = $_POST['almacenMinimo'];
$presentacion = $_POST['listPresentacion'];
$costo = $_POST['costo'];
$descuento = $_POST['descuento'];
$action = $id>0?" actualizado":"registrado";
include_once"../control/controlInventario.php";
if(addUpadateProducto($id,$idCat,$idMarca,$sku,$BarCode,$nombre,$descripcion,$almacenMinimo,$presentacion,$costo,$descuento)){
    $mensaje = "Producto ".$action;
    $value = 1;
}
else{
    $mensaje = "CONTRASEÑA O NO DE VENDEDOR INCORRECTO";
    $value = 0;
}
$rest = array(
    "mensaje" => $mensaje,
    "response" => $value
);

echo json_encode($rest);