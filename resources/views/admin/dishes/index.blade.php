@extends('layouts.app')
@section('content')

<h2>Piatti di {{$restaurant->name}}</h2>
<h3>Ciao {{$user->name}}</h3>
@foreach ($dishes as $dish)
<div>{{$dish->name}}</div>


    
@endforeach
@endsection
