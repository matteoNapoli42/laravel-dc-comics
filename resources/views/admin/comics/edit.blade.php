@extends('layout.admin')

@section('content')
<div class="container">
    <h1 class=" text-center mb-5">ADMIN EDITING {{$comic->id}}</h1>
    <form action="{{route('comics.update', $comic)}}" method="POST" enctype="multipart/form-data">
        
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label"><h3>TITLE</h3></label>
            <input type="text" class="form-control" name="name" id="title" aria-describedby="helpId" placeholder="Inserisci il titolo del fumetto" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label"><h3>DESCRIPTION</h3></label>
            <input type="text" class="form-control" name="description" id="description" aria-describedby="helpId" placeholder="Inserisci una descrizione" required>
        </div>

        <div class="mb-3">
            <label for="cover_image" class="form-label"><h3>THUMB</h3></label>
            <input type="file" class="form-control" name="cover_image" id="cover_image" placeholder="" aria-describedby="cover_image_helper">
            <div id="cover_image_helper" class="form-text">Carica un immagine di copertina</div>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label"><h3>PRICE</h3></label>
            <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="Inserisci il prezzo" required>
        </div>

        <div class="mb-3">
            <label for="serie" class="form-label"><h3>SERIES</h3></label>
            <input type="text" class="form-control" name="serie" id="serie" aria-describedby="helpId" placeholder="Inserisci il prezzo" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label"><h3>TYPE</h3></label>
            <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId" placeholder="Inserisci il tipo di articolo" required>
        </div>

        <button type="submit" class="btn btn-success my-5">SAVE <a href="{{route('comics.index')}}"></a></button>
    </form>
</div>

@endsection