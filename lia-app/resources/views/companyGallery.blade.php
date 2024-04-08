@include('nav.header')

@php
$companies = DB::table('companies')->get();
@endphp

<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />

@include('nav.galleryNav')

<div class="companyMain">
    @foreach ($companies as $company)
    <div class="companyCard">
        <div class="companyPicture">BILDHÄR</div>
        <div class="firstDescriptionRow">
            <p class="companyName"> {{ $company->companyName }} </p>
        </div>
        <div class="secondDescriptionRow">
            <h1>Företag</h1>
            <h6 class="commpanySpots"> 3 <img src="/svgs/people.svg" alt="spots"> </h6>
        </div>
    </div>
    @endforeach
</div>