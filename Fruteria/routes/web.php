<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruteriaController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\LoginController;
use App\Models\Fruta;
use App\Models\Profesores;
use App\Models\Imparte;


-


Route::get('/insertar', function(){
    return view('insertar');

})->name('insertar');


Route::get('/editar', function(){
    
    return view('editar');



})->name('frutas.edit');


Route::get('/borrar', function(){
    $frutas = Fruta::all(); 
    return view('frutas.borrar', compact('frutas'));

})->name('frutas.borrar');





Route::get('/asigProfe', function(){
    $imparte = Imparte::all();
    return view('profes.listar', compact('imparte'));
})->name('profesores.show');

Route::resource('frutas', FruteriaController::class);



//Login




Route::view('/login', 'auth.login')->name('auth.login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


//Registrar

Route::view('registrar', 'auth.registrar')->name('registrar');
Route::post('registrar', [LoginController::class, 'register'])->name('validarRegistro');


Route::middleware(['auth'])->group(function () {
    Route::get('/listar', [FruteriaController::class, 'index'])->name('inicio');
    Route::get('/insertar', [FruteriaController::class, 'create'])->name('insertar');
    Route::post('/frutas', [FruteriaController::class, 'store']);
    Route::get('/frutas/{id}/edit', [FruteriaController::class, 'edit'])->name('edit');
    Route::put('/frutas/{id}', [FruteriaController::class, 'update']);
    Route::delete('/frutas/{id}', [FruteriaController::class, 'destroy'])->name('destroy');
});