<?php
require_once __DIR__ . '/mConectar.php';

class mInicio extends mConectar{
    public function __construct(){
        parent::__construct();
    }

    public function listarEjercicios(){
        try{
            $sql = 'SELECT * FROM ejercicios';
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            return 'Error en la base de datos: ' . $e->getMessageCode();
        }
    }
}

?>