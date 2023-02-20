@extends('layouts.admin')
@section('content')

<h2>Piatti di {{$restaurant->name}}</h2>
<h3>Ciao {{$user->name}}</h3>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Prezzo</th>
      <th scope="col">Ingredienti</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Immagine</th>
      <th scope="col">Visibile</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($dishes as $dish)
    <tr>
      <td>{{$dish->name}}</td>
      <td>{{$dish->price}}</td>
      <td>{{$dish->ingredients}}</td>
      <td>"{{$dish->description}}"</td>
      <td><img class="w-25" src="{{$dish->img}}" alt=""></td>
      <td><?php if($dish->visible == 1) {echo "Sì";} else {echo 'No';} ?></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
