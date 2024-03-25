<?php

namespace App\Http\Controllers\Api;

use App\Models\Restaurant;
use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Models\RestaurantType;

class RestaurantController extends Controller
{
    public function index (){
        // $restaurant = Restaurant::join('restaurant_type', 'restaurants.id', '=', 'restaurant_type.restaurant_id')
        //                             ->join('types', 'types.id', '=', 'restaurant_type.type_id')
        //                             ->get();
        $restaurants= Restaurant::all()->toArray();
        $addTypes = function ($element ) {
            $aryTypes= Type::join('restaurant_type', 'types.id', '=', 'restaurant_type.type_id')
            ->where('restaurant_id', '=', $element['id'])->get();
            $element['types'] = $aryTypes ;
            return $element;
        };
        $restaurantsResult= array_map($addTypes, $restaurants);
        return response()->json([
            'success' => true,
            'results' => $restaurantsResult
        ]);
    }

    public function show(string $id)
    {
        // $types = Restaurant::join('restaurant_type', 'restaurants.id', '=', 'restaurant_type.restaurant_id')
        //     ->join('types', 'types.id', '=', 'restaurant_type.type_id')
        //     ->where('user_id', '=', Auth::id())->get();
        // return view('admin.restaurants.show', compact('restaurant','types'));
        $restaurant= Restaurant::where('id', '=', $id)->get()->toArray();
        $addTypes = function ($element ) {
            $aryTypes= Type::join('restaurant_type', 'types.id', '=', 'restaurant_type.type_id')
            ->where('restaurant_id', '=', $element['id'])->get();
            $element['types'] = $aryTypes ;
            
            return $element;
        };
        $restaurantResult= array_map($addTypes, $restaurant);
        return response()->json([
            'success' => true,
            'results' => $restaurantResult
        ]);
    }
}
