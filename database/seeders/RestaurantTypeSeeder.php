<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use App\Models\RestaurantType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class RestaurantTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = config('db.restaurants');
        $types = Type::all();
        foreach ($types as $type) {
            $restaurantIds = [];
            foreach($restaurants as $restaurant){
                if ($restaurant['type'] == $type->name_type) {
                    $newRestaurant = Restaurant::where('name_restaurant', 'LIKE', $restaurant['name_restaurant'])->get();
                    foreach ($newRestaurant as $rest) {
                        array_push($restaurantIds, $rest->id);
                    }
                }
            }
            $type->restaurants()->sync($restaurantIds);
        }
}}