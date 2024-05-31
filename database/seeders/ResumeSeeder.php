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
            'tahun' => '2020-2022',
            'nama_sekolah' => 'SMK N 3 Yogyakarta',
            'jenis_sekolah' => 'SMK',
            'penjelasan' => 'Siswa jurusan teknik komputer dan jaringan di SMK N 3 Yogyakarta',
        ]);
        Resume::create([
            'tahun' => '2022',
            'nama_sekolah' => 'Universitas Mercu Buana Yogyakarta',
            'jenis_sekolah' => 'Universitas',
            'penjelasan' => 'Mahasiswa jurusan sistem informasi di Universitas Mercu Buana Yogyakarta',
        ]);
    }
}
