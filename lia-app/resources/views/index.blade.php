@include('nav.headerIndex')

<link rel="stylesheet" href="{{ asset('css/index.css') }}" />


<main>
    <div class="welcomeContainer">
        <div class="yrgo"> <img src="/svgs/YRGO_logo_Y.svg" alt="yrgo"> </div>
        <h4 class="welcomeMessage"> Välkommen till Yrgos LIA portal! </h4>
        <div class="interestedButtonsFirst">
            <div class="createAccountButton buttonFont"> <a href="/registration">SKAPA KONTO</a> </div>
            <div class="companyGalleryButtonFirst">
                <form action="{{ route('company.gallery') }}" method="GET">
                    <button type="submit" class="buttonFirst buttonFont">FÖRETAGS-GALLERI</button>
                </form>
            </div>
        </div>
    </div>

    <div class="desktop-container">
        <div class="desktop-welcome">
            <h1 class="desktop-h1-bold">VÄLKOMMEN TILL YRGOS LIA PORTAL</h1>
            <h1 class="desktop-h1-thin">VÄLJ EN LIA PLATS SOM LEDER TILL JOBB</h1>
            <div class="desktop-first-buttons">
                <div class="desktop-button desktop-create-account desktop-h1-button"> <a href="/registration">
                        SKAPA KONTO </a>
                </div>
                <div class="desktop-button desktop-company-gallery desktop-h1-button">
                    <form action="{{ route('company.gallery') }}" method="GET">
                        <button type="submit" class="desktop-h1-button d-c-g">FÖRETAGS-GALLERI</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="branscheventContainer desktop-bransch-event">
        <h4>Branschevent WU+DD 2024</h4>
        <h5>24 april kl 15:00</h5>
        <p class="body1">Vi vill hälsa både elever och företag välkomna till det kommande eventet på Yrgo. Detta event ger elever en möjlighet att knyta kontakter med företag inom branschen samtidigt som det ger företagen en chans att hitta framtida kollegor. Varmt välkomna till Yrgo på Lärdomsgatan 3!</p>
    </div>

    <div class="ledningsgruppen">
        <h5 class="desktop-h5-bold">Företag från ledningsgruppen</h5>
        <marquee> <img src="/img/Big_Ledningsgruppen_AutoLayout.png" alt="företag" class="companyLogos"> </marquee>
    </div>

    <div class="desktop-interested-image">
        <div class="areYouInterested">
            <h4>Verkar det intressant?</h4>
            <p class="body2">Genom att skapa ett konto får du/ni full tillgång till plattformen och kan börja nätverka med företag och elever.</p>
            <div class="interestedButtonsSecond">
                <div class="createAccountButtonWhite buttonFont"><a href="/registration">SKAPA KONTO</a></div>
                <div class="companyGalleryButtonSecond buttonFont">
                    <form action="{{ route('company.gallery') }}" method="GET">
                        <button type="submit" class="buttonSecond">FÖRETAGS-GALLERI</button>
                    </form>
                </div>
            </div>
        </div>
        <img src="/img/Desktop_Image_Index.png" alt="yrgo" class="desktop-image">
    </div>

</main>

@include('errors')

@include('nav.footer')