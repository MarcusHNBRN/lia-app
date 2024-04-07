@include('nav.header')

@php
$students = DB::table('students')->get();
@endphp
<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />

<div class="studentOptions">
    <div class="backButton"> <img src="/svgs/Vector.svg" alt="back"> </div>

    <div class="filters">
        <div class="filterBar"> <img src="/svgs/search.svg" alt="search"> Sök efter företag, arbetsroll, etc</div>
        <div class="filterButton"> <img src="/svgs/filter.svg" alt="filter"> </div>
    </div>
</div>

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