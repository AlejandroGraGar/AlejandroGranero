<?php

namespace Database\Seeders;
use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $post = new Post();
        $post->Titulo = $faker->firstNameMale; 
        $post->Contenido = $faker->randomElement(['Alfguara','Palneta','Bromera']);
        $post->usuario_id = $faker->randomElement([1, 2, 3]);
        $post->save(); 



    }
}
