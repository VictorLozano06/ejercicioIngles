<?php
require_once __DIR__ . '/controlador/cEjercicio.php';
$controlador = new cEjercicio();
$datos = $controlador->mostrarEjercicio();
$vista = $controlador->vista;
require_once __DIR__ . '/vistas/' . $vista . '.php';
?>