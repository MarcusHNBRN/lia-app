@include('nav.header')

<form action='/login' method="post">
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
</form>

<a href="/registration">Register</a>

<!-- Tillfälliga länkar så jag kommer åt sidorna: -->
<br><br><br>
<form action="{{ route('company.gallery') }}" method="GET">
    <button type="submit">företag</button>
</form>

@include('errors')
