<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Subir y Mostrar Imagen</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="post" action="compruebaImagen.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="foto" class="form-label">Selecciona una imagen:</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                    <input class="form-control" type="file" name="foto" required>
                </div>
                <button type="submit" value="submit" class="btn btn-primary w-100">Subir Imagen</button>
            </form>
        </div>
</body>
</html>