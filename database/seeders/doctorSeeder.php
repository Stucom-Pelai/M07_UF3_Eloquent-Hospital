<?php

namespace Database\Seeders;

use App\Models\doctor;
use App\Models\employee;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class doctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $consignedDoctors = 5;
        $faker = Faker::create();
        for ($i=0; $i <= $consignedDoctors ; $i++) { 
    
        Doctor::create([
            "employee_id"=>employee::where("position","doctor")->latest()->skip($i)->first()->id,
         ]);

        }
    }
}
