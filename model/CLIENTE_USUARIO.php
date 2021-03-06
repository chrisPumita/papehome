<?php
include_once "../model/PDODB.php";
class CLIENTE_USUARIO extends PDODB
{
    private $id_usuario;
    private $nombre;
    private $app;
    private $apm;
    private $email;
    private $pw;

    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
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

    /* FUNCIONES CRUD*/
    public function create_usuario(){
        $sql = "INSERT INTO `usuario` (`id_usuario`, `nombre`, `app`, `apm`, `email`, `pw`) VALUES 
            ('".$this->getIdUsuario()."', '".$this->getNombre()."', '".$this->getApp()."', '".$this->getApm().
            "', '".$this->getEmail()."', '".$this->getPw()."')";
        return $this->ejecutarSQL($sql);
    }

    public function validaCliente(){
        $sql = "SELECT `id_usuario`, `nombre`, `app`, `apm`, `email`, `created_at` 
                FROM `usuario` WHERE `email` = '".$this->getEmail()."' AND `pw` = '".$this->getPw()."'";
        return $this->consultaSQL($sql);
    }
}