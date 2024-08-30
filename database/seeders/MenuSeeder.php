<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Menu::create(['name' => 'Home', 'url' => '/', 'menu_type_id' => 1]);
        Menu::create(['name' => 'About', 'url' => 'about', 'menu_type_id' => 1]);
        Menu::create(['name' => 'Service', 'url' => 'service', 'menu_type_id' => 1]);
        Menu::create(['name' => 'Project', 'url' => 'project', 'menu_type_id' => 1]);
        Menu::create(['name' => 'Blog', 'url' => 'blog', 'menu_type_id' => 1]);
        Menu::create(['name' => 'Contact', 'url' => 'contact', 'menu_type_id' => 1]);
    }
}
