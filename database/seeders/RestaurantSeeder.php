<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = config ('db.restaurants');

        foreach ($restaurants as $restaurant) {
            $newrestaurant = new Restaurant();
            $newrestaurant-> user_id=$restaurant['id'];
            $newrestaurant-> name_restaurant=$restaurant['name_restaurant'];
            $newrestaurant-> address_restaurant=$restaurant['address_restaurant'];
            $newrestaurant-> image_restaurant=$restaurant['image_restaurant'];
            $newrestaurant-> vat_restaurant=$restaurant['vat_restaurant'];
            $newrestaurant->save();
        }
    }
}
