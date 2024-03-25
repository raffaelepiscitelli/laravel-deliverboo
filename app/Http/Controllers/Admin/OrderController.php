<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $targetRestaurant = Restaurant::where('user_id', '=', Auth::id())->get()[0];
        $orders = Order::where('restaurant_id', '=', $targetRestaurant->id)->orderBy('date_and_time', 'desc')->get();
        $dishes= Dish::join('dish_order', 'dishes.id', '=', 'dish_order.dish_id')->where('restaurant_id', '=', $targetRestaurant->id)->get();
        return view('admin.orders.index', compact('orders', 'dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $targetRestaurant = Restaurant::where('user_id', '=', Auth::id())->get()[0];
        // $order = Order::where('id', '=', $id)->get();
        // if(count($order) != 0){
        //     $order = $order[0];
        //     if($targetRestaurant->id == $order->restaurant_id){
        //         return view('admin.orders.show', compact('order'));
        //     }
        // }
        // return view('admin.notFound');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
