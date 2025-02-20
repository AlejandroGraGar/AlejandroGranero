<?php

namespace Database\Seeders;

use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $usu = new Usuario();
        $usu->name = $faker->firstNameMale; 
        $usu->password = bcrypt('admin');
        $usu->save(); 
    }
}
