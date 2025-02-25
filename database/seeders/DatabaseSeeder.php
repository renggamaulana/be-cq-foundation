<?php

namespace Database\Seeders;

use App\Models\Donation;
use App\Models\Event;
use App\Models\Partner;
use App\Models\Program;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@mail.com',
        // ]);
        Donation::factory(10)->create();
        Program::factory(10)->create();
        Event::factory(10)->create();
        Partner::factory(10)->create();
    }
}
