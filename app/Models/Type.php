<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;

class Type extends Model
{
    use HasFactory;
    protected $table = 'types';

    public function restaurants(){
        // many to many tra restaurants e type
        return $this->belongsToMany(Restaurant::class);
    }
}
