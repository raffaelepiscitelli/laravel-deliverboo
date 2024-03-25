<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;
use App\Models\Order;
use Faker\Generator as Faker;

class DishOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $dishes = Dish::all()->pluck('id');
        $orders = Order::all();

        foreach ($orders as $order) {
            $order->dishes()->syncWithPivotValues($faker->randomElements( $dishes, rand(1,3), false ), ['dish_quantity' => $faker->numberBetween(1,50)]);
        }
    }
}
