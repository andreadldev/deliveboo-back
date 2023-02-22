@extends('layouts.admin')

@section('content')
    {{-- <?php
    dd($dish['price']);
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
                        @foreach ($groupedOrders as $groupedOrder)
                            <tr>
                                <td scope="row">{{ $groupedOrder['code'] }}</td>
                                <td>{{ $groupedOrder['order_date'] }}</td>
                                <td>{{ $groupedOrder['firstname'] }} {{ $groupedOrder['lastname'] }}</td>
                                <td>
                                    @foreach ($groupedOrder['dishes'] as $dish)
                                        {{ $dish['name'] }}{{ $dish['price'] }}
                                        @if (!$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <?php
                                    $sum = 0;
                                    foreach ($groupedOrder['dishes'] as $value) {
                                        $sum += $value['price'];
                                    }
                                    echo $sum;
                                    ?>
                                </td>
                            </tr>
                        @endforeach
                        {{-- @foreach ($groupedOrders as $groupedOrder)
                            <h4>ORDINE:</h4>
                            <h5>Indirizzo Ordine: {{ $groupedOrder['address_client'] }}</h5>
                            <h6>Email Cliente: {{ $groupedOrder['email_client'] }}</h6>
                            <h6>Prezzo Totale: {{ $groupedOrder['total_price'] }} Euro</h6>
                            <div class="mb-4">Dettaglio ordine:
                                <div>
                                    @foreach ($groupedOrder['dishes'] as $dish)
                                        <div>{{ $dish['quantity'] }} {{ $dish['name'] }}</div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach --}}
                    </tbody>
                </table>
            </tbody>
        </table>
    </section>

@endsection
