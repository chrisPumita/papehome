<?php

function creaVenta($idDir,$formaPago, $idCliente,$idCarrito,$email){
    include_once  "../model/VENTA.php";
    $vta = new VENTA();
    include_once "keyGen/generadorClaves.php";
    $vta->setIdVentaPedido(gen_no_venta());
    $vta->setIdUsuario($idCliente);
    $vta->setIdDirEntrega($idDir);
    $vta->setFormaEntrega("ENVIO A DOMICILIO");
    $vta->setIdVendedor(1);

    include_once "controlCarrito.php";
    $CARRITO = loadCarrito($idCarrito);

    switch ($formaPago){
        case "sucursal":
            $formaPago = "Pago en Sucursal";
            $edoPago= "Esperando Pago";
            break;
        case "deposito":
            $formaPago = "Pago por Deposito/Transferencia Bancaria";
            $edoPago= "Esperando Pago";
            break;
        case "paypal":
            $formaPago = "Pago por PayPal";
            $edoPago= "Pagado";
            break;
    }
    $vta->setFormaPago($formaPago);
    $vta->setEstatusPago($edoPago);

    $TOTAL = 0;
    $DESC = 0;
    $IVA = 0;
    $SUBTOTAL = 0;
    $list = array();
  //  var_dump($CARRITO);
    foreach ($CARRITO as $car)
    {
        $tmpProdExt = $car['producto'];
        $tmpProd = array(
            "id_producto"=>$tmpProdExt["id_producto"],
            "cantidad"=>$tmpProdExt["cantidad"],
            "costo"=>$tmpProdExt["costo_promedio"],
            "descuento"=>$tmpProdExt['descuento']
        );
        $total = ($tmpProdExt["cantidad"])*($tmpProdExt["costo_promedio"]-$tmpProdExt['descuento']);
        $descuento = $tmpProdExt['descuento'];
        $iva = ($total * .16);
        $subtotal = $total-$iva;

        $TOTAL+=$total;
        $DESC+= $descuento;
        $IVA+=$iva;
        $SUBTOTAL+= $subtotal;

        array_push($list,$tmpProd);

    }
//var_dump($list);
    //CALCULOS
    $costoEnvio = $TOTAL >= 500 ? 0:150;

    $vta->setCostoEnvio($costoEnvio);
    $vta->setSubtotal($SUBTOTAL);
    $vta->setDescuento($DESC);
    $vta->setIva($IVA);
    $vta->setTotal($TOTAL);

    if($vta->creaVentaNueva()){
        if($vta->querySaveDetailsVenta($list)) {
            //Borra el carrito actual
            include_once "../model/CARRITO.php";
            $CARRITO = new CARRITO();
            $CARRITO->setIdSesion($idCarrito);
            $CARRITO->borrarCarrito();
            return $vta->getIdVentaPedido();
        }
        else {return 0;}
    }
}

function consultaPedidos($idPedido,$idCliente){
    include_once "../model/PEDIDO.php";
    $PED = new PEDIDO();
    $PED->setIdVentaPedido($idPedido);
    $PED->setIdUsuario($idCliente);

    $pedidosArray = array();
    $PEDIDOS = $PED->queryConsultaPedidos();

    foreach($PEDIDOS as $p){
        $PED->setIdVentaPedido($p['id_venta_pedido']);
        $tmpArticulos = $PED->consultaArticulosPedido();
        $_PEDIDO = array(
            "infoPedido"=>$p,
            "productos"=>$tmpArticulos
        );
        array_push($pedidosArray,$_PEDIDO);
    }
    return $pedidosArray;
}