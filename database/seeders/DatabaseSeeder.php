<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Appointment;
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
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123'), 'email_verified_at' => now(),

        ]);


        \App\Models\Appointment::create([
            'topic' => 'Topic 1',
            'user_id' => 1,
            'location' => Appointment::LOCATION_ZOOM,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus culpa pariatur sapiente illo expedita? Mollitia laboriosam, rem quia eum voluptatibus et ullam? Autem, molestias quia. Aspernatur ducimus quae facere voluptate.',
            'custom_link' => 'topic-1',
            'meeting_url' => ' ',
            'start_date' => now(),
            'duration' => 1000,
            'color' => 1,
            'platform' => Appointment::PLATFORM_ZOOM,
            'status' => Appointment::STATUS_ACTIVE

        ]);
        \App\Models\Appointment::create([
            'topic' => 'Topic 2',
            'user_id' => 1,
            'location' => Appointment::LOCATION_ZOOM,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus culpa pariatur sapiente illo expedita? Mollitia laboriosam, rem quia eum voluptatibus et ullam? Autem, molestias quia. Aspernatur ducimus quae facere voluptate.',
            'custom_link' => 'topic-2',
            'meeting_url' => ' ',
            'start_date' => now(),
            'duration' => 1000,
            'color' => 1,
            'platform' => Appointment::PLATFORM_ZOOM,
            'status' => Appointment::STATUS_ACTIVE

        ]);
    }
}
