@include('nav.header')

<h1>{{ $profileType }} Profile</h1>
    @if ($profileType === 'Student')
        <p>Name: {{ $profile->studentName }}</p>
        <p>Email: {{ $profile->email }}</p>
        
    @elseif ($profileType === 'Company')
        <p>Name: {{ $profile->companyName }}</p>
        <p>Email: {{ $profile->companyEmail }}</p>
       
    @endif