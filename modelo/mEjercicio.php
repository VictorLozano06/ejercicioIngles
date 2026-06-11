<?php
require_once __DIR__ . '/mConectar.php';

class mEjercicio extends mConectar{
    public function __construct(){
        parent::__construct();
    }

    public function listarEjercicio($id){
        try{
            $sql = 'select * from ejercicios inner join palabras on ejercicios.idEjercicio = palabras.idEjercicio where ejercicios.idEjercicio = :id;';
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            return 'Error en la base de datos: ' . $e->getMessageCode();
        }
    }
}
?>