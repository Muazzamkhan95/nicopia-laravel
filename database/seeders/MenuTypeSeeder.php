<?php

namespace Database\Seeders;

use App\Models\MenuType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        MenuType::create(['name' => 'Header']);
        MenuType::create(['name' => 'Footer']);
    }
}
