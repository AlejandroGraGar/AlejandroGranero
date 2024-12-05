<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Lista de Libros</h1>
        
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Fecha de Creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($task as $tableTask): ?>
                    <tr>
                        <td><?= $tableTask["id"] ?></td>
                        <td><?= $tableTask["title"] ?></td>
                        <td><?= $tableTask["description"] ?></td>
                        <td><?= $tableTask["created_at"] ?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?= $tableTask['id']?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="index.php?action=delete&id=<?= $tableTask['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
