@extends('layout.admin')

@section('content')

<div class="container">
    <h1>ADMIN CREATE</h1>
    <form action="{{route('comics.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

    </form>
</div>
@endsection