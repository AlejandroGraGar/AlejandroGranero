@extends("plantilla")
@section("titulo", "7.0.2")
@section('contenido')


    <h1>BIENVENIDO: {{ auth()->user()->name }}</h1> 
    @include('listar', ['frutas' => $frutas])

@endsection
</body>
</html>