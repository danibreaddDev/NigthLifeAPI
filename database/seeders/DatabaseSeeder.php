<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Club;
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
        Club::factory(2)->create();
        $clubs = Club::all();
        foreach ($clubs as $club) {
            Event::factory(4)->create([
                'club_id' => $club->id,
            ]);
        }
    }
}
