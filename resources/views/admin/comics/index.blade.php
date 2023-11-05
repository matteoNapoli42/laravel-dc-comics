@extends('layout.admin')




@section('content')




<div class=" container">
    <h1 class=" text-center">ADMIN INDEX</h1>
    <div class=" table-responsive">
        <table class=" table table-light mb-1"> 
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">THUMB</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">SERIES</th>
                    <th scope="col">SALE_DATE</th>
                    <th scope="col">TYPE</th>
                </tr>
            </thead>
            <tbody>
                @forelse($comics as $comic)
                <tr>
                    <td scope="col">{{$comic->id}}</td>
                    <td scope="col">{{$comic->title}}</td>
                    <td scope="col">
                        <img width="100px" src="{{$comic->thumb}}" alt="">
                    </td>
                    <td scope="col">{{$comic->description}}</td>
                    <td scope="col">{{$comic->price}}</td>
                    <td scope="col">{{$comic->series}}</td>
                    <td scope="col">{{$comic->sale_date}}</td>
                    <td scope="col">{{$comic->type}}</td>
                </tr>
                    
                @empty
                    
                @endforelse

            </tbody>
        </table>

    </div>


</div>
@endsection