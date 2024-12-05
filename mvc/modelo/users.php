<?php
require_once "../config/conexion_user.php";

class Users {
    private $db;

    public function __construct() {
        $conexion = new ConexionUser();
        $this->db = $conexion->conectar();
    }

    public function compruebaLogin($username, $password) {
        try {
          
            $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE user = :username");
            $stmt->bindParam(':username', $username);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC); 

            if ($user && $password == $user['password']) {
                return $user;  
            }
        } catch (PDOException $e) {
            error_log("Error en la consulta de login: " . $e->getMessage()); 
        }

        return false; 
    }
    
}
?>
