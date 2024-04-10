@include('nav.header')

<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />

<div class="backButton"> <a href="/"> <img src="/svgs/leftArrow.svg" alt="back"> </a> </div>

<div class="studentBasicInfo">
    <div class="studentDetailPicture"> Bild här </div>
    <h1 class="studentDetailName"> {{ $student->studentName }} </h1>
    <h1 class="studentDetailStudy">DD / WU</h1>
    <h5 class="studentDetailCity">Stad</h5>
    <div class="studentDetailAge"> {{ $student->age }} </div>
</div>

<div class="studentMoreInfo"> <!-- selma om det inte är inlagt? -->
    <h1 class="infoTitles">Om mig</h1>
    <h1 class="infoTitles">Utbildningar</h1>
    <h1 class="infoTitles">Arbetslivserfarenhet</h1>
    <h1 class="infoTitles infoTitlesLast">Intressen</h1>
    <h1 class="infoTitles infoTitlesLast">Färdigheter</h1>
</div>

<div class="studentContactInfo">
    <h1>Kontaktuppgifter</h1>
    <div class="sci">
        <div>1</div>
        <div>2</div>
        <div>3</div>
    </div>
</div>