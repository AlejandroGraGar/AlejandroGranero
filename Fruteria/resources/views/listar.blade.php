<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Biblioteca</a>
            <div class="d-flex">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf 
                    <button type="submit" class="btn btn-danger">Cerrar sesión</button>
                </form>
            </div>
        </div>
    </nav>
@if($frutas->isNotEmpty())
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Temporada</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Modificar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($frutas as $fruta)
                        <tr>
                            <td>{{ $fruta->nombre }}</td>
                            <td>{{($fruta->temporada) }}</td>
                            <td>{{ number_format($fruta->precio, 2) }}€</td>
                            <td>{{ $fruta->stock }}</td>
                            <td>
                            <form action="{{ route('frutas.destroy', $fruta->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button>Borrar</button>
                            </form>

                            <a href="{{ route('frutas.edit', $fruta->id) }}" class="btn btn-primary">Editar</a>

                        </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning text-center">
                No hay frutas disponibles.
            </div>
        @endif
</body>
</html>

    

