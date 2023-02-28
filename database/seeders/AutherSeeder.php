<?php

namespace Database\Seeders;

use App\Models\auther;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AutherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        auther::factory()->count(5)->create();
    }
}