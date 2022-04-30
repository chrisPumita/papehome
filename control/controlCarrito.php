<?php

function loadCarrito($idSesion){
    include_once "../model/CARRITO.php";
    $CART = new CARRITO();
    $CART->setIdSesion($idSesion);
    $idCliente = isset($_SESSION['cliente_name']) ? $_SESSION['cliente_name'] : null;
    $CART->setIdUsuario($idCliente);

    $tmpCarrito = $CART->querySearchCarrito();
    if (!$tmpCarrito){
        $CART->createCarrito();
    }else{
        $tmpCarritoProductos = $CART->queryLoadCarrito();
        if (count($tmpCarritoProductos) > 0){
            //consultamos las imagenes
            include_once "../model/PRODUCTO.php";
            include_once "../model/IMAGEN.php";
            $PRO = new PRODUCTO();
            $PRODUCTOS_LIST = array();
            foreach ($tmpCarritoProductos as $prod)
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

    }



    return $tmpCarrito;
}

function addProductoCarrito($idProducto,$cant){
    session_start();
    $idSesion = session_id();
    include_once "./model/CARRITO.php";
    $CARR = new CARRITO();
    $CARR->setIdSesion($idSesion);
    return $CARR->insertaProductoCarrito($idProducto,$cant);
}