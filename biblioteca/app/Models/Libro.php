<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'Libros';
    protected $fillable = [
        'titulo',
        'editorial',
        'precio'];

    public function index()
    {
        $libros = Libros::paginate(5);
        return view('libros.index', compact('libros'));
    }
}
