<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\Stay;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StaysSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $patientIds = Patient::pluck('id')->toArray();

        Stay::create([
            'patient_id' => $faker->randomElement($patientIds),
            'room_id' => $faker->randomNumber(5),
            'start_time' => $faker->dateTime,
            'end_time' => $faker->dateTime,
            'status' => $faker->numberBetween(0, 1),
            'amount' => $amount = $faker->randomNumber(5),
            'discount' => $discount = $faker->randomNumber(5),
            'total' => $amount - $discount,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
