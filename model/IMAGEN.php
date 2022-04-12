<?php

class IMAGEN extends PDODB
{
    private $id_imagen;
    private $id_producto;
    private $path;

    public function getIdImagen()
    {
        return $this->id_imagen;
    }

    public function setIdImagen($id_imagen)
    {
        $this->id_imagen = $id_imagen;
    }

    public function getIdProducto()
    {
        return $this->id_producto;
    }

    public function setIdProducto($id_producto)
    {
        $this->id_producto = $id_producto;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($path)
    {
        $this->path = $path;
    }

}