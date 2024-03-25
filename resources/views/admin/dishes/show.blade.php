@extends('layouts.app')

@section('title', 'Admin Dish')

@section('content')
<article class="card w-25 text-center mx-auto p-4  m-4">
    <h1>
        {{ $dish->name }}
    </h1>
    <div class="card-image">
        <img class="img-thumbnail" src="{{ asset('storage') . '/' . $dish->img_dish }}" alt="Dish Image">
    </div>

    <p>
        Prezzo: €{{ $dish->price }}
    </p>
    {{-- <p>
            Price: {{ $dish->type}}
    </p> --}}
    <p>
        Ingredienti: {{ $dish->ingredients }}
    </p>

    <p>
        Disponibilità: {{ $dish->available ? 'Si':'No' }}
    </p>
    </div>
</article>
@endsection