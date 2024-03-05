<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nurse;
use Faker\Factory as Faker;
class NursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) { // Creando 10 usuarios, ajusta el número según sea necesario
            Nurse::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'gender' => $faker->randomElement(['male', 'female']),
                'address' => $faker->address,
                'qualification' => $faker->sentence(3),
                'photo' => null, // Puedes agregar lógica para generar o obtener fotos si es necesario
                'position' => $faker->jobTitle,
                'registered' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
            ]);
    }
}}
