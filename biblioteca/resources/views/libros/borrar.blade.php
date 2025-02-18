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
        <h1 class="text-center mb-4">Borrar Libro</h1>
        
        @include('libros.listar')


        <form action="{{ route('libros.destroy') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="titulo" class="form-label">Título del libro</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresa el título del libro" required>
            </div>

            <div class="mb-3">
                <label for="autor" class="form-label">Editorial</label>
                <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Ingresa el nombre de la editorial" required>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" class="form-control" id="precio" name="precio" placeholder="Ingresa el precio del libro" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Libro</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
