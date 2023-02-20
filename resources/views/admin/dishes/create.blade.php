@extends('layouts.admin')
@section('content')
    <h2>Nuovo piatto</h2>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.dishes.store') }}">
                            @csrf
                            @if ($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <div class="mb-4 row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="price"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" step=".01"
                                        class="form-control @error('price') is-invalid @enderror" name="price"
                                        value="{{ old('price') }}" required autocomplete="price" autofocus>

                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- immagine da inserire --}}

                            <div class="mb-4 row">
                                <label for="ingredients" class="form-label"></label>
                                <textarea class="form-control" id="ingredients" name="ingredients" rows="4" placeholder="Inserisci ingredienti">{{ old('ingredients') }}</textarea>
                            </div>


                            <div class="mb-4 row">
                                <label for="description" class="form-label"></label>
                                <textarea class="form-control" id="description" name="description" rows="10" placeholder="Descrizione ristorante">{{ old('description') }}</textarea>
                            </div>

                            <div class="mb-4 row">
                                <label for="visible"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Visibile') }}</label>

                                <div class="col-md-6">
                                    <select class="form-select" name="visible" id="visible">
                                        <option value="1">Visibile</option>
                                        <option value="0">Non visibile</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                    <div class="mb-4 row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Inserisci') }}
                            </button>
                        </div>
                    </div>
                    </form>
                @endsection
