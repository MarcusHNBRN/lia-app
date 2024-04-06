@include('nav.header')

@php
$students = DB::table('students')->get();
@endphp

<main>
@foreach ($students as $student)
    <p> {{ $student->studentName }} </p>

@endforeach
</main>