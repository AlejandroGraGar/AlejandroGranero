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

    <div class="container">
        <h1 class="text-center mb-4">Lista de Libros</h1>

        @if($libros->isNotEmpty())
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Título</th>
                        <th>Editorial</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($libros as $libro)
                        <tr>
                            <td>{{ $libro->titulo }}</td>
                            <td>{{ $libro->editorial }}</td>
                            <td>${{ number_format($libro->precio, 2) }}</td>
                            <td class="text-center">
                                <a href="{{ route('libros.edit', $libro->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este libro?');">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-center mt-3">
                <a href="{{ route('insertar') }}" class="btn btn-success">Insertar Nuevo Libro</a>
            </div>
        @else
            <div class="alert alert-warning text-center">
                No hay libros disponibles.
            </div>
        @endif
    </div>