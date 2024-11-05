<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Solicitud;
use Faker\Factory as Faker;

class SolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                $faker = Faker::create();

                for ($i = 0; $i < 10; $i++) {
                    Solicitud::create([
                        'dni' => $faker->unique()->numerify('########'),
                        'nombre' => $faker->firstName,
                        'apellido' => $faker->lastName,
                        'direccion' => $faker->address,
                    ]);
                }
    }
}
