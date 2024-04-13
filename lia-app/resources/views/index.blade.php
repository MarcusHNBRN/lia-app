@include('nav.header')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />


<main>
    <div class="welcomeContainer">
        <div class="yrgo"> <img src="/svgs/YRGO_logo_Y.svg" alt="yrgo"> </div>
        <h1 class="welcomeMessage"> Välkommen till Yrgos LIA portal! </h1>
        <div class="createAccountButton"> <a href="/registration">SKAPA KONTO</a> </div>
        <div class="companyGalleryButton">
            <form action="{{ route('company.gallery') }}" method="GET">
                <button type="submit" class="button">FÖRETAGS-GALLERI</button>
            </form>
        </div>
    </div>

    <div class="branscheventContainer">
        <h1>Branschevent <br> WU+DD 2024</h1>
        <h2>24 april kl 15:00</h2>
        <p>Vi vill hälsa både elever och företag välkomna till det kommande eventet på Yrgo. Detta event ger elever en möjlighet att knyta kontakter med företag inom branschen samtidigt som det ger företagen en chans att hitta framtida kollegor. Varmt välkomna till Yrgo på Lärdomsgatan 3!</p>
    </div>

    <div class="ledningsgruppen">
        <h2>Företag från <br> ledningsgruppen</h2>
        <marquee> <img src="/img/Big_Ledningsgruppen_AutoLayout.png" alt="företag" class="companyLogos"> </marquee>
    </div>

<br><br><br><br>
    <form method="POST" action="{{ route('login.submit') }}">
        @csrf
        <div>
            <label for="email">Email</label>
            <input name="email" id="email" type="email" />
        </div>
        <div>
            <label for="password">Password</label>
            <input name="password" id="password" type="password" />
        </div>
        <button type="submit">Login</button>
        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (session('error'))
        <div>{{ session('error') }}</div>
        @endif
    </form>

    <!-- Tillfälliga länkar så jag kommer åt sidorna: -->
    <br><br><br>
    <form action="{{ route('student.gallery') }}" method="GET">
        <button type="submit">elever</button>
    </form>
</main>

@include('errors')

@include('nav.footer')