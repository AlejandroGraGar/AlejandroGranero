<?php
include_once("header.php");
require_once "conexion.php";

$pdo = conectaDb();

$sql = "SELECT id, Titulo, Descripcion, created_at FROM task";
$result = $pdo->query($sql);
$libros = $result->fetchAll(PDO::FETCH_ASSOC);

echo "<table>";
echo "<tr>
        <th>ID</th>
        <th>Título</th>
        <th>Descripción</th>
        <th>Creado el:</th>
        <th>Acción:</th>
      </tr>";

foreach ($libros as $libro) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($libro['id']) . "</td>";
    echo "<td>" . htmlspecialchars($libro['Titulo']) . "</td>";
    echo "<td>" . htmlspecialchars($libro['Descripcion']) . "</td>";
    echo "<td>" . htmlspecialchars($libro['created_at']) . "</td>";
    echo "<td>
            <form method='POST' action='del_libro.php'>
                <input type='hidden' name='libro_id' value='" . htmlspecialchars($libro['id']) . "'>
                <button type='submit' class='delete-button'>Eliminar</button>
            </form>
            <form method='POST' action='modifica.php'>
                <input type='hidden' name='libroupd_id' value='" . htmlspecialchars($libro['id']) . "'>
                <button type='submit' class='edit-button'>Editar</button>
            </form>
          </td>";
    echo "</tr>";
}
echo "</table>";

$pdo = null;
?>
