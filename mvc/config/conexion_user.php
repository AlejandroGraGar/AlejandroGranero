<?php
class ConexionUser {
    private $pdo;
    private $host;
    private $nombreBD;
    private $usuario;
    private $password;

    public function __construct() {
        $this->pdo = "";
        $this->host = "localhost"; 
        $this->nombreBD = "usuarios";  
        $this->usuario = "root";  
        $this->password = "";  
    }

    public function conectar() {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->nombreBD;charset=utf8", $this->usuario, $this->password);
            return $this->pdo;  
        } catch (PDOException $e) {
            error_log("Error de conexión: " . $e->getMessage()); 
            exit;
        }
    }
}
?>
