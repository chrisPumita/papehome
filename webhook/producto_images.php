<?php
include_once"../control/controlInventario.php";
$id=$_POST['id'];
$lista =consultaFotosProducto($id);
if(count($lista)>0){
    $data = $lista;
    $mensaje = "Fotos encontradas";
    $rows = count($lista);
    $value = 1;
}
else{
    $data = null;
    $mensaje = "Este producto no tiene imagenes";
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