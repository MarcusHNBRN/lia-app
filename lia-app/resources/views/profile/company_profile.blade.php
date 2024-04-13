@include('nav.header')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}" />

<div class="profile">
    @if ($company->profile_picture)
    <img src="data:image/jpeg;base64,{{ base64_encode($company->profile_picture) }}" alt="Company Logo" class="profile-picture">
    @else
    <p>No profile picture available</p>
    @endif

    <h1>{{ $company->companyName }}</h1>
    <p>{{ $company->industry }}</p>

    <div class="profile-info">
        <div class="profile-card">
            <p><strong>Description:</strong> {{ $company->description }}</p>
        </div>

        @if ($company->linkedin)
        <div class="profile-card">
            <button><a href="{{ $company->linkedin }}" class="btn btn-primary">LinkedIn</a></button>
        </div>
        @endif

        @if ($company->homepage)
        <div class="profile-card">
            <button><a href="{{ $company->homepage }}" class="btn btn-primary">Homepage</a></button>
        </div>

        @if ($company->email)
        <button> <a href="mailto:{{ $company->email }}" class="btn btn-primary"> {{ $company->email }} </a> </button>
        @endif
        @endif
    </div>
</div>