<?php

class CATEGORIA extends PDODB
{
    private $id_categoria;
    private $id_categoria_fk;
    private $categoria;

    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    public function setIdCategoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;
    }

    public function getIdCategoriaFk()
    {
        return $this->id_categoria_fk;
    }

    public function setIdCategoriaFk($id_categoria_fk)
    {
        $this->id_categoria_fk = $id_categoria_fk;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

}