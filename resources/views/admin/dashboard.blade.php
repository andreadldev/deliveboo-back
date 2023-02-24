@extends('layouts.admin')

@section('content')
    {{-- <?php
    dd($quantities);
    ?> --}}
    <h1>Dashboard</h1>
    <h3 class="pt-3">Il tuo ristorante</h3>
    <section class="info">
        <table class="table table-bordered w-50 mt-3">
            @if ($restaurant->img)
                @if (str_contains($restaurant->img, 'http'))
                    <img class="w-25 my-3" src="{{ $restaurant->img }}"
                        onerror="this.src='https://nagrannar.is/images/restaurant-placeholder.png'"
                        alt="{{ $restaurant->name }}">
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
            <h2>Ordini ricevuti</h2>
            <tbody>
                @foreach ($orders as $order)
                    <div class="row">
                        <div class="card" style="width: 400px;">
                            <div class="card-body">
                                <h5 class="card-title">Numero ordine: {{ $order['code'] }}</h5>
                                <p class="card-text">Data dell'ordine: {{ $order['order_date'] }}</p>
                                <p class="card-text">Nome: {{ $order['firstname'] }} Cognome:
                                    {{ $order['lastname'] }}</p>
                                <div class="bottom d-flex">
                                    <div class="left" style="width: 50%;">
                                        <h5 class="card-title">Piatti ordinati</h5>
                                        @foreach ($order['dishes'] as $dish)
                                            <p class="card-text">{{ $dish['name'] }}</p>
                                        @endforeach
                                    </div>
                                    <div class="right"style="width: 50%;">
                                        <h5 class="card-title">Quantità</h5>
                                        @foreach ($dishes as $dish)
                                            @foreach ($quantities as $quantity)
                                                {{-- @dd($quantity) --}}
                                                @if ($dish->id === $quantity->id)
                                                    <p>{{ $quantity->quantity }}</p>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                                <p class="mt-3"> <b>Prezzo totale:</b> <?php
                                $sum = 0;
                                foreach ($order['dishes'] as $value) {
                                    $sum += $value['price'];
                                }
                                echo $sum;
                                ?>€</p>
                            </div>
                        </div>
                    </div>
                @endforeach


                {{-- <table class="table">
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
                                <td scope="row">{{ $order['code'] }}</td>
                                <td>{{ $order['order_date'] }}</td>
                                <td>{{ $order['firstname'] }} {{ $order['lastname'] }}</td>
                                <td>
                                    @foreach ($order['dishes'] as $dish)
                                        {{ $dish['name'] }}

                                        @if (!$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <?php
                                    $sum = 0;
                                    foreach ($order['dishes'] as $value) {
                                        $sum += $value['price'];
                                    }
                                    echo $sum;
                                    ?>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> --}}
            </tbody>
        </table>
    </section>

@endsection
