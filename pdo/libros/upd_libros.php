<?php
include("modifica.php")
?>

<?php
require_once "conexion.php"; 

$pdo = conectaDb();
$libro_id = $_POST['libroupd_id'];
$titulo = $_POST['titulo']; 
$desc = $_POST['desc']; 
    
    $update_sql = "UPDATE task set Titulo = :Titulo,  Descripcion = :Descripcion WHERE id = :id";
    $update = $pdo->prepare($update_sql);
    $update->bindParam(':id', $libro_id);
    $update->bindParam(':Titulo', $titulo);
    $update->bindParam(':Descripcion', $desc);
    
    if ($update->execute()) {
        header("Location: inicio.php");
        exit();
    } 




?>



</body>
</html>

    