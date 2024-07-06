<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('homes')->insert([
            'main_title' => 'CODING DEVELOPMENT &bull; MARKETING',
            'subtitle1' => 'Hello everyone 🙌',
            'subtitle2' => 'Let me introduce myself, my name is Aryanda Pradipta',
            'left_button_text' => 'Resume',
            'right_button_text' => 'Contacts',
            'about_me_section_title' => 'My name is Aryanda Pradipta',
            'about_me_section_description' => 'Hi everyone, I am a web developer who enjoys writing articles about programming. I also love sharing knowledge with others. If you want to discuss programming, feel free to contact me.',
            'image_path' => 'uploads/IMG_2305.JPG',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
