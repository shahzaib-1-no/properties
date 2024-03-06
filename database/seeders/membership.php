<?php

namespace Database\Seeders;

use App\Models\membership as ModelsMembership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class membership extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        if (!ModelsMembership::where('name', 'simple')->exists()) {
            ModelsMembership::create(['name' => 'simple']);
        }
        if (!ModelsMembership::where('name', 'verified')->exists()) {
            ModelsMembership::create(['name' => 'verified']);
        }
        if (!ModelsMembership::where('name', 'gold')->exists()) {
            ModelsMembership::create(['name' => 'gold']);
        }

        
    }
}
