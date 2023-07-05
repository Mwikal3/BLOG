<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'faithmwiks',
            'name' => 'Faith Mwikali',
            'email' => 'faithmwiks@mail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ]);
    }
}
