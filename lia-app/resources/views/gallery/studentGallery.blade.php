@include('nav.header')

<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />

@include('nav.galleryNav')

<div class="studentMain">
    @foreach ($students as $student)
    <div class="profileCard">
        <a href="{{ route('student.detail', ['studentId' => $student->id]) }}">
            <div class="profilePicture">BILDHÄR</div>
            <div class="firstDescriptionRow">
                <p class="studentWUorDD subtitle1"> {{ $studentInfos[$student->id]->study ?? 'N/A' }} </p>
                <p> SKILLS </p>
            </div>
            <div class="secondDescriptionRow">
                <h5 class="studentName"> {{ $student->studentName }} </h5>
                <p class="studentAge"> 22 </p>
            </div>
        </a>
    </div>
    @endforeach
</div>

@include('nav.footer')
