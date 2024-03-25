<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Restaurant;

class Dish extends Model
{
    use HasFactory;
    protected $table = 'dishes';

    protected $fillable = [
        'restaurant_id',
        'name', 
        'price',
        'available',
        'ingredients',
        'img_dish'
    ];

    public function orders(){
        // many to many tra dishes e orders
        return $this->belongsToMany(Order::class);
    }

    public function restaurants(){
        // one to many tra restaurant e dishes
        return $this->belongsTo(Restaurant::class);
    }
}
