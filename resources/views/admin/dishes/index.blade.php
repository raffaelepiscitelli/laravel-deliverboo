@extends('layouts.app')

@section('title', 'Admin Dish')

@section('content')

<div class="container">
    <ul class="list-unstyled row">
    @foreach ($dishes as $dish)
        <li class="col-sm-6 col-md-5 col-lg-3 d-flex justify-content-center p-3"> 
            <article class="card text-center mx-auto p-3 w-100" >
                <div class="h-50 d-flex justify-content-center align-items-center">
                    <h1>{{ $dish->name }}</h1>
                </div>
                <div class="card-image">
                    <img class="img-fluid mb-3 mt-3" style="height: 15rem; object-fit:contain" src="{{ asset('storage') . '/' . $dish->img_dish }}" alt="Dish Image">
                </div>
                <p>Prezzo: €{{ $dish->price }}</p>
                <p>Disponibilità: {{ $dish->available ? 'Si' : 'No' }}</p>
                <!-- Gruppo Pulsanti -->
                <div class="btn-group" role="group" aria-label="Basic example" style="gap: .5rem;" class="col-sm-3 col-md-2 my_btn_dish">
                    <!-- Pulsante di Modifica con icona -->
                    <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-warning rounded-pill" >
                        <i class="fas fa-pencil-alt"></i> Modifica
                    </a>
                        <!-- Pulsante di Cancellazione con icona -->
                        <button form="delete-form-{{ $dish->id }}" class="btn btn-danger my_btn_dish rounded-pill"  onclick="return confirm('Sei sicuro di voler eliminare questo piatto?')">
                            <i class="fas fa-trash"></i> Elimina
                        </button>
                        <form id="delete-form-{{ $dish->id }}" action="{{ route('admin.dishes.destroy', ['dish' => $dish->id]) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>                
                </div>
            </article>
        </li>
    @endforeach
    </ul>
</div>

@endsection
