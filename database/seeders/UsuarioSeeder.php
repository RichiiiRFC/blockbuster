<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Faker\Factory as Faker;

class UsuarioSeeder extends Seeder
{


    

    
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {



            $faker = Faker::create();
            $usuario = new Usuario();
            $usuario->id = $i;
            $usuario->nombre =$faker->name;
            $usuario->e_mail = $faker->email;
            
            $usuario->save();

        }
    }
}
