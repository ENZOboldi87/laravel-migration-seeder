@extends('layouts.layouts')
@section('title')
  Guest - database
@endsection
@section('content')

 <h1>Ecco i tuoi ospiti</h1>

 <ul>
   @foreach ($guest as $guest)
     <li>{{$guest->name}} {{$guest->lastname}}
       <a href="{{route ('Guest.show', $guest) }}"><button type="button" class="btn btn-primary">Dettagli</button></a>
     </li>
   @endforeach
 </ul>


<a href="{{route ('Guest.index')}}"></a>




  @endsection
