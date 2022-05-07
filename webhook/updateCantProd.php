<?php

if (isset($_POST['idProducto']) && isset($_POST['cantidad'])) {
    include_once "../control/controlCarrito.php";
    $idProducto = $_POST['idProducto'];
    $cantidad = $_POST['cantidad'];
    if (updateCantCarrito($idProducto, $cantidad)) {
        $mensaje = "Producto actualizado";
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