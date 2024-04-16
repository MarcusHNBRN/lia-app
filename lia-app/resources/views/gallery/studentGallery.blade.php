@include('nav.header')

<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />

@include('nav.galleryNav')

<div class="studentMain">
    @foreach ($students as $student)
    <div class="studentCard galleryCard">
        <a href="{{ route('student.detail', ['studentId' => $student->id]) }}">
            <div class="profilePicture">

                @if ($studentInfos[$student->id]->profile_picture)
                <img src="data:image/jpeg;base64,{{ base64_encode($studentInfos[$student->id]->profile_picture) }}" alt="Profile Picture" class="profile-picture">
                @else
                <p>No profile picture available</p>
                @endif

            </div>
            <div class="firstDescriptionRow">
                <p class="studentWUorDD captionFont">
                    @if ($studentInfos[$student->id]->study === 'WU')
                    Webbutvecklare
                    @elseif ($studentInfos[$student->id]->study === 'DD')
                    Digital Designer
                    @else
                    N/A
                    @endif

                </p>
                <p style="padding-bottom:8px"> @if($studentInfos[$student->id]->study === 'WU')
                    CSS JavaScript HTML
                    @elseif($studentInfos[$student->id]->study === 'DD')
                    UX UI Motion
                    @endif </p>
            </div>
            <div class="secondDescriptionRow">
                <h5 class="studentName"> {{ $student->studentName }} </h5>
                <div style="padding-bottom: 16px;">
                    <p class="studentAge"> 22 </p>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>

@include('nav.footer')