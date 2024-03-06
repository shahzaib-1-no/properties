<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(role::class);
        $this->call(membership::class);
        $this->call(listing_status::class);
        $this->call(sell::class);
        $this->call(buy::class);
        $this->call(rent::class);
        $this->call(general_features::class);
        $this->call(interior_features::class);
        $this->call(exterior_features::class);
    }
}
