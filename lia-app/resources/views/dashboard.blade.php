@include('nav.header')
<p>Hello, {{ $user->name }}!</p>
<a href="{{ route('logout') }}">Logout</a>

@if ($studentLiaInfo->profile_picture)
<img src="data:image/jpeg;base64,{{ base64_encode($studentLiaInfo->profile_picture) }}" alt="Profile Picture">
@endif