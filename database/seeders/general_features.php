<?php

namespace Database\Seeders;

use App\Models\general_features as ModelsGeneral_features;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class general_features extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!ModelsGeneral_features::where('name','Close to bus stop')->exists()){
            ModelsGeneral_features::create(['name'=>'Close to bus stop']);
        }
        if(!ModelsGeneral_features::where('name','Access for disabled people')->exists()){
            ModelsGeneral_features::create(['name'=>'Access for disabled people']);
        }
        if(!ModelsGeneral_features::where('name','Close to clinic')->exists()){
            ModelsGeneral_features::create(['name'=>'Close to clinic']);
        }
        if(!ModelsGeneral_features::where('name','Close to golf course')->exists()){
            ModelsGeneral_features::create(['name'=>'Close to golf course']);
        }
        if(!ModelsGeneral_features::where('name','Close to hospital')->exists()){
            ModelsGeneral_features::create(['name'=>'Close to hospital']);
        }
        if(!ModelsGeneral_features::where('name','Close to schools')->exists()){
            ModelsGeneral_features::create(['name'=>'Close to schools']);
        }
        if(!ModelsGeneral_features::where('name','Close to shops')->exists()){
            ModelsGeneral_features::create(['name'=>'Close to shops']);
        }
        if(!ModelsGeneral_features::where('name','Fitness room')->exists()){
            ModelsGeneral_features::create(['name'=>'Fitness room']);
        }
        if(!ModelsGeneral_features::where('name','Freehold land')->exists()){
            ModelsGeneral_features::create(['name'=>'Freehold land']);
        }
        if(!ModelsGeneral_features::where('name','Indoor spa')->exists()){
            ModelsGeneral_features::create(['name'=>'Indoor spa']);
        }
        if(!ModelsGeneral_features::where('name','Mountain View')->exists()){
            ModelsGeneral_features::create(['name'=>'Mountain View']);
        }
        if(!ModelsGeneral_features::where('name','Pet Allowed')->exists()){
            ModelsGeneral_features::create(['name'=>'Pet Allowed']);
        }
        if(!ModelsGeneral_features::where('name','River View')->exists()){
            ModelsGeneral_features::create(['name'=>'River View']);
        }
        if(!ModelsGeneral_features::where('name','Sea access')->exists()){
            ModelsGeneral_features::create(['name'=>'Sea access']);
        }
        if(!ModelsGeneral_features::where('name','Sea view')->exists()){
            ModelsGeneral_features::create(['name'=>'Sea view']);
        }
        if(!ModelsGeneral_features::where('name','Suited to the elderly')->exists()){
            ModelsGeneral_features::create(['name'=>'Suited to the elderly']);
        }
        if(!ModelsGeneral_features::where('name','Tenis Court')->exists()){
            ModelsGeneral_features::create(['name'=>'Tenis Court']);
        }
    }
}
