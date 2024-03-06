<?php

namespace Database\Seeders;

use App\Models\sell as ModelsSell;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class sell extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!ModelsSell::where('name','House')->exists()){
            ModelsSell::create(['name'=>'House']);
        }
        if(!ModelsSell::where('name','Villa')->exists()){
            ModelsSell::create(['name'=>'Villa']);
        }
        if(!ModelsSell::where('name','Apartment')->exists()){
            ModelsSell::create(['name'=>'Apartment']);
        }
        if(!ModelsSell::where('name','Penthouse')->exists()){
            ModelsSell::create(['name'=>'Penthouse']);
        }
        if(!ModelsSell::where('name','Room')->exists()){
            ModelsSell::create(['name'=>'Room']);
        }
        if(!ModelsSell::where('name','Residential Land')->exists()){
            ModelsSell::create(['name'=>'Residential Land']);
        }
        if(!ModelsSell::where('name','Agricultural Land')->exists()){
            ModelsSell::create(['name'=>'Agricultural Land']);
        }
        if(!ModelsSell::where('name','Commerical Land')->exists()){
            ModelsSell::create(['name'=>'Commerical Land']);
        }
        if(!ModelsSell::where('name','Farm House')->exists()){
            ModelsSell::create(['name'=>'Farm House']);
        }
        if(!ModelsSell::where('name','Flat')->exists()){
            ModelsSell::create(['name'=>'Flat']);
        }
        if(!ModelsSell::where('name','Office')->exists()){
            ModelsSell::create(['name'=>'Office']);
        }
        if(!ModelsSell::where('name','Warehouse')->exists()){
            ModelsSell::create(['name'=>'Warehouse']);
        }
        if(!ModelsSell::where('name','Hotel Resort')->exists()){
            ModelsSell::create(['name'=>'Hotel Resort']);
        }
        if(!ModelsSell::where('name','Other')->exists()){
            ModelsSell::create(['name'=>'Other']);
        }
        
    }
}
