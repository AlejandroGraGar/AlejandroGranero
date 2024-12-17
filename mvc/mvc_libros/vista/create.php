<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Agregar Libro</h1>
        <div class="card shadow-sm p-4 bg-white">
            <form method="post" action="index.php?action=create">
                <div class="mb-3">
                    <label for="title" class="form-label">Título:</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Introduce el título del libro" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripción:</label>
                    <textarea name="description" id="description" class="form-control" rows="4" placeholder="Describe el libro" required></textarea>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
