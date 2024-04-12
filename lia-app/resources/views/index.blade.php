@include('nav.header')

<form method="POST" action="{{ route('login.submit') }}">
    @csrf
    <div>
        <label for="email">Email</label>
        <input name="email" id="email" type="email" />
    </div>
    <div>
        <label for="password">Password</label>
        <input name="password" id="password" type="password" />
    </div>
    <button type="submit">Login</button>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (session('error'))
    <div>{{ session('error') }}</div>
    @endif
</form>

<a href="/registration">Register</a>

<!-- Tillfälliga länkar så jag kommer åt sidorna: -->
<br><br><br>
<form action="{{ route('company.gallery') }}" method="GET">
    <button type="submit">företag</button>
</form>
<br>
<form action="{{ route('student.gallery') }}" method="GET">
    <button type="submit">elever</button>
</form>

@include('errors')

@include('nav.footer')