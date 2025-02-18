<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

@if($imparte->isNotEmpty())
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Asignatura</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach($imparte as $profe)
                        <tr>
                            <td>{{ $profe->dni }}</td>
                            <td>{{($profe->asignatura) }}</td>
                            
                            
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning text-center">
                No hay profes disponibles.
            </div>
        @endif
</body>
</html>

    

