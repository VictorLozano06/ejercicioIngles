<?php
require_once __DIR__ . '/controlador/cEjercicio.php';
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $controlador = new cEjercicio();
    $datos = $controlador->mostrarResultado($id);
    $vista = $controlador->vista;
    require_once __DIR__ . '/vistas/' . $vista . '.php';
}
?>