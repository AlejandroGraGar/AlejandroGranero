<?php 

require_once "conexion.php";
$pdo = conectaDb();

try{

    if (isset($_POST['id_borrar'])) {
                $id_borrar = $_POST['id_borrar'];
                if ($id_borrar === 0) {
                    $pdo->exec("DELETE FROM task");
                } else {
                    $borrado_sql = "DELETE FROM task WHERE id = :id";
                    $borrado = $pdo->prepare($borrado_sql);
                    $borrado->bindParam(':id', $id_borrar, PDO::PARAM_INT);
                    $borrado->execute();
                }
            }
} catch (PDOException $e) {
    echo "No se pudo borrar";


}
$pdo = null;
header("Location:inicio.php");

