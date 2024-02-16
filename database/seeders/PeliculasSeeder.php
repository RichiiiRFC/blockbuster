<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Pelicula;

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        


        for ($i = 4; $i < 20; $i++) {



            $faker = Faker::create();
            $pelicula = new Pelicula();
            $pelicula->id = $i;
            $pelicula->title = $faker->word;
            $pelicula->year = $faker->numberBetween(1990, 2023);
            $pelicula->director = $faker->name;
            $pelicula->poster = "a";
            $pelicula->rented = $faker->numberBetween(0, 1);
            $pelicula->synopsis = $faker->text;
            $pelicula->protagonista = $faker->userName;
            $pelicula->created_at = date('Y-m-d H:m:s');
            $pelicula->updated_at = date('Y-m-d H:m:s');
            $pelicula->save();

        }



    }




}
