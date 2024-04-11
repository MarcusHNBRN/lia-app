@include('nav.header')
<p>Hello, {{ $user->name }}!</p>
<a href="{{ route('logout') }}">Logout</a>
<a href="{{ route('profile', ['id' => $user->id]) }}">View Profile</a>