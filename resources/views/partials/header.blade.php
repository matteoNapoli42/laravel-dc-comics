<header class="d-flex justify-content-between container align-items-center">
    <div class="col-2 py-3">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" style="height: 86px;">
    </div>
    <div class="col-8 py-4 justify-content-center d-flex gap-4">
        @foreach (config('nav-items') as $item)
            <a href="{{ $item['url'] }}" class="nav-item nav-link">{{ $item['voice'] }}</a>
        @endforeach

        <button class="btn btn-danger">
            <a href="{{Route('comics.index')}}">ADMIN</a>
        </button>
    </div>

    <div class="col-2 py-4">
        <span style="text-decoration-line: underline">Search <i class="fa-solid fa-magnifying-glass"></i></span>
    </div>
</header>