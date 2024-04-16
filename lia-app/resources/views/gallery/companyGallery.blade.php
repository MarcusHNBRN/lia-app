@include('nav.header')

<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />

@include('nav.galleryNav')

<div class="companyMain">
@foreach ($companies as $company)
    <div class="companyCard galleryCard">
        <a href="{{ route('company.detail', ['companyId' => $company->id]) }}">
            <div class="companyPicture">
                @if($companyInfos[$company->id] && $companyInfos[$company->id]->study === 'WU')
                    <img src="/img/Annons_bild_wu.png" alt="Webbutveckling" class="wuImage">
                @elseif($companyInfos[$company->id] && $companyInfos[$company->id]->study === 'DD')
                    <img src="/img/Annons_bild_dd.png" alt="Digital Design" class="ddImage">
                @endif
            </div>
            <div class="compFirstDescriptionRow">
                <p class="companyName subtitle1"> {{ $company->companyName }} </p>
                <p class="captionFont">
                    @if($companyInfos[$company->id])
                        @if($companyInfos[$company->id]->study === 'WU')
                            CSS JavaScript HTML
                        @elseif($companyInfos[$company->id]->study === 'DD')
                            UX UI Motion
                        @endif
                    @endif
                </p>
            </div>
            <div class="compSecondDescriptionRow">
                <h5 class="studentWUorDD">
                    @if ($companyInfos[$company->id])
                        @if ($companyInfos[$company->id]->study === 'WU')
                            Webbutvecklare
                        @elseif ($companyInfos[$company->id]->study === 'DD')
                            Digital Designer
                        @else
                            N/A
                        @endif
                    @endif
                </h5>
                <div style="padding-bottom: 8px;">
                    @if ($companyInfos[$company->id])
                        <h6 class="commpanySpots"> {{ $companyInfos[$company->id]->availableSpots }} <img src="/svgs/people.svg" alt="spots"> </h6>
                    @endif
                </div>
            </div>
        </a>
    </div>
@endforeach

</div>

@include('nav.footer')