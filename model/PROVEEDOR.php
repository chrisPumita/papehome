<?php

class PROVEEDOR
{
    private $id_prioveedor;
    private $proveedor;

    public function getIdPrioveedor()
    {
        return $this->id_prioveedor;
    }

    public function setIdPrioveedor($id_prioveedor)
    {
        $this->id_prioveedor = $id_prioveedor;
    }

    public function getProveedor()
    {
        return $this->proveedor;
    }

    public function setProveedor($proveedor)
    {
        $this->proveedor = $proveedor;
    }
}