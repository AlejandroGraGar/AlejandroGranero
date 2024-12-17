<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Iniciar Sesión</h1>

        

        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <form action="controllers/userController.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Usuario</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Introduce tu usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Introduce tu contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Entrar</button>
                </form>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <a href="registrar.php" class="btn btn-secondary">Registrarse</a>
        </div>
    </div>

</body>
</html>
