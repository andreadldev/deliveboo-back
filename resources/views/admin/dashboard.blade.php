@extends('layouts.admin')

@section('content')
    {{-- <?php
    dd($orders);
    ?> --}}
    <h1>Dashboard</h1>
    <h3 class="pt-3">Il tuo ristorante</h3>
    <section class="info">
        <table class="table table-bordered w-50 mt-3">
            @if ($restaurant->img)
                @if (str_contains($restaurant->img, 'http'))
                    <img class="w-25 my-3" src="{{ $restaurant->img }}" alt="{{ $restaurant->name }}">
                @else
                    <img class="w-25 my-3" src="{{ asset("storage/$restaurant->img") }}" alt="{{ $restaurant->name }}">
                @endif
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
                @if ($restaurant->description)
                    <tr>
                        <th scope="row">Descrizione</th>
                        <td>"{{ $restaurant->description }}"</td>
                    </tr>
                @endif
                <tr>
                    <th scope="row">Categorie</th>
                    <td>
                        @foreach ($category_pivot as $pivot_element)
                            @if ($restaurant->id == $pivot_element->restaurant_id)
                                @foreach ($categories as $category)
                                    @if ($category->id == $pivot_element->category_id)
                                        {{ $category->name }}
                                        @if (!$loop->last)
                                            ,
                                        @endif
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <section class="orders">
        <table class="table table-bordered w-50 mt-3">
            <h2>Tabella degli ordini ricevuti</h2>
            <tbody>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Numero Ordine</th>
                            <th scope="col">Orario dell'ordine</th>
                            <th scope="col">Nome del cliente</th>
                            <th scope="col">Piatti ordinati</th>
                            <th scope="col">Prezzo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <th scope="row">{{ $order->code }}</th>
                                <td>{{ $order->order_date }}</td>
                                <td>{{ $order->firstname }} {{ $order->lastname }}</td>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </tbody>
        </table>
    </section>

@endsection
