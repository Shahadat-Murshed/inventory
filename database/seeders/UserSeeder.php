<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'image' => '/uploads/dp/632487361_user-avatar-with-check-mark.png',
                'role' => 'admin',
                'status' => 1,
                'remember_token' => Str::random(10),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'General User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('user'),
                'image' => '/uploads/dp/223680813_depositphotos_351631394-stock-illustration-muslim-muslimah-couple-arabic-smile.webp',
                'role' => 'user',
                'status' => 1,
                'remember_token' => Str::random(10),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        \App\Models\User::factory(10)->create();
    }
}
