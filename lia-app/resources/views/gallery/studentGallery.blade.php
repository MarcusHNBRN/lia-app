@include('nav.header')

@php
$students = DB::table('students')->get();
@endphp
<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />

@include('nav.galleryNav')

<div class="studentMain">
    @foreach ($students as $student)
    <div class="profileCard">
        <div class="profilePicture">BILDHÄR</div>
        <div class="firstDescriptionRow">
            <h3 class="studentWUorDD"> {{ $student->WU }} </h3>
            <p> skills: {{ $student->skills }} </p>
        </div>
        <div class="secondDescriptionRow">
            <h1 class="studentName"> {{ $student->studentName }} </h1>
            <p class="studentAge">25</p>
        </div>
    </div>

    @endforeach
</div>