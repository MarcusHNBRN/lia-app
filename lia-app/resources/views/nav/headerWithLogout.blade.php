<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sidenav.css') }}" />
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
            <button class="openbtn"><img src="/svgs/HamMenu.svg" alt="hammenu"></button>

            <div class="sidenav" id="mySidenav">
                <div class="red">
                    <button class="closebtn"><img src="/svgs/X.svg" alt="x"></button>
                </div>
                @if(Auth::guard('student')->check())
                <a href="{{ route('student.profile', ['id' => Auth::guard('student')->user()->id]) }}">
                    <p class="body1">Mina sidor</p>
                </a>
                <a href="{{ route('student.gallery', ['id' => Auth::guard('student')->user()->id]) }}">
                    <p class="body1">Galleri</p>
                </a>
                @elseif(Auth::guard('company')->check())
                <a href="{{ route('company.profile', ['id' => Auth::guard('company')->user()->id]) }}">
                    <img src="/svgs/you_in_black.svg" class="icon" alt="Gallery icon">Mina sidor
                </a>
                <a href="{{ route('company.gallery', ['id' => Auth::guard('company')->user()->id]) }}">
                    <img src="/svgs/ImagesSquare.svg" class="icon" alt="Gallery icon">Galleri
                </a>
                @endif

                <a class="logout" href="{{ route('logout') }}">
                    <img src="/svgs/logout.svg" class="icon" alt="Gallery icon">Logga ut
                </a>
            </div>

    </header>
    <script src="{{ asset('js/sidenav.js') }}"></script>