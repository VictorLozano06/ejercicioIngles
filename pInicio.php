<?php
require_once __DIR__ . '/controlador/cInicio.php';
$controlador = new cInicio();
$datos = $controlador->mostrarEjercicios();
$vista = $controlador->vista;
require_once __DIR__ . '/vistas/' . $vista . '.php';
?>