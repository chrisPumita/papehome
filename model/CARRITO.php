<?php
include_once "../model/PDODB.php";
class CARRITO extends PDODB
{
    private $id_carrito;
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
    public function getIdCarrito()
    {
        return $this->id_carrito;
    }

    public function setIdCarrito($id_carrito)
    {
        $this->id_carrito = $id_carrito;
    }

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
        $sql = "INSERT INTO `carrito` (`id_carrito`, `id_sesion`, `id_usuario`, `create_at`) VALUES ('1231', 'CDS', '1', CURRENT_TIMESTAMP)";
    }

}