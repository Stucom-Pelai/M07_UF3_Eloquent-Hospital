<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nurse;
use App\Models\Employee; // Asegúrate de importar correctamente el modelo Employee

class NursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Obtener todas las enfermeras que están registradas como empleadas
        $nurseEmployees = Employee::where("position", "nurse")->get();

        // Iterar sobre cada enfermera encontrada y crear un registro correspondiente en la tabla Nurse
        foreach ($nurseEmployees as $employee) {
            Nurse::create([
                "employee_id" => $employee->id,
            ]);
        }
    }
}
