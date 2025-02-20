<?php

namespace Database\Seeders;
use Faker\Factory as Faker;

use App\Models\Usuario;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call(PostsSeeder::class);
       $this->call(UsuariosSeeder::class);
    }
}
