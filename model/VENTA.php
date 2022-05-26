<?php
include_once "PDODB.php";
class VENTA extends PDODB
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
    private $costo_envio;

    /**
     * @return mixed
     */
    public function getCostoEnvio()
    {
        return $this->costo_envio;
    }

    /**
     * @param mixed $costo_envio
     */
    public function setCostoEnvio($costo_envio)
    {
        $this->costo_envio = $costo_envio;
    }

    /**
     * @return mixed
     */
    public function getIdVentaPedido()
    {
        return $this->id_venta_pedido;
    }

    /**
     * @param mixed $id_venta_pedido
     */
    public function setIdVentaPedido($id_venta_pedido)
    {
        $this->id_venta_pedido = $id_venta_pedido;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    /**
     * @return mixed
     */
    public function getIdDirEntrega()
    {
        return $this->id_dir_entrega;
    }

    /**
     * @param mixed $id_dir_entrega
     */
    public function setIdDirEntrega($id_dir_entrega)
    {
        $this->id_dir_entrega = $id_dir_entrega;
    }

    /**
     * @return mixed
     */
    public function getIdVendedor()
    {
        return $this->id_vendedor;
    }

    /**
     * @param mixed $id_vendedor
     */
    public function setIdVendedor($id_vendedor)
    {
        $this->id_vendedor = $id_vendedor;
    }

    /**
     * @return mixed
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @param mixed $subtotal
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
    }

    /**
     * @return mixed
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * @param mixed $descuento
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;
    }

    /**
     * @return mixed
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * @param mixed $iva
     */
    public function setIva($iva)
    {
        $this->iva = $iva;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getCreateAt()
    {
        return $this->create_at;
    }

    /**
     * @param mixed $create_at
     */
    public function setCreateAt($create_at)
    {
        $this->create_at = $create_at;
    }

    /**
     * @return mixed
     */
    public function getUpdateAt()
    {
        return $this->update_at;
    }

    /**
     * @param mixed $update_at
     */
    public function setUpdateAt($update_at)
    {
        $this->update_at = $update_at;
    }

    /**
     * @return mixed
     */
    public function getFormaEntrega()
    {
        return $this->forma_entrega;
    }

    /**
     * @param mixed $forma_entrega
     */
    public function setFormaEntrega($forma_entrega)
    {
        $this->forma_entrega = $forma_entrega;
    }

    /**
     * @return mixed
     */
    public function getFormaPago()
    {
        return $this->forma_pago;
    }

    /**
     * @param mixed $forma_pago
     */
    public function setFormaPago($forma_pago)
    {
        $this->forma_pago = $forma_pago;
    }

    /**
     * @return mixed
     */
    public function getEstatusPago()
    {
        return $this->estatus_pago;
    }

    /**
     * @param mixed $estatus_pago
     */
    public function setEstatusPago($estatus_pago)
    {
        $this->estatus_pago = $estatus_pago;
    }

    /**
     * @return mixed
     */
    public function getEstatusEnvio()
    {
        return $this->estatus_envio;
    }

    /**
     * @param mixed $estatus_envio
     */
    public function setEstatusEnvio($estatus_envio)
    {
        $this->estatus_envio = $estatus_envio;
    }

    /**
     * @return mixed
     */
    public function getNoGuia()
    {
        return $this->no_guia;
    }

    /**
     * @param mixed $no_guia
     */
    public function setNoGuia($no_guia)
    {
        $this->no_guia = $no_guia;
    }

    /**
     * @return mixed
     */
    public function getEstatusVenta()
    {
        return $this->estatus_venta;
    }

    /**
     * @param mixed $estatus_venta
     */
    public function setEstatusVenta($estatus_venta)
    {
        $this->estatus_venta = $estatus_venta;
    }

    public function creaVentaNueva()
    {
       $query = "    INSERT INTO `venta_pedido` (`id_venta_pedido`, `id_usuario`, `id_dir_entrega`, `id_vendedor`, 
                                `subtotal`, `descuento`, `iva`, `total`, `create_at`, `update_at`, `forma_entrega`, 
                                `forma_pago`, `estatus_pago`, `estatus_envio`, `no_guia`, `estatus_venta`, `costo_envio`) VALUES 
                    ('".$this->getIdVentaPedido()."', '".$this->getIdUsuario()."', '".$this->getIdDirEntrega()."', 
                    '".$this->getIdVendedor()."', '".$this->getSubtotal()."', '".$this->getDescuento()."', '".$this->getIva()."', 
                    '".$this->getTotal()."', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '".$this->getFormaEntrega()."', 
                    '".$this->getFormaPago()."', '".$this->getEstatusPago()."', 'EN PREPRACION', NULL, '1','".$this->getCostoEnvio()."')";
        return $this->ejecutarSQL($query);
    }

    public function querySaveDetailsVenta($list){
        $cont=0;
        $query = "INSERT INTO `detalle_venta` (`id_venta_pedido`, `id_producto`, `cantidad`, `precio_vta`, `descuento`) VALUES  ";
        foreach($list as $doc){
            $query.="('".$this->getIdVentaPedido()."', '".$doc['id_producto']."', '".$doc['cantidad']."', 
                        '".$doc['costo']."', '".$doc['descuento']."')";
            $cont++;
            $query.= count($list)== $cont ? ";": ",";
        }
        return $this->ejecutarSQL($query);
    }
}