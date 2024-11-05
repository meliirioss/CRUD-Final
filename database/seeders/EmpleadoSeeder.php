<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;
use Faker\Factory as Faker;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Empleado::create([
                'nombre' => $faker->firstName,
                'apellido' => $faker->lastName,
                // Puedes agregar más campos si es necesario
            ]);
        }
    }
}