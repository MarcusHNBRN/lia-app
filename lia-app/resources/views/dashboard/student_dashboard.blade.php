@include('nav.header')
<p>Hello, {{ $student->studentName }}!</p>
<a href="{{ route('logout') }}">Logout</a>

@if(Auth::guard('student')->check())
<a href="{{ route('profile.student_profile', ['id' => Auth::guard('student')->user()->id]) }}">View Profile</a>
@elseif(Auth::guard('company')->check())
<a href="{{ route('profile.company_profile', ['id' => Auth::guard('company')->user()->id]) }}">View Profile</a>
@endif