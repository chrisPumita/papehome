<?php
include_once "../model/PDODB.php";
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

    function queryListProducto($filtro){
        $promo = ""; $desc="";
        switch($filtro){
            case "offers":
                $desc = " AND descuento > 0 ";
                break;
            case "last";
                $promo = " ORDER BY id_producto DESC LIMIT 10 ";
                break;
            default:
                $promo = "";
                break;
        }

    $filtroProducto = $this->getIdProducto() >0 ? " AND p.id_producto = ".$this->getIdProducto() :"";
        $query = "select p.id_producto, p.id_marca, p.id_categoria,
       p.sku, p.barcode, p.nombre, p.descripcion, p.min_alerta, p.presentacion,
       p.costo_promedio, p.descuento, p.stock, p.estatus, c.categoria, m.marca,
       count(img.id_imagen) AS n_fotos
        from marca m, categoria c, productos p left join imagen img
        ON img.id_producto = p.id_producto
       WHERE p.estatus > 0
         AND c.id_categoria = p.id_categoria
         AND m.id_marca = p.id_marca ".$filtroProducto." ".$desc."
        group by p.id_producto ".$promo;

        return $this->consultaSQL($query);
    }

    function queryListFotosProducto(){
        $query = "select id_imagen, id_producto, path from imagen where id_producto = ".$this->getIdProducto();
        return $this->consultaSQL($query);
    }

    function insertProducto(){
        $query = "INSERT INTO `productos` (
                         `id_producto`, `id_categoria`, `id_marca`, `sku`, 
                         `barcode`, `nombre`, `descripcion`, `min_alerta`, 
                         `presentacion`, `costo_promedio`, `descuento`, `stock`, `estatus`) VALUES 
         (NULL, '".$this->getIdCategoria()."', '".$this->getIdMarca()."', '".$this->getSku()."', '".$this->getBarcode()."',
          '".$this->getNombre()."', '".$this->getDescripcion()."', '".$this->getMinAlerta()."', '".$this->getPresentacion()."',
           '".$this->getCostoPromedio()."', '".$this->getDescuento()."', '0', '1')";

        return $this->ejecutarSQL($query);
    }

    function updateProducto(){
        $query = "UPDATE productos t
                    SET t.id_categoria   = ".$this->getIdCategoria().",
                        t.id_marca       = ".$this->getIdMarca().",
                        t.sku            = ".$this->getSku().",
                        t.barcode        = '".$this->getBarcode()."',
                        t.nombre         = '".$this->getNombre()."',
                        t.min_alerta     = ".$this->getMinAlerta().",
                        t.presentacion   = '".$this->getPresentacion()."',
                        t.costo_promedio = ".$this->getCostoPromedio().",
                        t.descuento      = ".$this->getDescuento()."
                    WHERE t.id_producto = ".$this->getIdProducto().";";
        return $this->ejecutarSQL($query);
    }
}