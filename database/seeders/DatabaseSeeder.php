<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Storage::disk('public')->put('patient.png', config('app.url') . 'images/patient.png');
        Storage::disk('public')->put('doctor.png', config('app.url') . 'images/doctor.png');

        $this->call(RoleSeeder::class);
        User::create([
            'name' => 'root',
            'email' => 'root@test.com',
            'password' => bcrypt('root'),
            'role_id' => 1,
            'created_at' => now(),
        ]);

        User::create([
            'name' => 'student',
            'email' => 'student@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => 2,
            'created_at' => now(),
        ]);

        User::create([
            'name' => 'patient',
            'email' => 'patient@gmail.com',
            'password' => bcrypt('patient@'),
            'role_id' => 3,
            'created_at' => now(),
        ]);

        // User::create([
        //     'name' =>'store employeer',
        //     'email' =>'storeemployeer@test.com',
        //     'password' =>bcrypt('storeemployeer'),
        //     'role' =>'store man',
        //     'created_at' =>now(),
        // ]);
        // User::create([
        //     'name' =>'doctor',
        //     'email' =>'doctor@test.com',
        //     'password' =>bcrypt('doctor'),
        //     'role' =>'doctor',
        //     'created_at' =>now(),
        // ]);
        // User::create([
        //     'name' =>'zaman',
        //     'email' =>'zaman@test.com',
        //     'password' =>bcrypt('zaman'),
        //     'role' =>'PA',
        //     'created_at' =>now(),
        // ]);

        $this->call([
            SettingSeeder::class,
            employeeSeeder::class,
            blockSeeder::class,
            departmentSeeder::class,
            doctorSeeder::class,
            patientSeeder::class,
            appointmentSeeder::class,
            birthreportSeeder::class,
            HodSeeder::class,
            roomSeeder::class,
            bedsSeeder::class,
            medicineSeeder::class,
            NursesTableSeeder::class,
            staysSeeder::class,
            subscriberSeeder::class
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
