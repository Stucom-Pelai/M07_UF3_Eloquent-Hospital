<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Doctor;
use Faker\Factory as Faker;

class appointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $patients = Patient::pluck('id')->toArray();
        $doctors = Doctor::pluck('id')->toArray();

        foreach (range(1, 10) as $index) {
            Appointment::create([
                'patient_id' => $faker->randomElement($patients),
                'doctor_id' => $faker->randomElement($doctors),
                'intime' => $faker->dateTimeBetween('-1 month', '+1 month'),
                'outtime' => $faker->dateTimeBetween('+1 hour', '+2 hour'),
                'status' => $faker->randomElement(['pending', 'completed']),
                'description' => $faker->sentence,
                'prescription' => $faker->sentence,
                'created_at' => now()
            ]);
        }
    }
}
