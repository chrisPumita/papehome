<?php
include_once"../control/controlInventario.php";
$id=$_POST['id'];
$lista =consultaProducto($id);
if(count($lista)>0){
    $data = $lista;
    $mensaje = "Producto encontrados";
    $rows = count($lista);
    $value = 1;
}
else{
    $data = null;
    $mensaje = "No se econtraron productos";
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