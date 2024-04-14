@include('nav.header')
<p>Hello, {{ $company->companyName }}!</p>
<a href="{{ route('logout') }}">Logout</a>

@if(Auth::guard('company')->check())
<a href="{{ route('company.profile', ['id' => Auth::guard('company')->user()->id]) }}">View Profile</a>
@endif