<?php
require_once __DIR__ . '/controlador/cEjercicio.php';
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $controlador = new cEjercicio();
    $datos = $controlador->mostrarEjercicio($id);
    $vista = $controlador->vista;
    require_once __DIR__ . '/vistas/' . $vista . '.php';
}else{
    echo 'ID del ejercicio no proporcionado.';
}
?>