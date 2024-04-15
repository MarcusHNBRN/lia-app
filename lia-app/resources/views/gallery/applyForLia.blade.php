@include('nav.header')

<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />

<div class="applyContainer">
    <h4>Dubbel kontroll</h4>
    <div><img src="/svgs/YRGO_logo_Y.svg" alt="Yrgo"> </div>
    <p class="body1">Är du säker att du vill skicka iväg ansökan?</p>

    <!---<p> {{ $email }} </p> --->
    <div class="applyLiaButtons">
        <p class="keepApply buttonFont"><a href="mailto:{{ $email }}">JAG ÄR SÄKER</a></p>
        <p class="noApply buttonFont"> <a href="{{ url()->previous() }}"> NEJ JAG RÅKADE TRYCKA </a></p>
    </div>

    <div class="footerCopy captionFont">
        &#169 2024 Yrgo, högre yrkesutbildning Göteborg
    </div>
</div>

@include('nav.footer')