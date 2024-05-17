<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Patient;
use App\Models\Doctor;

class patientSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();


        $doctorIds = Doctor::pluck('id');

        foreach (range(1, 10) as $index) {
            Patient::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'age' => $faker->numberBetween(18, 90),
                'bloodgroup' => $faker->randomElement(['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-']),
                'photo_path' => $faker->imageUrl(640, 480),
                'status' => $faker->randomElement(['admitted', 'discharged', 'pending']),
                'image' => $faker->imageUrl(640, 480),
                'description' => $faker->sentence,
                'disease' => $faker->word,
                'doctor' => $doctorIds->random(), 
                'admit_date' => $faker->dateTimeThisMonth()->format('Y-m-d'),
                'discharge_date' => $faker->dateTimeThisMonth()->format('Y-m-d'),
            ]);
        }
    }
}
