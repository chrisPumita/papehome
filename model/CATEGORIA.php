<?php
include_once "../model/PDODB.php";
class CATEGORIA extends PDODB
{
    private $id_categoria;
    private $venta_online;
    private $categoria;

    public function getVentaOnline()
    {
        return $this->venta_online;
    }

    public function setVentaOnline($venta_online)
    {
        $this->venta_online = $venta_online;
    }


    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    public function setIdCategoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function queryListCategoria(){
        $query = "select id_categoria, categoria, venta_online
                    from categoria where venta_online = 1 order by categoria";
        return $this->consultaSQL($query);
    }



}