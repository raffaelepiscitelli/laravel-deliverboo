@extends('layouts.app')

@section('title', 'Creating a new post')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xs-10 col-sm-10 col-md-9 col-lg-7">
            <form action="{{ route('admin.dishes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <h2 class="m-4">Crea il piatto <span style="color: red">*</span>:</h2>
                
                <div class="mb-3 input-group">
                    <label for="name" class="input-group-text">Nome <span style="color: red">*</span>:</label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Inserisci il nome del piatto">
                    @error('name')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Prezzo <span style="color: red">*</span>:</span>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" aria-label="Amount (to the nearest dollar)" name="price" id="price" placeholder="Es. 10.99">
                    <span class="input-group-text">€</span>
                    @error('price')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                
                <div class="mb-3 input-group">
                    <label for="ingredients" class="input-group-text">Ingredienti <span style="color: red">*</span>:</label>
                    <textarea class="form-control @error('ingredients') is-invalid @enderror" name="ingredients" id="ingredients" cols="20" rows="5" placeholder="Elenco degli ingredienti">{{ old('ingredients') }}</textarea>
                    @error('ingredients')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                
                <fieldset class="row mb-3 ">
                    <legend class="col-form-label col-sm-2 pt-0">Disponibile<span style="color: red">*</span>:</legend>
                    <div class=" ">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="available" id="available1" value="1" {{ old('available') == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="available1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="available" id="available2" value="0" {{ old('available') == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="available2">
                                No
                            </label>
                        </div>
                        @error('available')
                            <div class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </fieldset>
                
                <div class="mb-3 input-group">
                    <input class="form-control @error('img_dish') is-invalid @enderror" type="file" name="img_dish" id="img_dish">
                    @error('img_dish')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                
                <div class="invisible">
                    <label for="restaurant_id"></label>
                    <input name="restaurant_id" value="{{ $restaurant['id'] }}">
                </div>

                <div class="mb-3 input-group">
                    <button type="submit" class="btn btn-primary m-2 rounded-pill">
                        Aggiungi piatto
                    </button>
                    <button type="reset" class="btn btn-warning m-2 rounded-pill">
                        Reset
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
