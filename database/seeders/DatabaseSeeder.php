<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\JobSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\SalarySeeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            SalarySeeder::class,
            JobSeeder::class
        ]);
    }
}