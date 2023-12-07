<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\siswa;


class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::create([
            'nama' => 'Siswa Pertama',
            'nis' => 'NIS001',
            'tanggal_lahir' => '2002-01-01',
            'jenis_kelamin'=>'Pria',
            'alamat' => 'Alamat Siswa Pertama',
            'email' => 'siswa1@example.com',
            'user_id' => 2, // Sesuaikan dengan user_id yang telah ada
            'published_at' => now(),
        ]);

        Siswa::create([
            'nama' => 'Siswa Kedua',
            'nis' => 'NIS002',
            'tanggal_lahir' => '2002-02-02',
            'alamat' => 'Alamat Siswa Kedua',
            'jenis_kelamin'=>'wanita',
            'email' => 'siswa2@example.com',
            'user_id' => 3, // Sesuaikan dengan user_id yang telah ada
            'published_at' => now(),
        ]);

        Siswa::create([
            'nama' => 'Siswa Ketiga',
            'nis' => 'NIS003',
            'tanggal_lahir' => '2002-03-03',
            'alamat' => 'Alamat Siswa Ketiga',
            'jenis_kelamin'=>'laki-laki',
            'email' => 'siswa3@example.com',
            'user_id' => 4, // Sesuaikan dengan user_id yang telah ada
            'published_at' => now(),
        ]);
    }
}
