<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FruteriaSeeder extends Seeder
{
    public function run()
    {
        DB::table('Frutas')->insert([
            [
                'nombre' => 'Manzana',
                'temporada' => 'Otoño',
                'precio' => 1.50,
                'stock' => 100,
            ],
            [
                'nombre' => 'Naranja',
                'temporada' => 'Invierno',
                'precio' => 1.20,
                'stock' => 150,
            ],
            [
                'nombre' => 'Fresa',
                'temporada' => 'Primavera',
                'precio' => 2.00,
                'stock' => 80,
            ],
            [
                'nombre' => 'Sandía',
                'temporada' => 'Verano',
                'precio' => 3.50,
                'stock' => 50,
            ],
        ]);
    }
}
