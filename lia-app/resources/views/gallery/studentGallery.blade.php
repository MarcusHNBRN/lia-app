@include('nav.header')

@php
$students = DB::table('students')->get();
@endphp
<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />

@include('nav.galleryNav')

<div class="studentMain">
    @foreach ($students as $student)
    <div class="profileCard">
        <a href="{{ route('student.detail', ['studentId' => $student->id]) }}">
            <div class="profilePicture">BILDHÄR</div>
            <div class="firstDescriptionRow">
                <h3 class="studentWUorDD"> KLASS HÄR </h3>
                <p> SKILLS </p>
            </div>
            <div class="secondDescriptionRow">
                <h1 class="studentName"> {{ $student->studentName }} </h1>
                <p class="studentAge"> {{ $student->age }} </p>
            </div>
        </a>
    </div>

    @endforeach
</div>