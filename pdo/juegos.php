<?php
$dsn = 'mysql:dbname=Videojuegos;host=127.0.0.1';
$usuario = 'root';
$contraseña = '';

try {
    $pdo = new PDO($dsn, $usuario, $contraseña);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['titulo'], $_POST['genero'], $_POST['precio'])) {
            $titulo = $_POST['titulo'];
            $genero = $_POST['genero'];
            $precio = $_POST['precio'];

            $insercion_sql = "INSERT INTO Videojuegoss(Id_juego, titulo, genero, precio) VALUES(0, :titulo, :genero, :precio)";
            $insercion = $pdo->prepare($insercion_sql);
            $insercion->bindParam(':titulo', $titulo);
            $insercion->bindParam(':genero', $genero);
            $insercion->bindParam(':precio', $precio);
            $insercion->execute();
        }

        if (isset($_POST['id_borrar'])) { 
            $id_borrar = $_POST['id_borrar'];
            if ($id_borrar !=0){
            $borrado_sql = "DELETE FROM Videojuegoss WHERE Id_juego = :id";
            $borrado = $pdo->prepare($borrado_sql);
            $borrado->bindParam(':id', $id_borrar, PDO::PARAM_INT);
            $borrado->execute();
            } elseif ($id_borrar==0) {
                $borrado_sql = "DELETE FROM Videojuegoss";
                $borrado = $pdo->prepare($borrado_sql);
                $borrado->execute();
            }
        }
    }

    $sql = "SELECT Id_juego, titulo, genero, precio FROM Videojuegoss";
    $result = $pdo->query($sql);
    $videojuegos = $result->fetchAll(PDO::FETCH_ASSOC);

    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Título</th><th>Género</th><th>Precio</th></tr>";
    foreach ($videojuegos as $juego) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($juego['Id_juego']) . "</td>";
        echo "<td>" . htmlspecialchars($juego['titulo']) . "</td>";
        echo "<td>" . htmlspecialchars($juego['genero']) . "</td>";
        echo "<td>" . htmlspecialchars($juego['precio']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo '<form method="POST" action="">
            <h3>Agregar un videojuego</h3>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required>
            <label for="genero">Género:</label>
            <input type="text" id="genero" name="genero" required>
            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio" required>
            <button type="submit">Agregar</button>
          </form>';

    echo '<form method="POST" action="">
            <h3>Borrar un videojuego</h3>
            <label for="id_borrar">ID del videojuego:</label>
            <input type="text" id="id_borrar" name="id_borrar" required>
            <button type="submit">Borrar</button>
          </form>';

    $pdo = null;
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}
?>
