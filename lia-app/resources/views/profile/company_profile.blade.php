@include('nav.header')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
<div class="backButton"> <a href="{{ route('company_dashboard', ['id' => Auth::guard('company')->user()->id]) }}"> <img src="/svgs/leftArrow.svg" alt="back"> </a> </div>
@section ('sidenav')
<div id="mySidenav" class="sidenav">
    <div class="sidenav-logo" onclick="closeNav()">
        <img class="closebtn" src="/svgs/X.svg" alt="x">
    </div>
    <a href="/">Mina Sidor</a>
    <a href="/">Galleri</a>
    <a href="/">Skapa Annons</a>

    <a href="/">Logga ut</a>
</div>
@endsection
<div class="profile">
    <div class="edit-container">
        <a href="{{ route('company.profile.edit', ['id' => Auth::guard('company')->user()->id]) }}"><img class="gear" src="/svgs/gear.svg" alt="gear"></a>
    </div>
    <div class="profile-picture-container">
        @if ($company->profile_picture)
        <img src="data:image/jpeg;base64,{{ base64_encode($company->profile_picture) }}" alt="Company Logo" class="profile-picture">
        @else
        <img src="/svgs/yrgo_logo_Y.svg" class="profile-picture" alt="Profile Picture">
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
</div>
<script src="{{ asset('js/sidenav.js') }}"></script>
@include('nav.footer')