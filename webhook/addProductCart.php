<?php
if(isset($_POST['idProducto']) && isset($_POST['cantidad'])){
    include_once "../control/controlCarrito.php";
    $idProducto = $_POST['idProducto'];
    $cantidad = $_POST['cantidad'];
    if(addProductoCarrito($idProducto,$cantidad)){
        $mensaje = "Producto agregado";
        $value = 1;
    }
    else {
        $mensaje = "Este producto ya fue agregado";
        $value = -1;
    }
}
else{
    $mensaje = "ERROR DE PARAMETRO";
    $value = 0;
}


$rest = array(
    "mensaje" => $mensaje,
    "response" => $value
);

echo json_encode($rest);