<?php
include_once "../model/PDODB.php";
class CARRITO extends PDODB
{
    private $id_sesion;
    private $id_usuario;
    private $create_at;

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
    public function getIdSesion()
    {
        return $this->id_sesion;
    }

    public function setIdSesion($id_sesion)
    {
        $this->id_sesion = $id_sesion;
    }

    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    public function getCreateAt()
    {
        return $this->create_at;
    }

    public function setCreateAt($create_at)
    {
        $this->create_at = $create_at;
    }

    /*FUNCIONES DE CRUD*/
    public function createCarrito(){
        $sql = "INSERT INTO `carrito` (`id_sesion`, `id_usuario`, `create_at`) VALUES
            ('".$this->getIdSesion()."', NULL, CURRENT_TIMESTAMP)";
        return $this->ejecutarSQL($sql);
    }

    public function queryLoadCarrito(){
        $cliente = $this->getIdUsuario() != null ? " AND id_usuario = ".$this->getIdUsuario() : "";
        $query = "select tmp.cantidad, pro.id_producto, sku, barcode, nombre, descripcion,
       presentacion, costo_promedio, descuento, stock, estatus,
       tmp.id_sesion, id_usuario, create_at, m.id_marca, marca, c.id_categoria, categoria
from carrito cart
         inner join agregado_carrito_tmp tmp on cart.id_sesion = tmp.id_sesion
         inner join productos pro on pro.id_producto = tmp.id_producto
         inner join marca m on pro.id_marca = m.id_marca
         inner join categoria c on pro.id_categoria = c.id_categoria
where estatus > 0 and cart.id_sesion = '".$this->getIdSesion()."'  ".$cliente;
    return $this->consultaSQL($query);
    }

    public function querySearchCarrito(){
        $cliente = $this->getIdUsuario() != null ? " AND id_usuario = ".$this->getIdUsuario() : "";

        $query = "select id_sesion, id_usuario, create_at 
                    from carrito where id_sesion = '".$this->getIdSesion()."'". $cliente;
        return $this->consultaSQL($query);
    }

    public function insertaProductoCarrito($id_producto,$cant){
            $query = "INSERT INTO `agregado_carrito_tmp` (`id_sesion`, `id_producto`, `cantidad`)
            VALUES ('".$this->getIdSesion()."', '".$id_producto."', '".$cant."')";
            return $this->ejecutarSQL($query);
    }

    public function deleteProductoCarrito($idProducto){
        $query = "DELETE FROM `agregado_carrito_tmp` 
     WHERE `agregado_carrito_tmp`.`id_sesion` = '".$this->getIdSesion()."' 
     AND `agregado_carrito_tmp`.`id_producto` = ".$idProducto;

        return $this->ejecutarSQL($query);
    }

    public function updateCantProdCarrito($idProducto,$cant){
        $query = "UPDATE `agregado_carrito_tmp` SET `cantidad` = ".$cant." 
                    WHERE `agregado_carrito_tmp`.`id_sesion` = '".$this->getIdSesion()."' 
                    AND `agregado_carrito_tmp`.`id_producto` = ".$idProducto;
        return $this->ejecutarSQL($query);
    }


    public function borrarCarrito(){
        $query = "DELETE FROM `carrito` WHERE `carrito`.`id_sesion` = '".$this->getIdSesion()."'";
        return $this->ejecutarSQL($query);
    }

    public function asignarCarritoToUsuario(){
        $query = "UPDATE `carrito` SET `id_usuario` = '".$this->getIdUsuario()."' 
                    WHERE `carrito`.`id_sesion` = '".$this->getIdSesion()."'";
        return $this->ejecutarSQL($query);
    }
}