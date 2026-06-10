<?php
require_once __DIR__ . '/../modelo/mEjercicio.php';
class cEjercicio{
    public $vista;
    public $modelo;

    public function __construct(){
        $this->modelo = new mEjercicio();
    }

    public function mostrarEjercicio(){
        $datos = $this->modelo->listarEjercicio();
        $this->vista = 'vEjercicio';
        return $datos;
    }
    public function mostrarResultado($id){
        $datos = $this->modelo->listarResultado($id);
        $this->vista = 'vResultado';
        return $datos;
    }
}
?>