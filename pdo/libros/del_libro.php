<?php
require_once "task.php"; 

if (isset($_POST['libro_id'])) {
    $libro_id = $_POST['libro_id'];

    
    $pdo = conectaDb();

    
    $sql = "DELETE FROM task WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    
    $stmt->execute(['id' => $libro_id]);

    

} else {
    echo "No se recibió el ID del libro para eliminar.";
}

$pdo = null;
header("Location:inicio.php");