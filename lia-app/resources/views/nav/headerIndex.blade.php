<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="headerContent">
            <div class="headerRight">
                <div class="yrgoHeader"> <img src="/svgs/YRGO_logo_white.svg" alt="yrgo">
                </div>
            </div>
            <div class="headerLeft">
                <div class="signIn"> LOG IN </div>

            </div>
        </div>
    </header>

    <div class="loginContainer">
        <div class="loginNav">
            <h5>Logga in</h5>
            <div class="loginForm" id="loginForm">
                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <div class="loginFields body1">
                        <label for="email">E-mail *</label>
                        <input name="email" id="email" type="email" placeholder="E-mail"/>
                    </div>
                    <div class="loginFields body1">
                        <label for="password">Lösenord</label>
                        <input name="password" id="password" type="password" placeholder="********"/>
                    </div>
                    <div class="buttonAndErrorField">
                        <button type="submit" class="loginButton buttonFont">Logga in</button>
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
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/js/login.js"></script>