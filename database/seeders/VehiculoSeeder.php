<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehiculo;
use Faker\Factory as Faker;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
               // Crear una instancia de Faker
               $faker = Faker::create();

               // Generar 10 vehículos
               for ($i = 0; $i < 10; $i++) {
                   Vehiculo::create([
                       'patente' => $faker->unique()->bothify('??###??'), // Formato de patente, por ejemplo: AB1234CD
                       'marca' => $faker->company, // Marca aleatoria
                       'modelo' => $faker->word, // Modelo aleatorio
                   ]);
               }
    }
}
