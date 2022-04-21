<?php
include_once "../model/PDODB.php";
class INGRESO extends PDODB
{
    private $id_ingreso;
    private $id_producto;
    private $id_proveedor;
    private $date_create;
    private $costo_compra;
    private $costo_operacion;
    private $costo_venta;
    private $cantiada;

    public function getIdIngreso()
    {
        return $this->id_ingreso;
    }

    public function setIdIngreso($id_ingreso)
    {
        $this->id_ingreso = $id_ingreso;
    }

    public function getIdProducto()
    {
        return $this->id_producto;
    }

    public function setIdProducto($id_producto)
    {
        $this->id_producto = $id_producto;
    }

    public function getIdProveedor()
    {
        return $this->id_proveedor;
    }

    public function setIdProveedor($id_proveedor)
    {
        $this->id_proveedor = $id_proveedor;
    }

    public function getDateCreate()
    {
        return $this->date_create;
    }

    public function setDateCreate($date_create)
    {
        $this->date_create = $date_create;
    }

    public function getCostoCompra()
    {
        return $this->costo_compra;
    }

    public function setCostoCompra($costo_compra)
    {
        $this->costo_compra = $costo_compra;
    }

    public function getCostoOperacion()
    {
        return $this->costo_operacion;
    }

    public function setCostoOperacion($costo_operacion)
    {
        $this->costo_operacion = $costo_operacion;
    }

    public function getCostoVenta()
    {
        return $this->costo_venta;
    }

    public function setCostoVenta($costo_venta)
    {
        $this->costo_venta = $costo_venta;
    }

    public function getCantiada()
    {
        return $this->cantiada;
    }

    public function setCantiada($cantiada)
    {
        $this->cantiada = $cantiada;
    }
}