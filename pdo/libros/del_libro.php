<?php
require_once "conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $pdo = conectaDb();

        if (!isset($_POST['libro_id'])) {
            echo "No se especificó el ID del libro.";
            exit();
        }

        $libro_id = $_POST['libro_id'];

        $delete_sql = "DELETE FROM task WHERE id = :id";
        $delete = $pdo->prepare($delete_sql);

        $delete->bindParam(':id', $libro_id, PDO::PARAM_INT);

        if ($delete->execute()) {
            header("Location: listar.php");
            exit();
        } else {
            echo "Error al eliminar el libro.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        $pdo = null;
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
