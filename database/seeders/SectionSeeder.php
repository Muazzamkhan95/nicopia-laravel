<?php

namespace Database\Seeders;

use App\Models\SectionSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SectionSetting::create(['name' => 'About', 'heading' => 'Who We Are?', 'paragraph' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, laborum saepe. Dicta illo molestiae quod eius esse, sint quaerat minus qui asperiores sapiente obcaecati quia praesentium odit fuga hic? Nesciunt?', 'button' => 'Read More', 'url' => 'http://nicopia.codebeams.com']);
        SectionSetting::create(['name' => 'Offer', 'heading' => 'What We Offer?', 'paragraph' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, laborum saepe. Dicta illo molestiae quod eius esse, sint quaerat minus qui asperiores sapiente obcaecati quia praesentium odit fuga hic? Nesciunt?', 'button' => 'Read More', 'url' => 'http://nicopia.codebeams.com']);
        SectionSetting::create(['name' => 'Team', 'heading' => 'Meet our Professionals', 'paragraph' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, laborum saepe. Dicta illo molestiae quod eius esse, sint quaerat minus qui asperiores sapiente obcaecati quia praesentium odit fuga hic? Nesciunt?', 'button' => '', 'url' => '']);
        SectionSetting::create(['name' => 'Recent Project', 'heading' => 'Recent Project', 'paragraph' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, laborum saepe. Dicta illo molestiae quod eius esse, sint quaerat minus qui asperiores sapiente obcaecati quia praesentium odit fuga hic? Nesciunt?', 'button' => 'View All', 'url' => 'http://nicopia.codebeams.com/project']);
        SectionSetting::create(['name' => 'Clients', 'heading' => 'Clients', 'paragraph' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, laborum saepe. Dicta illo molestiae quod eius esse, sint quaerat minus qui asperiores sapiente obcaecati quia praesentium odit fuga hic? Nesciunt?', 'button' => '', 'url' => '']);
        SectionSetting::create(['name' => 'quote', 'heading' => 'Trusted By More Than 60,000 Happy People.', 'paragraph' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, laborum saepe. Dicta illo molestiae quod eius esse, sint quaerat minus qui asperiores sapiente obcaecati quia praesentium odit fuga hic? Nesciunt?', 'button' => 'GET A FREE QUOTE', 'url' => '#']);
    }
}
