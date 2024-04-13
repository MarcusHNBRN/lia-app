@include('nav.header')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}" />

<div class="profile">

    @if ($studentInfo->profile_picture)
    <img src="data:image/jpeg;base64,{{ base64_encode($studentInfo->profile_picture) }}" alt="Profile Picture" class="profile-picture">
    @else
    <p>No profile picture available</p>
    @endif

    <h1>{{ $student->studentName }}</h1>
    @if ($studentInfo->study === 'WU')
    Webbutvecklare
    @elseif ($studentInfo->study === 'DD')
    Digital Designer
    @else
    Unknown Study
    @endif
    <div class="profile-info">
        <div class="profile-card">
            @if ($studentInfo)
            <p><strong>Om Mig:</strong>
                @if ($studentInfo->about)
                {{ $studentInfo->about }}
                @else
                Lägg till mer information
                @endif
            </p>
        </div>
        <div class="profile-card">
            <p><strong>Utbildningar</strong>
                @if ($studentInfo->education)
                {{ $studentInfo->education }}
                @else
                Lägg till mer information
                @endif
            </p>
        </div>
        <div class="profile-card">
            <p><strong>Arbetslivserfarenhet</strong>
                @if ($studentInfo->work)
                {{ $studentInfo->work }}
                @else
                Lägg till mer information
                @endif
            </p>
        </div>

        <div class="profile-card">
            <p><strong>Färdigheter</strong>
                @if ($studentInfo->skills)
                {{ $studentInfo->skills }}
                @else
                Lägg till mer information
                @endif
            </p>
        </div>
        <div class="profile-card">
            <p><strong>Intressen</strong>
                @if ($studentInfo->interests)
                {{ $studentInfo->interests }}
                @else
                Lägg till mer information
                @endif
            </p>
        </div>
        @endif
        <div class="profile-info">
            <div class="contact-card">
                Kontaktuppgifter
                <div>
                    @if ($studentInfo->portfolio)
                    <button> <a href="{{ $studentInfo->portfolio }}" class="btn btn-primary">Portfolio</a> </button>
                    @endif

                    @if ($studentInfo->linkedin)
                    <button> <a href="{{ $studentInfo->linkedin }}" class="btn btn-primary">LinkedIn</a> </button>
                    @endif
                </div>
                @if ($student->email)
                <button> <a href="mailto:{{ $student->email }}" class="btn btn-primary"> {{ $student->email }} </a> </button>
                @endif
            </div>

        </div>