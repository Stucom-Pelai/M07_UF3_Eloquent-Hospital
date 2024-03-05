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
        $faker = Faker::create();
        Doctor::create([
            "employee_id"=>employee::where("position","doctor")->first()->id,
        ]);
        Doctor::create([
            "employee_id"=>employee::where("position","doctor")->latest()->first()->id,
        ]);
    }
}
