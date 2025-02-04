@include('nav.header')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
<link rel="stylesheet" href="{{ asset('css/registrering.css') }}" />
<main class="main.registration">
    <div class="edit-container">
        <a href="{{ route('company_dashboard', ['id' => Auth::guard('company')->user()->id]) }}"> <img src="/svgs/leftArrow.svg" alt="back">
            <a href="{{ route('company.profile.edit', ['id' => Auth::guard('company')->user()->id]) }}"><img class="gear" src="/svgs/gear.svg" alt="gear"></a>
    </div>
    <div class="profile">

        <div class="profile-picture-container">
            @if ($company->profile_picture)
            <img src="data:image/jpeg;base64,{{ base64_encode($company->profile_picture) }}" alt="Company Logo" class="profile-picture">
            @else
            <img src="/svgs/yrgo_logo_Y.svg" class="default-picture" alt="Profile Picture">
            @endif
        </div>

        <h3>{{ $company->companyName }}</h3>
        <h4>{{ $company->industry }}</h4>

        <div class="profile-info">
            <div class="profile-card">
                <h5>Om Företaget</h5>
                <p class="body2"> {{ $company->description }}</p>
            </div>

            <div class="profile-card">
                <h5>Vi erbjuder</h5>
                @if ($company->offer)
                <p class="body2"> {{ $company->offer }}</p>
                @endif
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
                        <button><a href="mailto:{{$company->email}}" class="buttonFont">{{ $company->email }}</a></button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('nav.footer')