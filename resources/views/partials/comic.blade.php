@foreach(config('comics') as $comic)
<div class="col-2 py-5">
    <img src="{{$comic['thumb']}}" style="height: 180px; width: 180px;">
    <h6 style="color: white;">{{$comic['title']}}</h6>
</div>
@endforeach