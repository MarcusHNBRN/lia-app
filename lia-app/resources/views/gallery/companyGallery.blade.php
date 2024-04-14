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
            <p class="studentWUorDD subtitle1">
                    <!--- @if ($companyInfos[$company->id]->study === 'WU')
                    Webbutvecklare
                    @elseif ($companyInfos[$company->id]->study === 'DD')
                    Digital Designer
                    @else
                    N/A
                    @endif --->
                    {{ $companyInfos[$company->id]->study }}

                </p>
                <h6 class="commpanySpots"> {{ $companyInfos[$company->id]->availableSpots }} <img src="/svgs/people.svg" alt="spots"> </h6>
            </div>
        </a>
    </div>
    @endforeach
</div>

@include('nav.footer')