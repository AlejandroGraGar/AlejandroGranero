<?php
require_once "../Conexion/conexion.php";

class Burguers {
    private $db;

    public function __construct() {
        $conexion = new Conexion();
        $this->db = $conexion->conectar();
    }
    
    public function addProducto(){




    }

    public function mostrarProductos(){
        try {
            $query = 'SELECT * FROM items';
            $registro = $this->db->prepare($query); 
            $registro->execute();
            return $registro->fetchAll(PDO::FETCH_ASSOC); 
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    public function actualizarProductos($id, $name, $description, $price, $image, $category) {
        try {
            $query = 'UPDATE items SET name = :name, description = :description, price = :price, image = :image, category = :category WHERE id = :id';
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':description', $description, PDO::PARAM_STR);
            $stmt->bindParam(':price', $price, PDO::PARAM_STR);
            $stmt->bindParam(':image', $image, PDO::PARAM_STR);
            $stmt->bindParam(':category', $category, PDO::PARAM_STR);
            return $stmt->execute(); // Devuelve true si la actualización fue exitosa
        } catch (PDOException $e) {
            echo "Error al actualizar el producto: " . $e->getMessage();
            return false;
        }
    }
    
    public function obtenerProductoPorId($id) {
        try {
            $query = 'SELECT * FROM items WHERE id = :id';
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al obtener el producto: " . $e->getMessage();
            return false;
        }
    }
    



    
}
?>
