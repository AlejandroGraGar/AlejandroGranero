<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
    <style>

    </style>
</head>
<body>
    <div class="form-container">
        <h1>Editar Libro</h1>
        <form action="{{ route('libros.update', $libro->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" id="titulo" name="titulo" value="{{ $libro->titulo }}" required>
            </div>
            <div class="form-group">
                <label for="autor">Editorial</label>
                <input type="text" id="editorial" name="editorial" value="{{ $libro->editorial }}" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Precio</label>
                <input type="number" id="precio" name="precio" value="{{ $libro->precio }}" required>
            </div>
            <div class="form-group">
                <button type="submit">Actualizar</button>
            </div>
        </form>
    </div>
</body>
</html>
