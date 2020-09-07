@extends('layouts.layouts')
@section('title')
  Dettagli - DB
@endsection
@section('content')
<h1>in questa pagina mostro i dettagli dei miei ospiti </h1>

<div class="">
  <h2>Titolo: {{$guest->lastname}}</h2>
</div>


<div class="">
  <a href="{{route ('Guest.index')}}">torna indietro</a>
</div>

@endsection
