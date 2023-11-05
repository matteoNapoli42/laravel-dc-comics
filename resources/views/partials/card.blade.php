@extends('layout.app')

@section('content')


<section id="jumbotron">
</section>

<section id="series">
    <div class="container">
        <div class="col-2 bg-primary p-2 bannerPosition">
            <h5 class="text-white text-center">CURRENT SERIES</h5>
        </div>
        <div class="row d-flex flex-wrap">
            @foreach($comics as $comic)
    


        <div class="col-2 py-5">
            <img src="{{$comic->thumb}}" style="height: 180px; width: 180px;">
            <h6 style="color: white;">{{$comic->title}}</h6>
        </div>

            @endforeach
        </div>
        <div class="row justify-content-center py-3">
            <div class="col-3 d-flex ">
                <button class=" btn btn-primary ">
                    LOAD MORE
                </button>
            </div>
        </div>
    </div>
</section>
@endsection