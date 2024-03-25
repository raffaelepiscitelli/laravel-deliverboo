<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // $orderData= $request->json();
        $newOrder= new Order();
        $dishesId= []; 
        $dishesQuantity= []; 

        // $dati = $request->json();
        // $datiJson = json_decode($request)
        
        foreach($request['order_dishes'] as $value){
            array_push($dishesId, $value['id']);
            array_push($dishesQuantity, $value['quantity']);
        }
        // $newOrder->restaurant_id = $request->restaurant_id;

        // $newOrder->total_price = $request->total_price;
        
        // $newOrder->customer_address = $request->customer_address;
        
        // $newOrder->customer_name = $request->customer_name;
        
        // $newOrder->customer_surname = $request->customer_surname;
        
        // $newOrder->date_and_time = $request->date_and_time;
        
        // $newOrder->customer_phone = $request->customer_phone;
        
        // $newOrder->customer_email = $request->customer_email;
        $newOrder->fill($request->input());
        // $imageSrc = Storage::put('uploads/cartellaDiProva/', $orderData);
        $newOrder->save();
        
        for($i = 0; $i<count($dishesId); $i++){
            $newOrder->dishes()->attach($dishesId[$i], ['dish_quantity' => $dishesQuantity[$i]]);
        }
        
        return response()->json([
            'result' => $dishesId,
            'result1' => $dishesQuantity
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
