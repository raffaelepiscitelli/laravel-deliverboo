<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = config('db.restaurants');

        foreach ($restaurants as $restaurant) {
            
            foreach ($restaurant['dishes'] as $dish) {
                $newDish = new Dish();
                $newDish-> restaurant_id=$restaurant['id'];
                $newDish-> name=$dish['name'];
                $newDish-> price=$dish ['price'];
                $newDish-> ingredients= $dish['ingredients'];
                $newDish-> img_dish= $dish['img_dish'];
                $newDish-> available= $dish['available'];
                $newDish->save();
            }
        }
    }
}
