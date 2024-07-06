<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //         Riwayat pendidikan
        // 2020-2022 smk n 3 yogyakarta

        // 2022- skrg mahasiswa TI prodi sistem informasi universitas mercu buana yogyakarta
        User::create([
            'name' => 'Aryanda Pradipta',
            'email' => 'aryandapradipta28@gmail.com',
            'password' => Hash::make('aryandapradipta'),
        ]);
        User::create([
            'name' => 'Test User',
            'email' => 'test@gmail.com',
            'password' => Hash::make('test@gmail.com'),
        ]);
        UserProfile::create([
            'name' => 'Aryanda Pradipta',
            'about' => 'Hi everyone, I am a web developer who enjoys writing articles about programming. I also love sharing knowledge with others. If you want to discuss programming, feel free to contact me.',
            'phone' => '+62 857-2583-6036',
            'email' => 'aryandapradipta28@gmail.com',
            'user_id' => 1
        ]);
    }
}
