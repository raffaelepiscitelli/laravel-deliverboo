<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = config ('db.restaurants');

        foreach ($restaurants as $user) {
            $newuser = new User();
            $newuser-> email=$user['email'];
            $newuser-> password=$user['password'];
            $newuser-> name=$user['name'];
            $newuser-> lastname=$user['lastname'];
            $newuser->save();
        }
    }
}
