<?php

namespace Database\Seeders;

use App\Models\settings;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        settings::create([
            'title' => 'Hospital Management System',
            'business_email' => 'testing@gmail.com',
            'address' => 'xyz, abc, 1234, Nepal',
            'business_phone' => '+911234567890',
            'working_horse' => '7:00 AM - 8:00 PM',
            'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore um.',
            'logo' => 'logo.png',
            'icon' => 'icon-logo.png',
            'facebook' => '#',
            'twitter' => '#',
            'instagram' => '#',
            'linkedin' => '#',
            'youtube' => '#',
            'pinterest' => '#'
        ]);
    }
}
