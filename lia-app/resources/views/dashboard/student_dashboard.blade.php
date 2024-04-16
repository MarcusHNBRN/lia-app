
@auth
@include('nav.headerWithLogout')
@include('nav.header')
@else
@include('nav.headerIndex')
@endauth

<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
<!--<a href="{{ route('logout') }}">Logout</a>--->

<main>
    <div class="welcomeContainer desktop-welcome-container">
        <div class="yrgo"> <img src="/svgs/YRGO_logo_Y.svg" alt="yrgo"> </div>
        <h4 class="welcomeMessage"> Välkommen {{ $student->studentName }}! <br> Kom Igång och sök LIA! </h4>
        <div class="interestedButtonsFirst">
            <div class="createAccountButton buttonFont"> <a href="/companyGallery">FÖRETAGS-GALLERI</a> </div>
            <div class="companyGalleryButtonFirst">
                <form action="{{ route('company.gallery') }}" method="GET">
                    <button type="submit" class="buttonFirst buttonFont">LIA-TESTET</button>
                </form>
            </div>
        </div>
    </div>

    <div class="branscheventContainer">
        <h4>Branschevent <br> WU+DD 2024</h4>
        <h5>24 april kl 15:00</h5>
        <p class="body1">Vi vill hälsa både elever och företag välkomna till det kommande eventet på Yrgo. Detta event ger elever en möjlighet att knyta kontakter med företag inom branschen samtidigt som det ger företagen en chans att hitta framtida kollegor. Varmt välkomna till Yrgo på Lärdomsgatan 3!</p>
    </div>

    <div class="ledningsgruppen">
        <h5>Företag från <br> ledningsgruppen</h5>
        <marquee> <img src="/img/Big_Ledningsgruppen_AutoLayout.png" alt="företag" class="companyLogos"> </marquee>
    </div>

    @include('errors')

    @include('nav.footer')