@extends('layouts.app')

@section('title', 'Creating a new post')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xs-10 col-sm-10 col-md-9 col-lg-7">
            @include('layouts.partials.errors')
            <form action="{{ route('admin.restaurants.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <h2 class="m-4">Crea il ristorante :</h2>

                {{-- Nome del ristorante --}}
                <div class="mb-3 input-group">
                    <label for="name_restaurant" class="input-group-text">Nome del ristorante <span style="color: red">*</span>:</label>
                    <input class="form-control @error('name_restaurant') is-invalid @enderror" type="text" name="name_restaurant" id="name_restaurant" value="{{ old('name_restaurant') }}" placeholder="Inserisci il nome del ristorante">
                    @error('name_restaurant')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                {{-- Indirizzo --}}
                <div class="mb-3 input-group">
                    <label for="address_restaurant" class="input-group-text">Indirizzo <span style="color: red">*</span>:</label>
                    <input class="form-control @error('address_restaurant') is-invalid @enderror" type="text" name="address_restaurant" id="address_restaurant" value="{{ old('address_restaurant') }}" placeholder="Inserisci l'indirizzo del ristorante">
                    @error('address_restaurant')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                {{-- P.IVA --}}
                <div class="mb-3 input-group">
                    <label for="vat_restaurant" class="input-group-text">P.IVA <span style="color: red">*</span>:</label>
                    <input class="form-control @error('vat_restaurant') is-invalid @enderror" type="text" name="vat_restaurant" id="vat_restaurant" value="{{ old('vat_restaurant') }}" placeholder="Inserisci la Partita IVA del ristorante">
                    @error('vat_restaurant')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                {{-- Tipi di ristorante --}}
                <h4>Scegli il tipo di ristorante <span style="color: red">*</span>:</h4>
                <div class="mb-3 form-check">
                    @foreach ($types as $type)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="type[]" id="type{{ $type->id }}" {{ in_array($type->id, old('type', [])) ? 'checked' : '' }} value="{{ $type->id }}">
                            <label class="form-check-label" for="type{{ $type->id }}">
                                {{ $type->name_type }}
                            </label>
                        </div>
                    @endforeach
                    @error('type')
                        <div class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                {{-- Immagine del ristorante --}}
                <div class="mb-3 input-group">
                    <input class="form-control @error('image_restaurant') is-invalid @enderror" type="file" name="image_restaurant" id="image_restaurant">
                    @error('image_restaurant')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                {{-- Pulsanti --}}
                <div class="mb-3 input-group">
                    <button type="submit" class="btn btn-primary m-2">
                        Crea ristorante
                    </button>
                    <button type="reset" class="btn btn-warning m-2">
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
