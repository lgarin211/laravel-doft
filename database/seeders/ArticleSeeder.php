<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create 20 articles
        for ($i = 0; $i < 20; $i++) {
            DB::table('articles')->insert([
                'user_id' => rand(1, 20),
                'category_id' => rand(1, 4),
                'title' => 'Article ' . $i,
                'description' => fake()->paragraph(5),
                'image' => 'article-' . $i . '.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
