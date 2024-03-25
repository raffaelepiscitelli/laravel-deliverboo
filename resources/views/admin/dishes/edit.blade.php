@extends('layouts.app')

@section('title', 'Modifica piatto')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xs-10 col-sm-10 col-md-9 col-lg-7">
            @include('layouts.partials.errors')
            <form action="{{ route('admin.dishes.update', ['dish' => $dish->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <h2 class="m-4">Modifica il piatto:</h2>

                <div class="mb-3">
                    <label for="name" class="form-label">Nome del piatto:</label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name', $dish->name) }}" placeholder="Nome del piatto">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo:</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{ old('price', $dish->price) }}" placeholder="Es. 10.99">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="ingredients" class="form-label">Ingredienti:</label>
                    <textarea class="form-control @error('ingredients') is-invalid @enderror" name="ingredients" id="ingredients" rows="5" placeholder="Elenco degli ingredienti">{{ old('ingredients', $dish->ingredients) }}</textarea>
                    @error('ingredients')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <fieldset class="mb-3">
                    <legend>Disponibile:</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="available" id="available1" value="1" @if(old('available', $dish->available)) checked @endif>
                        <label class="form-check-label" for="available1">Si</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="available" id="available2" value="0" @if(!old('available', $dish->available)) checked @endif>
                        <label class="form-check-label" for="available2">No</label>
                    </div>
                </fieldset>

                <div class="mb-3">
                    <label for="img_dish" class="form-label">Immagine del piatto:</label>
                    @if($dish->img_dish)
                        <div class="mb-2">
                            <img src="{{ asset('storage/'.$dish->img_dish) }}" alt="Immagine attuale" style="max-width: 100%; max-height: 300px;">
                        </div>
                    @endif
                    <input class="form-control @error('img_dish') is-invalid @enderror" type="file" name="img_dish" id="img_dish">
                    @error('img_dish')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="btn btn-primary rounded-pill">Modifica piatto</button>
                    <button type="reset" class="btn btn-warning rounded-pill">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
