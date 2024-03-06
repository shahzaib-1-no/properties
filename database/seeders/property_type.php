<?php

namespace Database\Seeders;

use App\Models\property_type as ModelsProperty_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class property_type extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!ModelsProperty_type::where('name','House')->exists()){
            ModelsProperty_type::create(['name'=>'House']);
        }
        if(!ModelsProperty_type::where('name','Apartment')->exists()){
            ModelsProperty_type::create(['name'=>'Apartment']);
        }
        if(!ModelsProperty_type::where('name','Commercial')->exists()){
            ModelsProperty_type::create(['name'=>'Commercial']);
        }
        if(!ModelsProperty_type::where('name','Bungalow')->exists()){
            ModelsProperty_type::create(['name'=>'Bungalow']);
        }
        if(!ModelsProperty_type::where('name','Condominium')->exists()){
            ModelsProperty_type::create(['name'=>'Condominium']);
        }
        if(!ModelsProperty_type::where('name','Town House')->exists()){
            ModelsProperty_type::create(['name'=>'Town House']);
        }
        if(!ModelsProperty_type::where('name','Mansion')->exists()){
            ModelsProperty_type::create(['name'=>'Mansion']);
        }
    }
}
