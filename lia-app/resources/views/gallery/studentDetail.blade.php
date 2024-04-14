@include('nav.header')

<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />

<div class="backButton"> <a href="/"> <img src="/svgs/leftArrow.svg" alt="back"> </a> </div>

<div class="studentBasicInfo">
    <div class="studentDetailPicture"> Bild här </div>
    <h4 class="studentDetailName"> {{ $student->studentName }} </h4>
    <h3 class="studentDetailStudy"> {{ $studentInfo->study }} </h3>
    <h5 class="studentDetailCity"> stad? </h5>
    <h4 class="studentDetailAge"> 22 </h4>
</div>

<div class="studentMoreInfo"> <!-- selma om det inte är inlagt? -->
    <div class="firstThreeItems">
        <div class="infoContainer">
            <h5 class="infoTitles">Om mig</h5>
            <p class="body2"> {{ $studentInfo->about }} </p>
        </div>

        <div class="infoContainer">
            <h5 class="infoTitles">Utbildningar</h5>
            <p class="body2"> {{ $studentInfo->education }} </p>
        </div>

        <div class="infoContainer">
            <h5 class="infoTitles">Arbetslivserfarenhet</h5>
            <p class="body2"> {{ $studentInfo->work }} </p>
        </div>
    </div>

    <div class="lastTwoItems">
        <div class="infoContainer">
            <h5 class="infoTitles">Intressen</h5>
            <p class="body2"> {{ $studentInfo->interests }} </p>
        </div>

        <div class="infoContainer">
            <h5 class="infoTitles">Färdigheter</h5>
            <p> {{ $studentInfo->skills }} </p>
        </div>
    </div>
</div>

@include('nav.galleryDetailContact')

<!---<div class="studentContactInfo">
    <h1>Kontaktuppgifter</h1>
    <div class="sci">
        <div>1</div>
        <div>2</div>
        <div>3</div>
    </div>
</div>--->

@include('nav.footer')