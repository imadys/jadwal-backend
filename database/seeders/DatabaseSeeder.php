<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'username' => 'imadys',
            'name' => 'imad YURTSEVER',
            'email' => 'imadys@outlook.com',
            'password' => bcrypt('123'), 'email_verified_at' => now(),

        ]);


        \App\Models\Service::create([
            "name" => "Technical Consultation",
            "user_id" => 1,
            "description" => "<h5>Techincal consultation in any field.</h5>",
            "location" => Service::LOCATION_ZOOM,
            "date_range" => 60,
            "duration" => 45,
            "custom_link" => "imadys",
            "color" => "c-info",
            "status" => Service::STATUS_ACTIVE
        ]);

        \App\Models\Service::create([
            "name" => "Bug fix your code",
            "user_id" => 1,
            "description" => "<h5>Find and fix any bug in your code.</h5>",
            "location" => Service::LOCATION_ZOOM,
            "date_range" => 60,
            "duration" => 15,
            "custom_link" => "imadys",
            "color" => "c-success",
            "status" => Service::STATUS_ACTIVE
        ]);

    }
}
