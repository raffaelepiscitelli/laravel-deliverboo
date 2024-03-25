<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // mi esegue tutto quello inserito qui
            UserSeeder::class,
            RestaurantSeeder::class,
            DishSeeder::class,
            // OrderSeeder::class,
            TypeSeeder::class,
            RestaurantTypeSeeder::class,
            // DishOrderSeeder::class,
        ]);
    }
}
