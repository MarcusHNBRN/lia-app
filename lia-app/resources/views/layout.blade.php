<!DOCTYPE html>
<html lang="en">
@include('nav.header')
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