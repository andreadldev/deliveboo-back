@extends('layouts.admin')
@section('content')
    <h2>Piatti di {{ $restaurant->name }}</h2>
    <h3>Ciao {{ $user->name }}</h3>

    @if (session('message'))
        <div class="alert alert-success w-25">
            {{ session('message') }}
        </div>
    @endif

    <a href="{{ route('admin.dishes.create') }}">Aggiungi Nuovo Piatto</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Ingredienti</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Immagine</th>
                <th scope="col">Visibile</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dishes as $dish)
                <tr>
                    <td>{{ $dish->name }}</td>
                    <td>{{ $dish->price }}</td>
                    <td>{{ $dish->ingredients }}</td>
                    <td>"{{ $dish->description }}"</td>
                    @if (str_contains($dish->img, 'http'))
                        <td><img class="w-25" src="{{ $dish->img }}" alt=""></td>
                    @else
                        <td><img class="w-25" src="{{ asset("storage/$dish->img") }}" alt=""></td>
                    @endif
                    <td><?php if ($dish->visible == 1) {
                        echo 'Sì';
                    } else {
                        echo 'No';
                    } ?></td>
                    <td><a href="{{ route('admin.dishes.edit', $dish->slug) }}">Modifica</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
