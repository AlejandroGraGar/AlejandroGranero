<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>




<h1>Login</h1>
    @if (!empty($error))
    <div class="text-danger">
    {{ $error }}
    </div>
    @endif
    <form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="form-group">
    <label for="login">Login:</label>
    <input type="text" class="form-control" name="name" id="login" />
    </div>
    <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control"
    name="password" id="password" />
    </div>
    <input type="submit" name="enviar" value="Enviar"
    class="btn btn-dark btn-block">
    </form>


</body>
</html>