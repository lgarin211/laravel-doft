<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('users')->insert([
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'user',
                'phone' => '08123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
