<?php

namespace Database\Seeders;

use App\Models\rent as ModelsRent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class rent extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        if(!ModelsRent::where('name','House')->exists()){
            ModelsRent::create(['name'=>'House']);
        }
        if(!ModelsRent::where('name','Villa')->exists()){
            ModelsRent::create(['name'=>'Villa']);
        }
        if(!ModelsRent::where('name','Apartment')->exists()){
            ModelsRent::create(['name'=>'Apartment']);
        }
        if(!ModelsRent::where('name','Penthouse')->exists()){
            ModelsRent::create(['name'=>'Penthouse']);
        }
        if(!ModelsRent::where('name','Room')->exists()){
            ModelsRent::create(['name'=>'Room']);
        }
        if(!ModelsRent::where('name','Residential Land')->exists()){
            ModelsRent::create(['name'=>'Residential Land']);
        }
        if(!ModelsRent::where('name','Agricultural Land')->exists()){
            ModelsRent::create(['name'=>'Agricultural Land']);
        }
        if(!ModelsRent::where('name','Commerical Land')->exists()){
            ModelsRent::create(['name'=>'Commerical Land']);
        }
        if(!ModelsRent::where('name','Farm House')->exists()){
            ModelsRent::create(['name'=>'Farm House']);
        }
        if(!ModelsRent::where('name','Flat')->exists()){
            ModelsRent::create(['name'=>'Flat']);
        }
        if(!ModelsRent::where('name','Office')->exists()){
            ModelsRent::create(['name'=>'Office']);
        }
        if(!ModelsRent::where('name','Warehouse')->exists()){
            ModelsRent::create(['name'=>'Warehouse']);
        }
        if(!ModelsRent::where('name','Hotel Resort')->exists()){
            ModelsRent::create(['name'=>'Hotel Resort']);
        }
        if(!ModelsRent::where('name','Other')->exists()){
            ModelsRent::create(['name'=>'Other']);
        }
    }
}
