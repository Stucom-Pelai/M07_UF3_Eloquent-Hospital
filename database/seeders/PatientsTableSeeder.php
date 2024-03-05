<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Doctor;
use App\Models\Employee;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Obtener médicos existentes
        $doctors = Doctor::join('employees', 'doctors.employee_id', '=', 'employees.id')
            ->select('doctors.id', 'employees.name as employee_name')
            ->get();

        foreach (range(1, 10) as $index) {
            $doctor = $doctors->random();

            DB::table('patients')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'age' => $faker->numberBetween(18, 90),
                'bloodgroup' => $faker->randomElement(['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-']),
                'photo_path' => $faker->imageUrl($width = 640, $height = 480),
                'status' => $faker->randomElement(['admitted', 'discharged', 'pending']),
                'image' => $faker->imageUrl($width = 640, $height = 480),
                'description' => $faker->sentence,
                'disease' => $faker->word,
                'doctor' => $doctor->employee_name,
                'admit_date' => $faker->dateTimeThisMonth()->format('Y-m-d'),
                'discharge_date' => $faker->dateTimeThisMonth()->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
