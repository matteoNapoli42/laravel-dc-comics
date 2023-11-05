@extends('layout.admin')

@section('content')
<h1 class=" text-center mb-5">COMIC {{$comic->id}} DETAILS</h1>
<div class="container mx-auto d-flex">
    <div class="col-6">
        <img width="80%" src="{{$comic->thumb}}" alt="">
    </div>
    <div class="col-6 d-flex flex-column">
        <h3>{{$comic->title}}</h3>
        <p>Descrizione : {{$comic->description}}</p>
        <span>Prezzo : {{$comic->price}}</span>
        <span>Serie :{{$comic->series}}</span>
        <span>Tipo > {{$comic->type}}</span>
    </div>
   
</div>
@endsection