<?php
include_once "../model/PDODB.php";
class MARCA extends PDODB
{
    private $id_marca;
    private $marca;

    public function getIdMarca()
    {
        return $this->id_marca;
    }

    public function setIdMarca($id_marca)
    {
        $this->id_marca = $id_marca;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    function queryListMarcas(){
        $query = "select id_marca, marca from marca order by marca";
        return $this->consultaSQL($query);
    }
}