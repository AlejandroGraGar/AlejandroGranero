<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Libro</title>
</head>
<body>
    <form method="POST" action="upd_libros.php">
        <h3>Modificar un libro</h3>
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" 
               value="<?php echo isset($_POST['titulo']) ? htmlspecialchars($_POST['titulo']) : ''; ?>" 
               required>
        <br>
        <label for="desc">Descripción:</label>
        <input type="text" id="desc" name="desc" 
               value="<?php echo isset($_POST['desc']) ? htmlspecialchars($_POST['desc']) : ''; ?>" 
               required>
        <br>
        <input type="hidden" id="libroupd_id" name="libroupd_id" 
               value="<?php echo isset($_POST['libroupd_id']) ? htmlspecialchars($_POST['libroupd_id']) : ''; ?>">
        <button type="submit">Modificar</button>
    </form>
</body>
</html>
