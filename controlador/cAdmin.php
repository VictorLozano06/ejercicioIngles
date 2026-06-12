<?php
require_once __DIR__ . '/../modelo/mAdmin.php';
class cAdmin{
    public $vista;
    public $modelo;

    public function __construct(){
        $this->modelo= new mAdmin();
    }

    public function crearEjercicio(){
        
    }
}

?>