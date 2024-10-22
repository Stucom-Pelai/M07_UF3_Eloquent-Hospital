<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\rooms;
use App\Models\Stay;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class staysSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $patientIds = Patient::pluck('id')->toArray();
        $roomIds = Rooms::pluck('id')->toArray();

        Stay::create([
            'patient_id' => $faker->randomElement($patientIds),
            'room_id' => $faker->randomElement($roomIds),
            'start_time' => $faker->dateTime,
            'end_time' => $faker->dateTime,
            'status' => $faker->randomElement(['active', 'completed']),
            'amount' => $amount = $faker->randomNumber(5),
            'discount' => $discount = $faker->randomNumber(5),
            'total' => $amount - $discount,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
