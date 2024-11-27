<?php
session_start();

$articulos = array(
    array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
    array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
    array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
    array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio" => 20)
);

if (!isset($_SESSION['carro'])) {
    $_SESSION['carro'] = array();
    $_SESSION['total'] = 0;
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    foreach ($articulos as $articulo) {
        if ($articulo['id'] == $id) {
            $_SESSION['carro'][] = $articulo;
            $_SESSION['total'] += $articulo['precio'];
            break;
        }
    }
}

if (isset($_POST['clear_cart'])) {
    $_SESSION['carro'] = array();
    $_SESSION['total'] = 0;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center text-primary">Carro de Compras</h1>
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-success">Lista de Artículos</h2>
                <ul class="list-group">
                    <?php foreach ($articulos as $articulo): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><?php echo htmlspecialchars($articulo['nombre']); ?></span>
                            <span><?php echo htmlspecialchars($articulo['precio']); ?> €</span>
                            <a href="carro2.php?id=<?php echo $articulo['id']; ?>" class="btn btn-sm btn-outline-primary">Añadir</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-6">
                <h2 class="text-warning">Carro de Compras</h2>
                <ul class="list-group">
                    <?php if (empty($_SESSION['carro'])): ?>
                        <li class="list-group-item">El carro está vacío.</li>
                    <?php else: ?>
                        <?php foreach ($_SESSION['carro'] as $articulo): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span><?php echo htmlspecialchars($articulo['nombre']); ?></span>
                                <span><?php echo htmlspecialchars($articulo['precio']); ?> €</span>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
                <p class="mt-3 fs-4">Total: <span class="text-success"><?php echo htmlspecialchars($_SESSION['total']); ?> €</span></p>
                <form method="POST" class="mt-3">
                        <button type="submit" name="clear_cart" class="btn btn-danger w-100">Limpiar Carrito</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
