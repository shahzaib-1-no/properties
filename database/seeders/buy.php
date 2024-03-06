<?php

namespace Database\Seeders;

use App\Models\buy as ModelsBuy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class buy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        if(!ModelsBuy::where('name','House')->exists()){
            ModelsBuy::create(['name'=>'House']);
        }
        if(!ModelsBuy::where('name','Villa')->exists()){
            ModelsBuy::create(['name'=>'Villa']);
        }
        if(!ModelsBuy::where('name','Apartment')->exists()){
            ModelsBuy::create(['name'=>'Apartment']);
        }
        if(!ModelsBuy::where('name','Penthouse')->exists()){
            ModelsBuy::create(['name'=>'Penthouse']);
        }
        if(!ModelsBuy::where('name','Room')->exists()){
            ModelsBuy::create(['name'=>'Room']);
        }
        if(!ModelsBuy::where('name','Residential Land')->exists()){
            ModelsBuy::create(['name'=>'Residential Land']);
        }
        if(!ModelsBuy::where('name','Agricultural Land')->exists()){
            ModelsBuy::create(['name'=>'Agricultural Land']);
        }
        if(!ModelsBuy::where('name','Commerical Land')->exists()){
            ModelsBuy::create(['name'=>'Commerical Land']);
        }
        if(!ModelsBuy::where('name','Farm House')->exists()){
            ModelsBuy::create(['name'=>'Farm House']);
        }
        if(!ModelsBuy::where('name','Flat')->exists()){
            ModelsBuy::create(['name'=>'Flat']);
        }
        if(!ModelsBuy::where('name','Office')->exists()){
            ModelsBuy::create(['name'=>'Office']);
        }
        if(!ModelsBuy::where('name','Warehouse')->exists()){
            ModelsBuy::create(['name'=>'Warehouse']);
        }
        if(!ModelsBuy::where('name','Hotel Resort')->exists()){
            ModelsBuy::create(['name'=>'Hotel Resort']);
        }
        if(!ModelsBuy::where('name','Other')->exists()){
            ModelsBuy::create(['name'=>'Other']);
        }
    }
}
