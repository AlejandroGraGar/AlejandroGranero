<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;
use App\Http\Controllers\LibroControllers;


class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $libro = new Libro();
        $libro->titulo = "El libro del Seeder";
        $libro->editorial = "Seeder S.A.";
        $libro->precio = 10;
        $libro->save();
    }
}
