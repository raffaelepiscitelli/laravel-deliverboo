<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Type;
use App\Models\Dish;
use App\Models\Order;

class Restaurant extends Model
{
    use HasFactory;
    // fillable per il controller
    protected $fillable = [
        'user_id',
        'name_restaurant', 
        'address_restaurant',
        'vat_restaurant',
        'image_restaurant'
    ];

    protected $table = 'restaurants';

    public function user(){
        // one to one tra user e restaurant
        return $this->belongsTo(User::class);
    }
//L'approccio corretto non richiede di eseguire manualmente le join tra tabelle, ma di sfruttare le relazioni Eloquent. Per fare questo, assicurati che il tuo model Restaurant abbia una relazione types definita come segue:
    public function types()
    {
        return $this->belongsToMany(Type::class, 'restaurant_type', 'restaurant_id', 'type_id');
    }

    public function dishes(){
        // one to many tra dishes e restaurant
        return $this->hasMany(Dish::class);
    }

    public function orders(){
        // one to many tra orders e restaurant
        return $this->hasMany(Order::class);
    }
}
