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
            'email' => 'aryandapradipta@gmail.com',
            'password' => Hash::make('aryandapradipta'),
        ]);
        User::create([
            'name' => 'Test User',
            'email' => 'test@gmail.com',
            'password' => Hash::make('test@gmail.com'),
        ]);
        UserProfile::create([
            'name' => 'Aryanda Pradipta',
            'about' => 'Hi Semua, saya adalah seorang web developer yang suka menulis artikel tentang pemrograman. Saya juga suka berbagi pengetahuan dengan orang lain. Jika kamu ingin berdiskusi tentang pemrograman, jangan ragu untuk menghubungi saya.',
            'link_twitter' => 'https://twitter.com',
            'link_linkedin' => 'https://linkedin.com',
            'link_github' => 'https://github.com',
            'telepon' => '+62 857-2583-6036',
            'email' => 'aryandapradipta@gmail.com',
            'link_footer' => 'https://aryandapradipta.com',
            'user_id' => 1
        ]);
    }
}
