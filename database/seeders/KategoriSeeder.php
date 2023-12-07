<?php

namespace Database\Seeders;

use App\Models\categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        categories::create([
            'category'=>'kategori1',
        ]);
        categories::create([
            'category'=>'kategori2',
        ]);
        categories::create([
            'category'=>'kategori3',
        ]);
    }
}
