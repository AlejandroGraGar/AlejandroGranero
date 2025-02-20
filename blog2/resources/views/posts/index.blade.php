<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
@if(auth()->check())
    <a href="{{route('login')}}">Inicio Sesion</a>
    <p>Bienvenido {{Auth::user()->name}}</p>
@endif  
    <table>
        <thead>
            <td>Titulo</td>
            <td>Contenido</td>
            <td>Usuario</td>
            <td>Acciones</td>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->Titulo }}</td>
                    <td>{{ $post->Contenido }}</td>
                    <td>{{ $post->usuario->name }}</td>
                        <td>
                        <a href="{{route('posts.edit', $post->id)}}" >Editar</a>
                        <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Borrar">
                        </form>
                        
                    </td>
                </tr>
                @endforeach
                <a href="{{route('posts.create')}}">Crear post</a>
    </tbody>
    </table>
    <h1>prueba</h1>
</body>
</html>