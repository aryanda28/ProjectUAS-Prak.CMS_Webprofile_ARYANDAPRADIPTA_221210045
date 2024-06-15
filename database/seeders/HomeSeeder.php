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
            'title1' => 'Welcome to My Website',
            'title2' => 'Explore My Work',
            'title3' => 'Get In Touch',
            'button_left' => 'Learn More',
            'button_right' => 'Contact Me',
            'about_me_title' => 'About Me',
            'about_me_description' => 'Hi everyone, I am Aryanda Pradipta, a web developer who enjoys writing articles about programming. I also love sharing knowledge with others. If you want to discuss programming, feel free to contact me.',
            'image_path' => 'images/about_me.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
