<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Birthreport;
use App\Models\Patient;
use App\Models\Doctor;
use Faker\Factory as Faker;

class BirthreportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Obtener todos los pacientes y médicos existentes
        $patients = Patient::pluck('id')->toArray();
        $doctors = Doctor::pluck('id')->toArray();

        // Crear datos de informes de nacimiento ficticios utilizando Faker
        for ($i = 0; $i < 10; $i++) { // Cambia 10 por la cantidad de informes de nacimiento que deseas crear
            $description = $faker->sentence;
            $patientId = $patients[array_rand($patients)];
            $doctorId = $doctors[array_rand($doctors)];
            $gender = $faker->randomElement(['male', 'female']);

            // Insertar datos de informe de nacimiento ficticios en la base de datos
            Birthreport::create([
                'description' => $description,
                'patient_id' => $patientId,
                'doctor_id' => $doctorId,
                'gender' => $gender,
            ]);
        }
    }
}
