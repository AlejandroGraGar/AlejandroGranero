<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Nuevo Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Añadir Nueva Fruta</h1>

        <form action="{{ route('frutas.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="titulo" class="form-label">Nombre de fruta</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre de la fruta" required>
            </div>

            <div class="mb-3">
                <label for="autor" class="form-label">Temporada</label>
                <input type="text" class="form-control" id="editorial" name="temporada" placeholder="Ingresa el temporal de la fruta" required>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" class="form-control" id="precio" name="precio" placeholder="Ingresa el precio de la fruta" required>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Stock</label>
                <input type="number" step="0.01" class="form-control" id="stock" name="stock" placeholder="Ingresa el stock que existe" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Fruta</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
