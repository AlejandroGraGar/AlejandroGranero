<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

    <h1>Editar libro</h1>
    <form action="{{ route('posts.update', $postid->id) }}" method="POST">
        @csrf 
        @method('PUT')
    <div class="row mb-3">
    <div class="form-group">
    <label for="titulo">Título:</label>
    <input type="text" class="form-control" name="Titulo"id="titulo" value="{{$postid->Titulo}}">
    </div>
    <div class="form-group">
    <label for="editorial">Contenido:</label>
    <input type="text" class="form-control" name="Contenido"id="contenido" value="{{$postid->Contenido}}">
    </div>
    
   
    <input type="submit" name="enviar" value="Enviar" class="btn btn-dark
    btn-block">

    
</body>
</html>