<?php
/*GENERALES*/

function listaProductos($filtro){
    include_once "../model/PRODUCTO.php";
    $C = new PRODUCTO();
    return $C->queryListProducto($filtro);
}

function listaMarcas(){
    include_once "../model/MARCA.php";
    $M = new MARCA();
    return $M->queryListMarcas();
}

function listaCategorias(){
    include_once "../model/CATEGORIA.php";
    $C = new CATEGORIA();
    return $C->queryListCategoria();
}

function addUpadateProducto($id,$idCat,$idMarca,$sku,$BarCode,$nombre,$descripcion,$almacenMinimo,$presentacion,$costo,$descuento)
{
    include_once "../model/PRODUCTO.php";
    $pro = new PRODUCTO();
    $pro->setIdProducto($id);
    $pro->setIdMarca($idMarca);
    $pro->setIdCategoria($idCat);
    $pro->setSku($sku);
    $pro->setBarcode($BarCode);
    $pro->setNombre($nombre);
    $pro->setDescripcion($descripcion);
    $pro->setMinAlerta($almacenMinimo);
    $pro->setPresentacion($presentacion);
    $pro->setCostoPromedio($costo);
    $pro->setDescuento($descuento);
    return $pro->getIdProducto()>0 ? $pro->updateProducto() : $pro->insertProducto();
}


function consultaFotosProducto($id){
    include_once "../model/PRODUCTO.php";
    $pro = new PRODUCTO();
    $pro->setIdProducto($id);
    return $pro->queryListFotosProducto();
}

function listaProductosGalery($IdProducto,$filtro){
    include_once "../model/PRODUCTO.php";
    include_once "../model/IMAGEN.php";
    $PRO = new PRODUCTO();
    $PRO->setIdProducto($IdProducto);
    $result =  $PRO->queryListProducto($filtro);

    $PRODUCTOS_LIST = array();
    foreach ($result as $prod)
    {
        $PRO->setIdProducto($prod['id_producto']);
        $IMG = new IMAGEN();
        $IMG->setIdProd($PRO->getIdProducto());
        //Busqueda de imagenes de priducto
        $tmpProd = array(
            "producto"=>$prod,
            "fotos"=>$IMG->getFotos()
        );
        array_push($PRODUCTOS_LIST,$tmpProd);
    }
    return $PRODUCTOS_LIST;
}