<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />

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
                FIX BURGER
            </div>
        </div>

        <div class="desktop-headerContent">
            <div class="desktop-links">
                <img src="/svgs/YRGO_logo_red.svg" alt="yrgo" class="desktop-yrgo">
                <p class="desktop-subtitle2">LIA-Galleri</p>
                <p class="desktop-subtitle2">Branch eventet</p>
                <p class="desktop-subtitle2">Ledningsgruppen</p>
                <p class="desktop-subtitle2">Om oss</p>
            </div>
            <div class="desktop-svgsContainer">
                <div class="desktop-svgs">
                    <div class="desktop-profile desktop-subtitle2">
                        <img src="/svgs/you_in_black.svg">Profil
                    </div>
                </div>
                <div class="desktop-svgs">
                    <div class="desktop-logout desktop-subtitle2">
                        <img src="/svgs/logout.svg">Logga ut
                    </div>
                </div>
            </div>
        </div>
    </header>