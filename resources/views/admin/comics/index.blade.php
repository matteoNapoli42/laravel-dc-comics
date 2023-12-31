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
                    <td>
                        <button class=" btn btn-secondary">
                            <a class=" text-white" href="{{route('comics.show', $comic->id)}}">VIEW</a>
                        </button>
                    </td>
                    <td>
                        <button class=" btn btn-secondary">
                            <a class=" text-white" href="{{route('comics.edit', $comic)}}">
                                EDIT
                            </a>
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                        data-bs-target="#modalDestroy{{$comic->id}}">
                            DESTROY
                         </button>
                    </td>
                </tr>
                
               <div class="modal fade" id="modalDestroy{{$comic->id}}" tabindex="-1"
               data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="modalTitle">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitle">
                                    DELETE COMIC {{$comic->id}}
                                </h5>
                                <button class="btn btn-danger" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <span>Are you sure you want to delete {{$comic->title}}?</span>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>

                                <form action="{{route('comics.destroy', $comic)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">
                                        DELETE
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
            
                </div>
                
                
                @empty
                    <h1>No data to show</h1>
                    
                @endforelse

            </tbody>
        </table>
        <a class=" btn btn-primary" href="{{route('comics.create')}}">ADD NEW COMIC</a>

    </div>


</div>
@endsection