<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Libro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"], input[type="hidden"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0 20px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <form method="POST" action="upd_libros.php">
            <h3>Modificar un libro</h3>

            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" 
                       value="<?php echo isset($_POST['titulo']) ? htmlspecialchars($_POST['titulo']) : ''; ?>" 
                       required>
            </div>

            <div class="form-group">
                <label for="desc">Descripción:</label>
                <input type="text" id="desc" name="desc" 
                       value="<?php echo isset($_POST['desc']) ? htmlspecialchars($_POST['desc']) : ''; ?>" 
                       required>
            </div>

            <input type="hidden" id="libroupd_id" name="libroupd_id" 
                   value="<?php echo isset($_POST['libroupd_id']) ? htmlspecialchars($_POST['libroupd_id']) : ''; ?>">

            <button type="submit">Modificar</button>
        </form>
    </div>

</body>
</html>
