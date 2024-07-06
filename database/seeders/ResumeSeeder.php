<?php

namespace Database\Seeders;

use App\Models\Resume;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Resume::create([
            'year' => '2020-2022',
            'school_name' => 'SMK N 3 Yogyakarta',
            'school_type' => 'SMK',
            'description' => 'Student majoring in computer and network engineering at SMK N 3 Yogyakarta',
        ]);
    
        // Creating resume entry for Universitas Mercu Buana Yogyakarta
        Resume::create([
            'year' => '2022',
            'school_name' => 'Universitas Mercu Buana Yogyakarta',
            'school_type' => 'University',
            'description' => 'Student majoring in information systems at Universitas Mercu Buana Yogyakarta',
        ]);
    }
}
