<?php
    include_once("header.php");
    require_once "task.php";

    $pdo = conectaDb();

        $sql = "SELECT id, Titulo, Descripcion, created_at FROM task";
        $result = $pdo->query($sql);
        $libros = $result->fetchAll(PDO::FETCH_ASSOC);
        $sql = "ALTER TABLE task AUTO_INCREMENT = 1";
        $result = $pdo->query($sql);
   
echo "<table>";
        echo "<tr><th>Título</th><th>Título</th><th>Descripción</th><th>Creado el:</th><th>Acción:</th></tr>";
        foreach ($libros as $libro) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($libro['id']) . "</td>";
            echo "<td>" . htmlspecialchars($libro['Titulo']) . "</td>";
            echo "<td>" . htmlspecialchars($libro['Descripcion']) . "</td>";
            echo "<td>" . htmlspecialchars($libro['created_at']) . "</td>";
            echo "<td>
                <form method='POST' class='si' action='del_libro.php'>
                    <input type='hidden' name='libro_id' value='" . htmlspecialchars($libro['id']) . "'>

                    <button type='submit' class='delete-button' name='tit_borrar'></button>
                </form>
              </td>";
            echo "</tr>";
        }
    echo "</table>";
       
?>

