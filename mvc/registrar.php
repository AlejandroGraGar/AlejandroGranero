<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Crear Usuario</h1>

        <?php if (isset($_GET['error']) && $_GET['error'] === 'empty_fields'): ?>
            <div class="alert alert-danger text-center" role="alert">
                Por favor, llena todos los campos.
            </div>
        <?php elseif (isset($_GET['error']) && $_GET['error'] === 'registration_failed'): ?>
            <div class="alert alert-danger text-center" role="alert">
                Hubo un problema al registrar el usuario.
            </div>
        <?php elseif (isset($_GET['message']) && $_GET['message'] === 'registration_success'): ?>
            <div class="alert alert-success text-center" role="alert">
                Registro exitoso, ahora puedes iniciar sesión.
            </div>
        <?php endif; ?>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="controllers/userController.php?action=addUser" method="POST">
                    <div class="mb-3">
                        <label for="new_username" class="form-label">Usuario</label>
                        <input type="text" name="username" id="new_username" class="form-control" placeholder="Introduce un nuevo usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label">Contraseña</label>
                        <input type="password" name="password" id="new_password" class="form-control" placeholder="Introduce una contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Crear Usuario</button>
                </form>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-3">
            <a href="login.php" class="btn btn-secondary">Volver al Login</a>
        </div>
    </div>

</body>
</html>
