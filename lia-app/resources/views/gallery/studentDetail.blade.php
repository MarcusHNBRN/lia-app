@auth
@include('nav.header')
@else
@include('nav.headerIndex')
@endauth

<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />
<link rel="stylesheet" href="{{ asset('css/profile.css') }}" />

<div class="backButton"> <a href="/studentGallery"> <img src="/svgs/leftArrow.svg" alt="back"> </a> </div>

<div class="basicInfo">
    <div class="studentDetailPicture">
        @if (isset($studentInfo) && $studentInfo->profile_picture)
        <img src="data:image/jpeg;base64,{{ base64_encode($studentInfo->profile_picture) }}" alt="Profile Picture" class="profile-picture">
        @else
        <p>No profile picture available</p>
        @endif
    </div>
    <h4 class="studentDetailName"> {{ $student->studentName }} </h4>
    <h3 class="studentDetailStudy">
        @if (isset($studentInfo) && $studentInfo->study === 'WU')
        Webbutvecklare
        @elseif (isset($studentInfo) && $studentInfo->study === 'DD')
        Digital Designer
        @else
        N/A
        @endif
    </h3>
</div>

<div class="studentMoreInfo">
    <div class="firstThreeItems">
        <div class="infoContainer">
            <h5 class="infoTitles">Om mig</h5>
            <p class="body2"> {{ isset($studentInfo) ? $studentInfo->about : '' }} </p>
        </div>

        <div class="infoContainer">
            <h5 class="infoTitles">Utbildningar</h5>
            <p class="body2"> {{ isset($studentInfo) ? $studentInfo->education : '' }} </p>
        </div>

        <div class="infoContainer">
            <h5 class="infoTitles">Arbetslivserfarenhet</h5>
            <p class="body2"> {{ isset($studentInfo) ? $studentInfo->work : '' }} </p>
        </div>
    </div>

    <div class="lastTwoItems">
        <div class="infoContainer">
            <h5 class="infoTitles">Intressen</h5>
            <p class="body2"> {{ isset($studentInfo) ? $studentInfo->interests : '' }} </p>
        </div>

        <div class="infoContainer">
            <h5 class="infoTitles">Färdigheter</h5>
            <p> {{ isset($studentInfo) ? $studentInfo->skills : '' }} </p>
        </div>
    </div>

    <div class="card-container">
        <div class="contact-card">
            <h5>Kontaktuppgifter</h5>
            <div class="top-row">
                @if (isset($studentInfo) && $studentInfo->portfolio)
                <button><a href="{{ $studentInfo->portfolio }}" class="buttonFont" target="_blank">Portfolio</a></button>
                @endif
                @if (isset($studentInfo) && $studentInfo->linkedin)
                <button><a href="{{ $studentInfo->linkedin }}" class="buttonFont" target="_blank"> LinkedIn </a></button>
                @endif
            </div>

            <div class="mail">
                @if (isset($student) && $student->email)
                <button><a href="mailto:{{$student->email}}" class="buttonFont">{{ $student->email }}</a></button>
                @endif
            </div>
        </div>
    </div>
</div>

@include('nav.footer')