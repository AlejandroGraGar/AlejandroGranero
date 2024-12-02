<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Videojuegos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        table th {
            background-color: #0056b3;
            color: white;
        }
        form {
            background: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        form h3 {
            margin-top: 0;
            color: #0056b3;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #0056b3;
            color: white;
            border: none;
            padding: 10px 15px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #003d80;
        }
    </style>
</head>
<body>
    <h1>Gestión de Videojuegos</h1>

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
                if ($id_borrar != 0) {
                    $borrado_sql = "DELETE FROM Videojuegoss WHERE Id_juego = :id";
                    $borrado = $pdo->prepare($borrado_sql);
                    $borrado->bindParam(':id', $id_borrar, PDO::PARAM_INT);
                    $borrado->execute();
                } else {
                    $borrado_sql = "DELETE FROM Videojuegoss";
                    $borrado = $pdo->prepare($borrado_sql);
                    $borrado->execute();
                }
            }
        }

        $sql = "SELECT Id_juego, titulo, genero, precio FROM Videojuegoss";
        $result = $pdo->query($sql);
        $videojuegos = $result->fetchAll(PDO::FETCH_ASSOC);

        echo "<table>";
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

        $pdo = null;
    } catch (PDOException $e) {
        echo '<p style="color: red;">Falló la conexión: ' . $e->getMessage() . '</p>';
    }
    ?>

    <form method="POST" action="">
        <h3>Agregar un videojuego</h3>
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero" required>
        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" required>
        <button type="submit">Agregar</button>
    </form>

    <form method="POST" action="">
        <h3>Borrar un videojuego</h3>
        <label for="id_borrar">ID del videojuego (0 para borrar todos):</label>
        <input type="text" id="id_borrar" name="id_borrar" required>
        <button type="submit">Borrar</button>
    </form>
</body>
</html>
