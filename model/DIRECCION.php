<?php
include_once "../model/PDODB.php";
class DIRECCION extends PDODB
{
    private $id_dir;
    private $id_usuario;
    private $nombre;
    private $apellidos;
    private $telefono;
    private $celular;
    private $calle;
    private $cp;
    private $estado;
    private $municipio;
    private $colonia;
    private $referencias;
    private $empresa;

    public function getIdDir()
    {
        return $this->id_dir;
    }

    public function setIdDir($id_dir)
    {
        $this->id_dir = $id_dir;
    }

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

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    public function getCalle()
    {
        return $this->calle;
    }

    public function setCalle($calle)
    {
        $this->calle = $calle;
    }

    public function getCp()
    {
        return $this->cp;
    }

    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getMunicipio()
    {
        return $this->municipio;
    }

    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    }

    public function getColonia()
    {
        return $this->colonia;
    }

    public function setColonia($colonia)
    {
        $this->colonia = $colonia;
    }

    public function getReferencias()
    {
        return $this->referencias;
    }

    public function setReferencias($referencias)
    {
        $this->referencias = $referencias;
    }

    public function getEmpresa()
    {
        return $this->empresa;
    }

    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }

    public function queryRegistraDireccion()
    {
        $query = "INSERT INTO `direcciones` 
        (`id_dir`, `id_usuario`, `nombre`, `apellidos`, `telefono`, `celular`,
         `calle`, `cp`, `estado`, `municipio`, `colonia`, `referencias`, `empresa`) 
         VALUES (NULL, '".$this->getIdUsuario()."', '".$this->getNombre()."',
          '".$this->getApellidos()."', '".$this->getTelefono()."', '".$this->getCelular()."',
           '".$this->getCalle()."', '".$this->getCp()."', '".$this->getEstado()."',
            '".$this->getMunicipio()."', '".$this->getColonia()."', 
            '".$this->getReferencias()."', '".$this->getEmpresa()."')";
            return $this->ejecutarSQL($query);
    }

    public function queryConsultaDirecciones()
    {
        $query = "SELECT `id_dir`, `id_usuario`, `nombre`, `apellidos`, `telefono`, 
        `celular`, `calle`, `cp`, `estado`, `municipio`, `colonia`, `referencias`, `empresa` 
        FROM `direcciones` WHERE  `id_usuario` = ".$this->getIdUsuario()." ORDER BY `calle`";
        return $this->consultaSQL($query);
    }

    public function queryUpdateDireccion(){
        $query = "UPDATE `direcciones` SET 
        `nombre` = '".$this->getNombre()."', 
        `apellidos` = '".$this->getApellidos()."', 
        `telefono` = '".$this->getTelefono()."', 
        `celular` = '".$this->getCelular()."', 
        `calle` = '".$this->getCalle()."', 
        `cp` = '".$this->getCp()."', 
        `estado` = '".$this->getEstado()."', 
        `municipio` = '".$this->getMunicipio()."', 
        `colonia` = '".$this->getColonia()."', 
        `referencias` = '".$this->getReferencias()."', 
        `empresa` = '".$this->getEmpresa()."' 
        WHERE `direcciones`.`id_dir` = ".$this->getIdDir();
        return $this->ejecutarSQL($query);
    }
    
    
}