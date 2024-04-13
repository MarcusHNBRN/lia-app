@include('nav.header')
<p>Hello, {{ $company->companyName }}!</p>
<a href="{{ route('logout') }}">Logout</a>


<a href="{{ route('company.profile', ['id' => Auth::guard('company')->user()->id]) }}">View Profile</a>