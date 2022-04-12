<?php

class VENDEDOR extends PDODB
{
    private $id_vendedor;
    private $nombre;
    private $app;
    private $apm;
    private $email;
    private $pw;
    private $puesto;
    private $telefono;

    public function getIdVendedor()
    {
        return $this->id_vendedor;
    }


    public function setIdVendedor($id_vendedor)
    {
        $this->id_vendedor = $id_vendedor;
    }


    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function getApp()
    {
        return $this->app;
    }


    public function setApp($app)
    {
        $this->app = $app;
    }


    public function getApm()
    {
        return $this->apm;
    }


    public function setApm($apm)
    {
        $this->apm = $apm;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getPw()
    {
        return $this->pw;
    }


    public function setPw($pw)
    {
        $this->pw = $pw;
    }


    public function getPuesto()
    {
        return $this->puesto;
    }


    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;
    }


    public function getTelefono()
    {
        return $this->telefono;
    }


    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

}