<?php
require_once __DIR__ . '/mConectar.php';
class mInicioSesion extends mConectar{
    public function __construct(){
        parent::__construct();
    }

    public function iniciarSesion($email, $password){
        try {
            $sql = 'select * from admin where email = :email and constrasenia = :pw;';
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':pw', $password, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return 'Error en la base de datos: ' . $e->getCode();
        }
        
    }
}
?>
