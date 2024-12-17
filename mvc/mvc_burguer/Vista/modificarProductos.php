<?php
require_once "../Controlador/burguerController.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $controller = new BurguerController();
    $producto = $controller->obtenerProductoPorId($id); 
} else {
    echo "No se especificó un ID de producto.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Producto</title>
</head>
<body>
    <h1>Modificar Producto</h1>
    <form action="modificarProductos.php" method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($producto['id']); ?>">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($producto['name']); ?>" required><br>
        <label for="description">Descripción:</label>
        <textarea id="description" name="description" required><?php echo htmlspecialchars($producto['description']); ?></textarea><br>
        <label for="price">Precio:</label>
        <input type="number" step="0.01" id="price" name="price" value="<?php echo htmlspecialchars($producto['price']); ?>" required><br>
        <label for="image">Imagen:</label>
        <input type="text" id="image" name="image" value="<?php echo htmlspecialchars($producto['image']); ?>"><br>
        <label for="category">Categoría:</label>
        <input type="text" id="category" name="category" value="<?php echo htmlspecialchars($producto['category']); ?>" required><br>
        <button type="submit">Modificar</button>
    </form>
</body>
</html>
