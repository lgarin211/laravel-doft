<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // call UserSeeder
        $this->call(UserSeeder::class);
        // call CategoriesSeeder
        $this->call(CategoriesSeeder::class);
        // call ArticleSeeder
        $this->call(ArticleSeeder::class);
    }
}
