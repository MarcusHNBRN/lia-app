@include('nav.header')

<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />

<div class="backButton"> <a href="{{ url()->previous() }}"> <img src="/svgs/leftArrow.svg" alt="back"> </a> </div>

<div class="basicInfo">
    <div class="studentDetailPicture"> Bild här </div>
    <h4 class="studentDetailName"> {{ $student->studentName }} </h4>
    <h3 class="studentDetailStudy">
        @if ($studentInfo->study === 'WU')
        Webbutvecklare
        @elseif ($studentInfo->study === 'DD')
        Digital Designer
        @else
        N/A
        @endif </h3>
    <!---<h5 class="studentDetailCity"> stad? </h5> --->
    <h4 class="studentDetailAge"> 22 </h4>
</div>

<div class="studentMoreInfo">
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

<div class="card-container">
            <div class="contact-card">
                <h5>Kontaktuppgifter</h5>
                <div class="top-row">
                    @if ($student->linkedin)
                    <button><a href="{{ $student->homepage }}" class="buttonFont">Portfolio</a></button>
                    @endif
                    @if ($student->email)
                    <button><a href="{{ $student->linkedin }}" class="buttonFont">LinkedIn</a></button>
                    @endif
                </div>



                <div class="mail">
                    @if ($student->email)
                    <button><a href="mailto:{{$student->email}}" class="buttonFont">{{ $student->email }}</a></button>
                    @endif
                </div>
            </div>
        </div>

<!---<div class="studentContactInfo">
    <h1>Kontaktuppgifter</h1>
    <div class="sci">
        <div>1</div>
        <div>2</div>
        <div>3</div>
    </div>
</div>--->

@include('nav.footer')