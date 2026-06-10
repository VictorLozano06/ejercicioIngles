<?php
require_once __DIR__ . '/../config/bd.php';

class mConectar{
    protected $conexion;
    public function __construct(){
        try {
            $dsn = 'mysql:host=' .HOST. ';dbname='. DATABASE;
            $this->conexion = new PDO($dsn, USER, PASSWORD);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }
}
?>