<?php

class CLIENTE_USUARIO
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
}