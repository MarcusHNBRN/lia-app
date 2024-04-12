@include('nav.header')

<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />

<div class="backButton"> <a href="/"> <img src="/svgs/leftArrow.svg" alt="back"> </a> </div>

<div class="studentBasicInfo">
    <div class="studentDetailPicture"> Bild här </div>
    <h1 class="studentDetailName"> {{ $student->studentName }} </h1>
    <h1 class="studentDetailStudy"> {{ $studentInfo->study }} </h1>
    <h5 class="studentDetailCity"> stad? </h5>
    <div class="studentDetailAge"> 22 </div>
</div>

<div class="studentMoreInfo"> <!-- selma om det inte är inlagt? -->
    <div class="firstThreeItems">
        <div class="infoContainer">
            <h1 class="infoTitles">Om mig</h1>
            <p> {{ $studentInfo->about }} </p>
        </div>

        <div class="infoContainer">
            <h1 class="infoTitles">Utbildningar</h1>
            <p> {{ $studentInfo->education }} </p>
        </div>

        <div class="infoContainer">
            <h1 class="infoTitles">Arbetslivserfarenhet</h1>
            <p> {{ $studentInfo->work }} </p>
        </div>
    </div>

    <div class="lastTwoItems">
        <div class="infoContainer">
            <h1 class="infoTitles">Intressen</h1>
            <p> {{ $studentInfo->interests }} </p>
        </div>

        <div class="infoContainer">
            <h1 class="infoTitles">Färdigheter</h1>
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