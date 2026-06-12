<?php
require_once __DIR__ . '/controlador/cAdmin.php';
if(isset($_GET['nombre']) && isset($_GET['descripcion'])){
    $i=0;
    
}




$controlador = new cAdmin();
$datos = $controlador->crearEjercicio();
$vista = $controlador->vista;
require_once __DIR__ . '/vistas/' . $vista . '.php';
?>