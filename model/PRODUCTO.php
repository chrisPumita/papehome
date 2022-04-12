<?php

class PRODUCTO extends PDODB
{
    private $id_producto;
    private $id_categoria;
    private $id_marca;
    private $sku;
    private $barcode;
    private $nombre;
    private $descripcion;
    private $min_alerta;
    private $presentacion;
    private $costo_promedio;
    private $descuento;
    private $stock;
    private $estatus;

    public function getIdProducto()
    {
        return $this->id_producto;
    }

    public function setIdProducto($id_producto)
    {
        $this->id_producto = $id_producto;
    }

    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    public function setIdCategoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;
    }

    public function getIdMarca()
    {
        return $this->id_marca;
    }

    public function setIdMarca($id_marca)
    {
        $this->id_marca = $id_marca;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    public function getBarcode()
    {
        return $this->barcode;
    }

    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getMinAlerta()
    {
        return $this->min_alerta;
    }

    public function setMinAlerta($min_alerta)
    {
        $this->min_alerta = $min_alerta;
    }

    public function getPresentacion()
    {
        return $this->presentacion;
    }

    public function setPresentacion($presentacion)
    {
        $this->presentacion = $presentacion;
    }

    public function getCostoPromedio()
    {
        return $this->costo_promedio;
    }

    public function setCostoPromedio($costo_promedio)
    {
        $this->costo_promedio = $costo_promedio;
    }

    public function getDescuento()
    {
        return $this->descuento;
    }

    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function getEstatus()
    {
        return $this->estatus;
    }

    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;
    }
}