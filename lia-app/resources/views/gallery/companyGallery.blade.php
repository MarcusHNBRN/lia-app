@include('nav.header')

<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />

@include('nav.galleryNav')

<div class="companyMain">
    @foreach ($companies as $company)
    <div class="companyCard">
        <a href="{{ route('company.detail', ['companyId' => $company->id]) }}">
            <div class="companyPicture">BILDHÄR</div>
            <div class="firstDescriptionRow">
                <p class="companyName"> {{ $company->companyName }} </p>
                <p> SKILLS </p>
            </div>
            <div class="secondDescriptionRow">
                <h1> WU eller DD </h1>
                <h6 class="commpanySpots"> 3 <img src="/svgs/people.svg" alt="spots"> </h6>
            </div>
        </a>
    </div>
    @endforeach
</div>

@include('nav.footer')