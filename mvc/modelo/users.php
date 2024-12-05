<?php
require_once "../config/conexion_user.php";

class Users {
    private $db;

    public function __construct() {
        $conexion = new ConexionUser();
        $this->db = $conexion->conectar();
    }
    public function addUser($username, $pass) {
        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (username, password) VALUES (:username, :password)";
    
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $pass);
    
            if ($stmt->execute()) {
                return true; 
            } else {
                return false;
            }
        } catch (PDOException $e) {
            error_log("Error al insertar el usuario: " . $e->getMessage()); 
            return false; 
        }
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
