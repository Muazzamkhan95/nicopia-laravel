<?php

namespace Database\Seeders;

use App\Models\Header;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Header::create(['name' => 'Header', 'image' => 'storage/images/Logo.png', 'menu_type_id' => 1]);
    }
}
