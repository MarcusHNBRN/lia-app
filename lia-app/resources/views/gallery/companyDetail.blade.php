@include('nav.header')

<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />

<div class="backButton"> <a href="/"> <img src="/svgs/leftArrow.svg" alt="back"> </a> </div>

<div class="companyBasicInfo">
    <h3 class="companyName"> {{ $company->companyName }} </h3>
    <h2 class="workTitle"> Arbetstitel </h2>
    <div class="companyDetailPicture"> BILD HÄR </div>
    <div class="lookingFor"> Kort beskrivning kring vad de söker här </div>
</div>

<div class="dateAndPlace">
    <div class="dateAndPlaceContent"> x veckor | stad | heltid | Start: Månad 202X </div> <!--selma-->
</div>

<div class="about">
    <h2>Om LIA:</h2>
    <p> Info om vad man får göra på sin LIA hos företaget </p> <!--selma-->
    <div class="aboutButtons">
        <div class="applyForLia">ANSÖK NU!</div>
        <div class="companyProfile">FÖRETAGETS PROFIL</div> <!--selma kolla vad som menas-->
    </div>

    <h1 class="aboutTitles">Dina arbetsuppgifter</h1>
    <h1 class="aboutTitles">Vi erbjuder:</h1>
    <h1 class="aboutTitles">Din profil</h1>
</div>

@include('nav.galleryDetailContact')

<div class="companyAdress">
    <h1>Adress</h1>
    <p>Här printas <br> adressen snyggt</p>
</div>

@include('nav.footer')