<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Restaurant;
use App\Models\RestaurantType;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    private $rules = [
        'image_restaurant' => ['image', 'required'],
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Metodo index
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $newRestaurant = new Restaurant();
        $targetRestaurant = $newRestaurant::where('user_id', '=', Auth::id())->get();
        if (count($targetRestaurant) > 0) {
            return redirect()->route('home');
        }
        $newTypes = new Type();
        $types = $newTypes::all();
        $restaurants = $newRestaurant::all();
        return view('admin.restaurants.create', compact('types', 'restaurants'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newRestaurantData = $request->validate([
            'name_restaurant' => ['required', 'string', 'min:1', 'max:100'],
            'address_restaurant' => ['required', 'string', 'min:7', 'max:150'],
            'vat_restaurant' => ['required', 'string', 'min:13', 'max:13', 'unique:restaurants'],
            'type' => ['required', 'array', 'min:1'], // Assicura che almeno un tipo sia selezionato
            // 'image_restaurant' => ['image', 'required'],
        ], [
            'name_restaurant.required' => 'Il campo nome del ristorante è obbligatorio.',
            'address_restaurant.required' => 'Il campo indirizzo del ristorante è obbligatorio.',
            'vat_restaurant.required' => 'Il campo P.IVA del ristorante è obbligatorio.',
            'type.required' => 'Seleziona almeno un tipo di ristorante.',
            'image_restaurant.required' => 'Carica un\'immagine del ristorante.',
        ]);

        $newRestaurantData['user_id'] = Auth::id(); // Aggiungi l'id dell'utente al nuovo ristorante

        if ($request->hasFile('image_restaurant')) {
            $imageSrc = Storage::put('uploads/restaurants/' . str_replace(' ', '-', $newRestaurantData['name_restaurant']) . '/id-' . Auth::id(), $request->file('image_restaurant'));
        } else {
            $imageSrc = 'uploads/restaurants/default-img/logo_default.jpg';
        }

        $newRestaurantData['image_restaurant'] = $imageSrc;

        $newRestaurant = Restaurant::create($newRestaurantData);

        // Aggiungi i tipi solo se sono stati selezionati
        if (isset($newRestaurantData['type'])) {
            $newRestaurant->types()->attach($newRestaurantData['type']);
        }

        return redirect()->route('admin.restaurants.show', $newRestaurant->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $restaurant= Restaurant::where('user_id', '=', Auth::id())->first();
        if ($restaurant->id!=$id) {
            return view('admin.notFound');
        }
        $types = Restaurant::join('restaurant_type', 'restaurants.id', '=', 'restaurant_type.restaurant_id')
            ->join('types', 'types.id', '=', 'restaurant_type.type_id')
            ->where('user_id', '=', Auth::id())->get();
        return view('admin.restaurants.show', compact('restaurant', 'types'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Metodo edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Metodo update
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Metodo destroy
    }
}
