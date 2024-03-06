<?php

namespace Database\Seeders;

use App\Models\role_model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class role extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        if (!role_model::where('role_name', 'admin')->exists()) {
            role_model::create(['role_name' => 'admin']);
        }

        if (!role_model::where('role_name', 'agent')->exists()) {
            role_model::create(['role_name' => 'agent']);
        }
        if (!role_model::where('role_name', 'user')->exists()) {
            role_model::create(['role_name' => 'user']);
        }
    }
}
