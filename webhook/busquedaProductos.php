<?php
//categoria
//keyword
//descuento
include_once"../control/controlInventario.php";
$cat = $_POST['cat'];
$keyword = $_POST["keyword"];
$descuento = $_POST["descuento"];
$lista = buscarProductos($cat,$keyword,$descuento);
if(count($lista)>0){
    $data = $lista;
    $mensaje = "Se econtraron productos de busqueda";
    $rows = count($lista);
    $value = 1;
}
else{
    $data = null;
    $mensaje = "No se econtraron productos al buscar";
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