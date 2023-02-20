@extends('layouts.admin')

@section('content')
    <h1>Dashboard</h1>
    <h3 class="pt-3">Il tuo ristorante</h3>
    <table class="table table-bordered w-50 mt-3">
        @if (str_contains($restaurant->img, 'http'))
            <img class="w-25 my-3" src="{{ $restaurant->img }}" alt="{{ $restaurant->name }}">
        @else
            <img class="w-25 my-3" src="{{ asset("storage/$restaurant->img") }}" alt="{{ $restaurant->name }}">
        @endif
        <tbody>
            <tr>
                <th scope="row">Nome</th>
                <td>{{ $restaurant->name }}</td>
            </tr>
            <tr>
                <th scope="row">Indirizzo</th>
                <td>{{ $restaurant->address }}</td>
            </tr>
            <tr>
                <th scope="row">Telefono</th>
                <td>{{ $restaurant->phone_number }}</td>
            </tr>
            <tr>
                <th scope="row">Orario apertura e chiusura</th>
                <td>{{ $restaurant->opening_time }} - {{ $restaurant->closing_time }}</td>
            </tr>
            <tr>
                <th scope="row">Costo di spedizione</th>
                <td>{{ $restaurant->price_shipping }}€</td>
            </tr>
            <tr>
                <th scope="row">Descrizione</th>
                <td>"{{ $restaurant->description }}"</td>
            </tr>
        </tbody>
    </table>
@endsection
