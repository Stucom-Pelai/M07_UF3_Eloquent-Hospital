<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subscriber;
use Faker\Factory as Faker;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Crear datos de suscriptores ficticios utilizando Faker
        for ($i = 0; $i < 10; $i++) { // Cambia 10 por la cantidad de suscriptores que deseas crear
            $email = $faker->unique()->safeEmail;

            // Insertar datos de suscriptores ficticios en la base de datos
            Subscriber::create([
                'email' => $email,
            ]);
        }
    }
}
