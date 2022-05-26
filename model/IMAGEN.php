<?php
include_once "../model/PDODB.php";
class IMAGEN extends PDODB
{
    private $id_imagen;
    private $path;
    private $id_prod;

    /**
     * @return mixed
     */
    public function getIdProd()
    {
        return $this->id_prod;
    }

    /**
     * @param mixed $id_prod
     */
    public function setIdProd($id_prod)
    {
        $this->id_prod = $id_prod;
    }

    public function getIdImagen()
    {
        return $this->id_imagen;
    }

    public function setIdImagen($id_imagen)
    {
        $this->id_imagen = $id_imagen;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($path)
    {
        $this->path = $path;
    }

    public function getFotos()
    {
        $query = "select id_imagen, id_producto, path 
                from imagen where id_producto = ".$this->getIdProd();
        return $this->consultaSQL($query);
    }

    public function querySubeFoto(){
        $query = "INSERT INTO imagen (id_producto, path)
                        VALUES (".$this->getIdProd().", '".$this->getPath()."');";
        return $this->ejecutarSQL($query);
    }
}