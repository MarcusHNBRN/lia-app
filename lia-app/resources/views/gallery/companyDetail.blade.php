@include('nav.header')

<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />
<link rel="stylesheet" href="{{ asset('css/profile.css') }}" />

<div class="backButton">
    <a href="{{ url()->previous() }}">
        <img src="/svgs/leftArrow.svg" alt="back">
    </a>
</div>

<div class="annons">
    <div class="annonsInfo">
        <p class="companyName subtitle1">{{ $company->companyName }}</p>
        <h5 class="workTitle">
            @if ($companyInfo && $companyInfo->study === 'WU')
                Webbutvecklare
            @elseif ($companyInfo && $companyInfo->study === 'DD')
                Digital Designer
            @else
                N/A
            @endif
        </h5>
        <div class="companyDetailPicture"> BILD HÄR </div>
        <h4 class="lookingFor">{{ $companyInfo ? $companyInfo->lookingFor : 'N/A' }}</h4>

        <div class="about">
            <h6>Om LIA:</h6>
            <p class="body2">{{ $companyInfo ? $companyInfo->description : 'N/A' }}</p>
            <div class="aboutButtons">
                <div class="applyForLia buttonFont">
                    <a href="{{ route('ApplyForLia', ['companyId' => $company->id]) }}"> ANSÖK NU! </a>
                </div>
                <div class="companyProfile buttonFont">
                    @auth
                        <a href="{{ route('company.profile', ['id' => Auth::guard('company')->user()->id]) }}">FÖRETAGETS PROFIL</a>
                    @endauth
                    <a href="/">LOGGA IN FÖR INFO</a>
                </div>
            </div>

            <h5 class="aboutTitles">Dina arbetsuppgifter</h5>
            <p class="subtitle2">{{ $companyInfo ? $companyInfo->yourJob : 'N/A' }}</p>
            <h5 class="aboutTitles">Vi erbjuder:</h5>
            <p class="subtitle2">{{ $companyInfo ? $companyInfo->offer : 'N/A' }}</p>
            <h5 class="aboutTitles">Din profil</h5>
            <p class="subtitle2">{{ $companyInfo ? $companyInfo->lookingFor : 'N/A' }}</p>
        </div>

        <div class="card-container">
            <div class="contact-card">
                <h5>Kontaktuppgifter</h5>
                <div class="top-row">
                    @if ($company->homepage)
                        <button><a href="{{ $company->homepage }}" class="buttonFont">Portfolio</a></button>
                    @endif
                    @if ($company->linkedin)
                        <button><a href="{{ $company->linkedin }}" class="buttonFont">LinkedIn</a></button>
                    @endif
                </div>
                <div class="mail">
                    @if ($company->email)
                        <button><a href="mailto:{{ $company->email }}" class="buttonFont">{{ $company->email }}</a></button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@include('nav.footer')
