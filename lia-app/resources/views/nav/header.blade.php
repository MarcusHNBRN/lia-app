<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
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
            <div class="headerLeft">
                <!--<div class="homeButton"> <img src="/svgs/Home.svg" alt="home"> </div>
                <div class="accountButton"> <img src="/svgs/you.svg" alt="your account"> </div>
                <div class="settingsButton"> <img src="/svgs/Gear.svg" alt="settings"> </div>-->
                <div class="logo" onclick="openNav()" id="sidenav">
                    <img src="/svgs/HamMenu.svg" alt="hammenu">
                </div>
                @yield('sidenav')
            </div>
        </div>
    </header>
    <script src="{{ asset('js/sidenav.js') }}"></script>