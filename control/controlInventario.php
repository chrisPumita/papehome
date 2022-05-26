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

function addUpadateProducto($id,$idCat,$idMarca,$sku,$BarCode,$nombre,$descripcion,
                            $almacenMinimo,$presentacion,$costo,$descuento,$stock)
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
    $pro->setStock($stock);
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

function buscarProductos($cat,$keyword,$descuento){
    $showDesc = $descuento != 'none' ? true:false;
    include_once "../model/PRODUCTO.php";
    include_once "../model/IMAGEN.php";
    $PRO = new PRODUCTO();
    $result = $PRO->queryBuscaProductos($showDesc,$cat,"none",$keyword);
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

function procesaFotoProducto($archivo1,$nombreFILE1,$idProducto)
{
    include_once "../model/PRODUCTO.php";
    $PROD = new PRODUCTO();
    $PROD->setIdProducto($idProducto);

    $carpeta = '../galeria'; // URL COMPLETA
    if (!file_exists($carpeta)) {
        mkdir($carpeta, 0777, true);
    }
    $hoy= date('Y-m-d-His');
    $nombre= md5($idProducto.$hoy);
    $nombre =str_replace(' ', '', $nombre);
    $ruta1 = $carpeta.'/'.$nombreFILE1; // RUTA1 EXAMPLE: "/24072019.24/e-r.jpg"
    $extension = pathinfo($ruta1, PATHINFO_EXTENSION);

    if (move_uploaded_file($archivo1, $ruta1)){
        rename ($ruta1, $carpeta.'/'.$nombre.'.'.$extension); // RUTA1 EXAMPLE: "/24072019.24/tarjetaCirc.jpg"
        //Guardar en el modelo de arhcivo
        $path = $carpeta.'/'.$nombre.'.'.$extension;
        return $PROD->subirImagen(substr($path, 1));
    }
    else{
        return false;
    }
}