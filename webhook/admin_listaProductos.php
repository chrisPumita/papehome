<?php

include_once"../control/controlInventario.php";
$data =listaProductos("none");
echo json_encode([
    'data' => $data,
]);
/*
 *
 *
include_once"../control/controlInventario.php";
$lista =listaProductos();
if(count($lista)>0){
    $data = $lista;
    $mensaje = "Productos encontrados";
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

*/