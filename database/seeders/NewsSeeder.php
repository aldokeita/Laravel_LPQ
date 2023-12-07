<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\news;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat 6 berita dummy
        for ($i = 1; $i <= 6; $i++) {
            news::create([
                'title' => "Dummy News $i",
                'content' => "This is dummy content for News $i. Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                'photo' => 'photos/dummy.jpg', // Gantilah dengan nama file gambar yang ada
                'category_id'=> "1",
                'user_id'=> "1",
            ]);
        }
    }
}
