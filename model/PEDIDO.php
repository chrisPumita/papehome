<?php
include_once "../model/PDODB.php";
class PEDIDO extends PDODB
{
    private $id_venta_pedido;
    private $id_usuario;
    private $id_dir_entrega;
    private $id_vendedor;
    private $subtotal;
    private $descuento;
    private $iva;
    private $total;
    private $create_at;
    private $update_at;
    private $forma_entrega;
    private $forma_pago;
    private $estatus_pago;
    private $estatus_envio;
    private $no_guia;
    private $estatus_venta;

    public $productos = array();

    public function getProductos()
    {
        return $this->productos;
    }

    public function setProductos($productos)
    {
        $this->productos = $productos;
    }

    /**************
     *  ATRIBUTOS *
     **************/
    public function getIdVentaPedido()
    {
        return $this->id_venta_pedido;
    }

    public function setIdVentaPedido($id_venta_pedido)
    {
        $this->id_venta_pedido = $id_venta_pedido;
    }

    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    public function getIdDirEntrega()
    {
        return $this->id_dir_entrega;
    }

    public function setIdDirEntrega($id_dir_entrega)
    {
        $this->id_dir_entrega = $id_dir_entrega;
    }

    public function getIdVendedor()
    {
        return $this->id_vendedor;
    }

    public function setIdVendedor($id_vendedor)
    {
        $this->id_vendedor = $id_vendedor;
    }

    public function getSubtotal()
    {
        return $this->subtotal;
    }

    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
    }

    public function getDescuento()
    {
        return $this->descuento;
    }

    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;
    }

    public function getIva()
    {
        return $this->iva;
    }

    public function setIva($iva)
    {
        $this->iva = $iva;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function getCreateAt()
    {
        return $this->create_at;
    }

    public function setCreateAt($create_at)
    {
        $this->create_at = $create_at;
    }

    public function getUpdateAt()
    {
        return $this->update_at;
    }

    public function setUpdateAt($update_at)
    {
        $this->update_at = $update_at;
    }

    public function getFormaEntrega()
    {
        return $this->forma_entrega;
    }

    public function setFormaEntrega($forma_entrega)
    {
        $this->forma_entrega = $forma_entrega;
    }

    public function getFormaPago()
    {
        return $this->forma_pago;
    }

    public function setFormaPago($forma_pago)
    {
        $this->forma_pago = $forma_pago;
    }

    public function getEstatusPago()
    {
        return $this->estatus_pago;
    }

    public function setEstatusPago($estatus_pago)
    {
        $this->estatus_pago = $estatus_pago;
    }

    public function getEstatusEnvio()
    {
        return $this->estatus_envio;
    }

    public function setEstatusEnvio($estatus_envio)
    {
        $this->estatus_envio = $estatus_envio;
    }

    public function getNoGuia()
    {
        return $this->no_guia;
    }

    public function setNoGuia($no_guia)
    {
        $this->no_guia = $no_guia;
    }

    public function getEstatusVenta()
    {
        return $this->estatus_venta;
    }

    public function setEstatusVenta($estatus_venta)
    {
        $this->estatus_venta = $estatus_venta;
    }

    public function queryConsultaPedidos()
    {
        $filtro = $this->getIdVentaPedido() > 0 ? "  AND vp.id_venta_pedido = ".$this->getIdVentaPedido()." ":"";
        $query = "select vp.id_venta_pedido, id_usuario, id_dir_entrega, id_vendedor, subtotal,
       descuento, iva, total, create_at, update_at, forma_entrega, forma_pago,
       estatus_pago, estatus_envio, no_guia, estatus_venta, costo_envio from venta_pedido vp
            where vp.id_usuario = ".$this->getIdUsuario()." ".$filtro;
        return $this->consultaSQL($query);
    }

    public function consultaArticulosPedido()
    {
        $query = "select cantidad, precio_vta, sku, barcode, nombre,
                       descripcion, presentacion, dv.descuento,
                       categoria, ma.marca
                from detalle_venta dv
                inner join productos p on p.id_producto = dv.id_producto,
                     categoria cat, marca ma
                where ma.id_marca = p.id_marca AND cat.id_categoria = p.id_categoria
                    AND dv.id_venta_pedido = ".$this->getIdVentaPedido();
        return $this->consultaSQL($query);
    }

}