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
                {{-- @foreach ($orders as $key => $order)
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
                                        @foreach ($dishes as $index => $dish)
                                            @foreach ($quantities as $i => $quantity)
                                                @if ($dish->orders[0]->pivot->dish_id === $quantity['dish_id'])
                                                    <p class="card-text">{{ $dish->name }}</p>
                                                @break
                                            @endif
                                        @endforeach
                                    @endforeach
                                </div>
                                <div class="right"style="width: 50%;">
                                    <h5 class="card-title">Quantità</h5>
                                    @foreach ($dishes as $index => $dish)
                                        @foreach ($quantities as $i => $quantity)
                                            @if ($dish->id === $quantity['dish_id'])
                                                <p>{{ $quantity['quantity'] }}</p>
                                            @break
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
        @endforeach --}}
                @foreach ($orders as $order)
                    <div class="card m-3 shadow">

                        <div class="card-body row">
                            <div class="col-md-6">
                                <h4>Ordine n. {{ $order->code }}</h4>
                                <hr>
                                <p class="card-title">Nome e cognome cliente: {{ $order->firstname }},
                                    {{ $order->lastname }}
                                </p>
                                <p class="card-title">Indirizzo: {{ $order->address }}</p>

                                <p class="card-title">Telefono: {{ $order->phone_number }}</p>
                                <p class="card-title">Email: {{ $order->email }}</p>
                                <p class="card-title">Totale: €{{ $order->price }}</p>

                                @if ($order->additiona_info)
                                    <p class="card-title">Note: {{ $order->additiona_info }}</p>
                                @else
                                    <p> Non sono state inserite note </p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <h4 class="mt-md-0 mt-3">Piatti ordinati</h4>
                                <hr>
                                {{-- foreach piatti ordinati --}}
                                <div>
                                    @foreach ($order->dishes as $dish)
                                        <p class="card-title">{{ $dish->pivot->quantity }}x {{ $dish->name }} -
                                            €{{ $dish->pivot->quantity * $dish->price }}</p>
                                        <div class="md-0">
                                        </div>
                                    @endforeach
                                </div>
                            </div>


                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </section>

@endsection
