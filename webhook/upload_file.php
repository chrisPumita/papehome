<?php
$id_produto_foto= $_POST['id_produto_foto'];
$nombreFILE1 = $_FILES['archivo']['name']; //Obteniendo el nombre1
$archivo1 = $_FILES['archivo']['tmp_name']; //OBteniendo el file1

if (isset($id_produto_foto)  && $_FILES['archivo']['name'] ) {
    include_once "../control/controlInventario.php";

    if (procesaFotoProducto($archivo1,$nombreFILE1,$id_produto_foto)){
        $type = 1;
        $mensaje = "Se ha subido la imagen del producto.";
        $action = "success";
    }
    else{
        $type  =-1;
        $action = "error";
        $mensaje = "VALIDACION FALLIDA, PARAMETROS INCORRECTOS";
    }
}
else{
    $type = 0;
    $action = "info";
    $mensaje = "Porfavor seleccione un archivo valido y vuelva a internarlo nuevamente. ";
}
$resultados = array(
    "mensaje" => $mensaje,
    "type" => $type,
    "action" => $action
);
echo json_encode($resultados);