<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;


class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $restaurants = config ('db.restaurants');

        foreach ($restaurants as $restaurant) {
            foreach ($restaurant['orders'] as $order) {
                $newOrder = new Order();
                $newOrder-> restaurant_id=$restaurant['id'];
                $newOrder-> total_price=$order['total_price'];
                $newOrder-> customer_address=$order['customer_address'];
                $newOrder-> customer_name=$order['customer_name'];
                $newOrder-> customer_surname=$order['customer_surname'];
                $newOrder-> date_and_time=$order['date_and_time'];
                $newOrder-> customer_phone=$order['customer_phone'];
                $newOrder-> customer_email=$order['customer_email'];

                $newOrder->save();

            }
        }

    }
}
