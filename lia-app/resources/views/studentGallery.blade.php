@include('nav.header')

@php
$students = DB::table('students')->get();
@endphp
<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />

<div class="studentMain">
@foreach ($students as $student)
<div class="profileCard">
    <p> {{ $student->studentName }} </p>
    <p> {{ $student->WU }} </p>
    <p>sKILLS:</p>
    <p> {{ $student->skills }} </p>
</div>

@endforeach
</div>