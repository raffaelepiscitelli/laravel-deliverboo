<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DishController extends Controller
{
    public function index(string $id)
    {
        $restaurant= Restaurant::where('user_id', '=', Auth::id())->get()[0];
        if ($restaurant->id==$id) {
            $dishes = Dish::where('restaurant_id', '=' , $id)->orderBy('name', 'asc')->get();
            return view('admin.dishes.index', compact('dishes'));
        }
        else{
            return view('admin.notFound');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $restaurant= Restaurant::where('user_id', '=', Auth::id())->get();
        if(count($restaurant) == 0 ){
            // questo controller lo mando in quella rotta che apre altro controller e legge metodo index dei dishes-> quella rotta richiede id del ristorante e glielo passo da qui 
            return redirect()->route('admin.restaurants.create');
        } else{
            $restaurant= $restaurant[0];
            return view('admin.dishes.create', compact('restaurant'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newDishData = $request->validate([
            'name' => ['required', 'min:4', 'max:40'],
            'price' => ['required', 'decimal:2,10', 'between:0,99999999.99'],
            'ingredients' => ['required', 'min:3', 'max:3000'],
            'available' => ['required'],
        ]);

        // $newRestaurantData = $request->all();
        $newDishData = $request->all();
        if(array_key_exists('img_dish', $newDishData)){
            $restaurant= Restaurant::where('user_id', '=', Auth::id())->get()[0];

            $imageSrc = Storage::put('uploads/restaurants/' . str_replace(' ', '-', $restaurant['name_restaurant']) . '/id-' . Auth::id(), $newDishData['img_dish']);
        }
        else{
            $imageSrc = 'uploads/dishes/default-img/dish_default.png';
        }
        $newDishData['img_dish'] = $imageSrc;
        //dd($request->all());
        $newDish = new Dish();
        $newDish -> fill($newDishData);
        $newDish->save();
        return redirect()->route('admin.dishes.show', $newDish->id);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $restaurant= Restaurant::where('user_id', '=', Auth::id())->get()[0];
        $dish= Dish::where('restaurant_id', '=', $restaurant->id)->find($id);
        if ($dish!=null && $dish->id==$id){
            return view('admin.dishes.show', compact('dish'));
        } else{
            return redirect()->route('admin.restaurants.dishes.index',$restaurant->id );
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $restaurant= Restaurant::where('user_id', '=', Auth::id())->get()[0];
        $dish= Dish::where('restaurant_id', '=', $restaurant->id)->find($id);
        if ($dish!=null && $dish->id==$id) {
            return view('admin.dishes.edit', compact('dish'));
        }
        else{
            return view('admin.notFound');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish) {
        $validatedData = $request->validate([
            'name' => 'required|min:4|max:40',
            'price' => 'required|numeric|between:0,99999999.99',
            'ingredients' => 'required|min:3|max:3000',
            'available' => 'required',
        ]);
    
        if ($request->hasFile('img_dish')) {
            $restaurant= Restaurant::where('user_id', '=', Auth::id())->get()[0];
            $validatedData['img_dish'] = Storage::put('uploads/restaurants/' . str_replace(' ', '-', $restaurant['name_restaurant']) . '/id-' . Auth::id(), $request->file('img_dish'));
        } else {
            // Mantieni l'immagine esistente se non ne viene caricata una nuova
            unset($validatedData['img_dish']);
        }
    
        $dish->update($validatedData);
    
        return redirect()->route('admin.dishes.show', ['dish' => $dish->id])->with('success', 'Piatto aggiornato con successo.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dish = Dish::findOrFail($id);
        $restaurantId = $dish->restaurant_id; // Assumi che tu abbia una colonna `restaurant_id` nel tuo model Dish
        $dish->delete();
        return redirect()->route('admin.restaurants.dishes.index', ['restaurant' => $restaurantId])
                         ->with('success', 'Piatto eliminato con successo.');
    }
}
