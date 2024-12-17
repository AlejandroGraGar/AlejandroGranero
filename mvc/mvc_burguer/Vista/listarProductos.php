<?php
require_once "../Controlador/burguerController.php";

$controller = new BurguerController();
$productos = $controller->mostrarProductos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        td img {
            max-width: 150px;
            max-height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1>Listado de Productos</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?php echo htmlspecialchars($producto['id']); ?></td>
                    <td><?php echo htmlspecialchars($producto['name']); ?></td>
                    <td><?php echo htmlspecialchars($producto['description']); ?></td>
                    <td><?php echo htmlspecialchars($producto['price']); ?> €</td>
                    <td>
                        <?php if (!empty($producto['image'])): ?>
                            <img src="../Imagenes/<?php echo htmlspecialchars($producto['image']); ?>" alt="Imagen del Producto">
                        <?php else: ?>
                            No disponible
                        <?php endif; ?>
                    </td>
                    <td><?php echo htmlspecialchars($producto['category']); ?></td>
                    <td>
                    <td>
                        <a href="../Vista/modificarProducto.php?id=<?php echo urlencode($producto['id']); ?>">Modificar</a>&nbsp; 
                        <a href="eliminarProducto.php?id=<?php echo urlencode($producto['id']); ?>">Eliminar</a>
                    </td>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
