<section class="px-0" id="upperFooter">
    <div class="d-flex container">
        <div class="col-6 d-flex gap-0 py-5">
            @foreach (config('footer-voices') as $voice)
                <div class="col-3">
                    <h5>{{ $voice['title'] }}</h5>
                    <ul>
                        @foreach ($voice['groupVoices'] as $footerElem)
                            <li><a href="">{{ $footerElem }}</a></li>
                        @endforeach

                    </ul>
                </div>
            @endforeach
        </div>
        <div class="col-6" id="bigLogo">
        </div>
    </div>


</section>
<!--LowerFooter-->
<section id="lowerFooter">
    <div class="container d-flex py-4">
        <div class=" col-6">
            <button class="btn btn-outline-primary text-white">
                SING-UP NOW!
            </button>
        </div>
        <div class="col-6 d-flex justify-content-end gap-3 align-items-center">
            <h5 style="color: #0481f9ff ;">FOLLOW US</h5>
            <a href=""><img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt=""></a>
            <a href=""><img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt=""></a>
            <a href=""><img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt=""></a>
            <a href=""><img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt=""></a>
            <a href=""><img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt=""></a>
        </div>
    </div>
</section>