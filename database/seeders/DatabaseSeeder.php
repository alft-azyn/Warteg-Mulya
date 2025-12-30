<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Panggil MenuSeeder di sini
        $this->call([
            MenuSeeder::class,
        ]);
    }
}