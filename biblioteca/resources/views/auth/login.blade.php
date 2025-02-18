<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Login</h1>

        @if (!empty($error))
        <div class="text-danger">
            {{ $error }}
        </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="login" class="form-label">Login:</label>
                <input type="text" class="form-control" name="name" id="login" required />
            </div>

            <div class="form-group mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" name="email" id="email" required />
            </div>

            <div class="form-group mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" id="password" required />
            </div>
            <p><a href="{{route('registrar')}}">No tienes una cuenta</a></p>
            
            <input type="submit" name="enviar" value="Iniciar Sesión" class="btn btn-primary" />
        </form>
    </div>
</body>
</html>
