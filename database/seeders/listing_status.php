<?php

namespace Database\Seeders;

use App\Models\listing_status as ModelsListing_status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class listing_status extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!ModelsListing_status::where('name','active')->exists()){
            ModelsListing_status::create(['name'=>'active']);
        }
        if(!ModelsListing_status::where('name','pending')->exists()){
            ModelsListing_status::create(['name'=>'pending']);
        }
        if(!ModelsListing_status::where('name','sold')->exists()){
            ModelsListing_status::create(['name'=>'sold']);
        }
    }
}
