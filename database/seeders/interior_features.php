<?php

namespace Database\Seeders;

use App\Models\Interior_features as ModelsInterior_features;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class interior_features extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!ModelsInterior_features::where('name', 'Alarm system')->exists()) {
            ModelsInterior_features::create(['name' => 'Alarm system']);
        }
        if (!ModelsInterior_features::where('name', 'Air conditioning')->exists()) {
            ModelsInterior_features::create(['name' => 'Air conditioning']);
        }
        if (!ModelsInterior_features::where('name', 'Automatic generator')->exists()) {
            ModelsInterior_features::create(['name' => 'Automatic generator']);
        }
        if (!ModelsInterior_features::where('name', 'Basement')->exists()) {
            ModelsInterior_features::create(['name' => 'Basement']);
        }
        if (!ModelsInterior_features::where('name', 'Centralized ventilation system')->exists()) {
            ModelsInterior_features::create(['name' => 'Centralized ventilation system']);
        }
        if (!ModelsInterior_features::where('name', 'Electric/Gas water heater')->exists()) {
            ModelsInterior_features::create(['name' => 'Electric/Gas water heater']);
        }
        if (!ModelsInterior_features::where('name', 'Energy efficiency-high')->exists()) {
            ModelsInterior_features::create(['name' => 'Energy efficiency-high']);
        }
        if (!ModelsInterior_features::where('name', 'Fire alarm sustem')->exists()) {
            ModelsInterior_features::create(['name' => 'Fire alarm sustem']);
        }
        if (!ModelsInterior_features::where('name', 'Internet/Wi-Fi')->exists()) {
            ModelsInterior_features::create(['name' => 'Internet/Wi-Fi']);
        }
        if (!ModelsInterior_features::where('name', 'Laundry room')->exists()) {
            ModelsInterior_features::create(['name' => 'Laundry room']);
        }
        if (!ModelsInterior_features::where('name', 'Lift')->exists()) {
            ModelsInterior_features::create(['name' => 'Lift']);
        }
        if (!ModelsInterior_features::where('name', 'Manual Generator')->exists()) {
            ModelsInterior_features::create(['name' => 'Manual Generator']);
        }
        if (!ModelsInterior_features::where('name', 'Sound proof')->exists()) {
            ModelsInterior_features::create(['name' => 'Sound proof']);
        }
        if (!ModelsInterior_features::where('name', 'TV room')->exists()) {
            ModelsInterior_features::create(['name' => 'TV room']);
        }
    }
}
