<?php

namespace Database\Seeders;

use App\Models\exterior_features as ModelsExterior_features;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class exterior_features extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!ModelsExterior_features::where('name', 'Automatic gate')->exists()) {
            ModelsExterior_features::create(['name' => 'Automatic gate']);
        }
        if (!ModelsExterior_features::where('name', 'BBQ corner')->exists()) {
            ModelsExterior_features::create(['name' => 'BBQ corner']);
        }
        if (!ModelsExterior_features::where('name', 'Balcony')->exists()) {
            ModelsExterior_features::create(['name' => 'Balcony']);
        }
        if (!ModelsExterior_features::where('name', 'carport')->exists()) {
            ModelsExterior_features::create(['name' => 'carport']);
        }
        if (!ModelsExterior_features::where('name', 'Electric garage')->exists()) {
            ModelsExterior_features::create(['name' => 'Electric garage']);
        }
        if (!ModelsExterior_features::where('name', 'Fenced')->exists()) {
            ModelsExterior_features::create(['name' => 'Fenced']);
        }
        if (!ModelsExterior_features::where('name', 'Garage')->exists()) {
            ModelsExterior_features::create(['name' => 'Garage']);
        }
        if (!ModelsExterior_features::where('name', 'Garden')->exists()) {
            ModelsExterior_features::create(['name' => 'Garden']);
        }
        if (!ModelsExterior_features::where('name', 'Guarding')->exists()) {
            ModelsExterior_features::create(['name' => 'Guarding']);
        }
        if (!ModelsExterior_features::where('name', 'Parking')->exists()) {
            ModelsExterior_features::create(['name' => 'Parking']);
        }
        if (!ModelsExterior_features::where('name', 'Secured Parking')->exists()) {
            ModelsExterior_features::create(['name' => 'Secured Parking']);
        }
        if (!ModelsExterior_features::where('name', 'Security camera')->exists()) {
            ModelsExterior_features::create(['name' => 'Security camera']);
        }
        if (!ModelsExterior_features::where('name', 'Solar panels')->exists()) {
            ModelsExterior_features::create(['name' => 'Solar panels']);
        }
        if (!ModelsExterior_features::where('name', 'Water tank')->exists()) {
            ModelsExterior_features::create(['name' => 'Water tank']);
        }
        if (!ModelsExterior_features::where('name', 'Yard')->exists()) {
            ModelsExterior_features::create(['name' => 'Yard']);
        }
        if (!ModelsExterior_features::where('name', 'Stone wall')->exists()) {
            ModelsExterior_features::create(['name' => 'Stone wall']);
        }
        if (!ModelsExterior_features::where('name', 'Parking')->exists()) {
            ModelsExterior_features::create(['name' => 'Parking']);
        }
    }
}
