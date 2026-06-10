<?php
require_once __DIR__ . '/../modelo/mInicio.php';

class cInicio{
    public $vista;
    public $modelo;

    public function __construct(){
        $this->modelo = new mInicio();
    }

    public function mostrarEjercicios(){
        $datos = $this->modelo->listarEjercicios();
        $this->vista = 'vInicio';
        return $datos;
    }
}
?>