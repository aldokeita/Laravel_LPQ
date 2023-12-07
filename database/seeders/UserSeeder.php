<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'NIS001',
            'email' => 'siswa1@example.com',
            'password' => bcrypt('password'),
            'role' => 'siswa',
        ]);
        User::create([
            'name' => 'NIS002',
            'email' => 'siswa2@example.com',
            'password' => bcrypt('password'),
            'role' => 'siswa',
        ]);
        User::create([
            'name' => 'NIS003',
            'email' => 'siswa3@example.com',
            'password' => bcrypt('password'),
            'role' => 'siswa',
        ]);
    }
}
