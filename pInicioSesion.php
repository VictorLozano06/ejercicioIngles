<?php
require_once __DIR__ . '/controlador/cInicioSesion.php';
$controlador = new cInicioSesion();
if(isset($_POST['email']) && isset($_POST['pw'])){
    $correo = $_POST['email'];
    $pw = $_POST['pw'];
    $datos = $controlador->iniciarSesion($correo, $pw);
    $vista = $controlador->vista;
    if($vista === 'vError'){
        $error = 'Email o contrasenia incorrectos';
    }
    require_once __DIR__ . '/vistas/' . $vista . '.php';
}else{
    $error = 'Inicio de sesion fallido';
    $controlador->mostrarError($error);
    $vista = $controlador->vista;
    require_once __DIR__ . '/vistas/' . $vista . '.php';
}
?>
