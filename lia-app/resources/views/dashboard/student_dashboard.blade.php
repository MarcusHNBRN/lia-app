@include('nav.header')
<p>Hello, {{ $student->studentName }}!</p>
<a href="{{ route('logout') }}">Logout</a>

@if(Auth::guard('student')->check())
<a href="{{ route('student.profile', ['id' => Auth::guard('student')->user()->id]) }}">View Profile</a>
@endif