@guest
@include('nav.header')
@else
@include('nav.headerIndex')
@endguest


<link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
<link rel="stylesheet" href="{{ asset('css/registrering.css') }}" />
<main class="main.registration">
    <div class="edit-container">
        <a href="{{ route('student_dashboard', ['id' => Auth::guard('student')->user()->id]) }}"> <img src="/svgs/leftArrow.svg" alt="back">
            <a href="{{ route('student.profile.edit', ['id' => Auth::guard('student')->user()->id]) }}"><img class="gear" src="/svgs/gear.svg" alt="gear"></a>
    </div>

    <div class="profile">

        <div class="profile">
            <div class="profile-picture-container">
                @if ($studentInfo->profile_picture)
                <img src="data:image/jpeg;base64,{{ base64_encode($studentInfo->profile_picture) }}" alt="Profile Picture" class="profile-picture">
                @else
                <img src="/svgs/yrgo_logo_Y.svg" alt="Profile Picture" class="default-picture">
                @endif
            </div>
            <h4>{{ $student->studentName }}</h4>
            @if ($studentInfo->study === 'WU')
            <h3>Webbutvecklare</h3>
            @elseif ($studentInfo->study === 'DD')
            <h3>Digital Designer</h3>

            @endif
            <div class="profile-info">
                <div class="profile-card">
                    @if ($studentInfo)
                    <h5>Om Mig:</h5>
                    <p class="body2"> @if ($studentInfo->about)
                        {{ $studentInfo->about }}
                        @else
                        Lägg till mer information
                        @endif
                    </p>
                </div>

                <div class="profile-card">
                    <h5>Utbildningar</h5>
                    <ul class="body2">
                        @if ($studentInfo->education)
                        @foreach (explode(',', $studentInfo->education) as $utbildning)
                        <li>{{ trim($utbildning) }}</li>
                        @endforeach
                        @endif
                    </ul>
                </div>
                <div class="profile-card">
                    <h5>Arbetslivserfarenhet</h5>
                    <ul class="body2">
                        @if ($studentInfo->work)
                        @foreach (explode(',', $studentInfo->work) as $erfarenhet)
                        <li>{{ trim($erfarenhet) }}</li>
                        @endforeach
                        @else
                        <li>Lägg till mer information</li>
                        @endif
                    </ul>
                </div>
                <div class="skills-container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row-card">
                                <h5>Intressen</h5>
                                <ul class="body2">
                                    @if ($studentInfo->interests)
                                    @foreach (explode(',', $studentInfo->interests) as $interest)
                                    <li>{{ trim($interest) }}</li>
                                    @endforeach
                                    @else
                                    <li>Lägg till mer information</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row-card">

                                <div class="title">
                                    <h5>Färdigheter</h5>
                                </div>

                                <ul class="body2">
                                    @if ($studentInfo->skills)
                                    @foreach (explode(',', $studentInfo->skills) as $skill)
                                    <li>{{ trim($skill) }}</li>
                                    @endforeach
                                    @else
                                    <li>Lägg till mer information</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div> @endif
                </div>
            </div>
            <div class="card-container">
                <div class="contact-card">
                    <h5>Kontaktuppgifter</h5>
                    <div class="top-row">
                        @if ($studentInfo->portfolio)
                        <button><a href="{{ $studentInfo->portfolio }}" class="buttonFont">Portfolio</a></button>
                        @endif
                        @if ($studentInfo->linkedin)
                        <button><a href="{{ $studentInfo->linkedin }}" class="buttonFont">LinkedIn</a></button>
                        @endif
                    </div>
                    <div class="mail">
                        @if ($student->email)
                        <button><a href="mailto:{{ $student->email }}" class="buttonFont">{{ $student->email }}</a></button>
                        @endif
                    </div>
                </div>
            </div>


        </div>
</main>
@include('nav.footer')