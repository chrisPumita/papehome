<?php
if (isset($_POST['idProducto'])) {
    include_once "../control/controlCarrito.php";
    $idProducto = $_POST['idProducto'];
    if (removeProductoCarrito($idProducto)) {
        $mensaje = "Producto eliminado";
        $value = 1;
    } else {
        $mensaje = "Error";
        $value = -1;
    }
} else {
    $mensaje = "ERROR DE PARAMETRO";
    $value = 0;
}

$rest = array(
    "mensaje" => $mensaje,
    "response" => $value
);

echo json_encode($rest);