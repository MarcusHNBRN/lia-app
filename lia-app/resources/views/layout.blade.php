<!DOCTYPE html>
<html lang="en">
@auth
@include('nav.header')
@else
@include('nav.headerIndex')
@endauth
</header>

<main>
    @yield('content')
</main>

<script src="{{ asset('js/sidenav.js') }}"></script>

<footer>
    @include('nav.footer')
</footer>
</body>

</html>