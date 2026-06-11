<?php
require_once __DIR__ . '/../modelo/mInicioSesion.php';

class cInicioSesion{
    public $vista;
    public $modelo;

    public function __construct(){
        $this->modelo= new mInicioSesion();
    }

    public function iniciarSesion($email, $pw){
        $datos = $this->modelo->iniciarSesion($email, $pw);
        $this->vista = $datos ? 'vAdmin' : 'vError';
        return $datos;
    }
}
?>
