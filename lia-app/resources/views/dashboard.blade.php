@include('nav.header')

<p>Hello, {{ $user->name }}!</p>
<a href="{{ route('logout') }}">Logout</a>
<div>
    @if(auth()->user()->isStudent())
    <a href="{{ route('student.profile', ['id' => auth()->user()->student->id]) }}">View Profile</a>
    @elseif(auth()->user()->isCompany())
    <a href="{{ route('company.profile', ['id' => auth()->user()->company->id]) }}">View Profile</a>
    @endif
</div>