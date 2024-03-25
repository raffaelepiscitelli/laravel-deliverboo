<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Http\Request;


class DishController extends Controller
{
    public function index(string $id)
    {
        $dishes = Dish::where('restaurant_id', '=' , $id)->orderBy('name', 'asc')->get();
        return response()->json([
            'success' => true,
            'results' => $dishes
        ]);
    }
}
