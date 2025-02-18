<?php

use Illuminate\Support\Facades\Route;

//rutas controlador libros
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('inicio');
});



Route::get('login', function () {
    return 'login usuario';
});
Route::get('logout', function () {
    return 'logout usuario';
});


Route::get('catalog', function () {
    return 'listado de peliculas';
});

Route::get('catalog/show/{id}', function ($id = 0) {
    return "Numero de pelicula: $id";
});

Route::get('catalog/show/{id}', function ($num=3) {
    for ($i = 0; $i < 10; $i++){
        echo $num .'*'. $i . ' = '. ($num * $i).'</br>';
    }
});

Route::get('inicio', function () {
    return view('inicio');
})->name('inicio');



Route::get('/702', function(){
    

    for ($i = 0; $i < 100; $i++){
        $lista[] = rand(0,1);
    }
    
    $contador["M"] = 0;
    $contador["F"] = 0;
    
    for ($j = 0 ; $j < count($lista);$j++){
        if ($lista[$j] == 0 ){
            $contador["M"]++;
        }
        elseif ($lista[$j] == 1 ){
            $contador["F"]++;
        }
    }
    
    
    
    return view("702", compact('contador'));

})->name('arrayAsociativo');







use App\Models\Libro;

Route::get('/listar', function(){
    $libros = Libro::all(); 
    return view('libros.index', compact('libros'));


})->name('libros.index');

Route::get('/insertar', function(){
    return view('libros.insertar');

})->name('insertar');

Route::get('/borrar', function(){
    $libros = Libro::all(); 
    return view('libros.borrar', compact('libros'));

})->name('libros.borrar');




//registrar
Route::get('/registrar', function () {
    return view('registrar');
})->name('registrar');

//controller
Route::resource('libros', LibrosController::class);


//insertar
Route::get('libros/{id}', [LibrosController::class, 'show']);
Route::get('libros/insertar/{id}', [LibrosController::class, 'show']);

//Actualizar
Route::get('/libros/{id}/edit', [LibrosController::class, 'edit'])->name('libros.edit');

Route::put('/libros/{id}', [LibrosController::class, 'update'])->name('libros.update');



//login

Route::get('/login', function(){

    return view('auth.login');



})->name('libros.login');


Route::view('login', 'auth.login')->name('login');
Route::view('registrar', 'auth.registrar')->name('registrar');


Route::post('login', [LoginController::class, 'login'])->name('auth.login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('validarRegistro', [LoginController::class, 'register'])->name('validarRegistro');

//Control de acceso
Route::middleware(['auth'])->group(function () {
    Route::get('/listar', [LibroController::class, 'index'])->name('libros.index');
    Route::get('/insertar', [LibroController::class, 'create'])->name('insertar');
    Route::post('/libros', [LibroController::class, 'store']);
    Route::get('/libros/{id}/edit', [LibroController::class, 'edit'])->name('libros.edit');
    Route::put('/libros/{id}', [LibroController::class, 'update']);
    Route::delete('/libros/{id}', [LibroController::class, 'destroy'])->name('libros.destroy');
});