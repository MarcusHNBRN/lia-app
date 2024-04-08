@include('nav.header')

@php
$companies = DB::table('companies')->get();
@endphp

<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />

@include('nav.galleryNav')