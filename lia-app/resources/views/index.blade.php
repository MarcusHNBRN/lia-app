@include('nav.header')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />


<main>
    <div class="welcomeContainer">
        <div class="yrgo"> <img src="/svgs/YRGO_logo_Y.svg" alt="yrgo"> </div>
        <h1 class="welcomeMessage"> Välkommen till Yrgos LIA portal! </h1>
        <div class="createAccountButton"> <a href="/registration">SKAPA KONTO</a> </div>
        <div class="companyGalleryButton">
            <form action="{{ route('company.gallery') }}" method="GET">
                <button type="submit" class="button">FÖRETAGS-GALLERI</button>
            </form>
        </div>
    </div>

    <div class="branscheventContainer">
        
    </div>


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

    <!-- Tillfälliga länkar så jag kommer åt sidorna: -->
    <br><br><br>
    <form action="{{ route('student.gallery') }}" method="GET">
        <button type="submit">elever</button>
    </form>
</main>

@include('errors')

@include('nav.footer')