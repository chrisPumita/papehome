<?php
/*GENERALES*/

function listaProductos(){
    include_once "../model/PRODUCTO.php";
    $C = new PRODUCTO();
    return $C->queryListProducto();
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

function consultaProducto($id){
    include_once "../model/PRODUCTO.php";
    $pro = new PRODUCTO();
    $pro->setIdProducto($id);
    return $pro->queryListProducto();
}

function consultaFotosProducto($id){
    include_once "../model/PRODUCTO.php";
    $pro = new PRODUCTO();
    $pro->setIdProducto($id);
    return $pro->queryListFotosProducto();
}
