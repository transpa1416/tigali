<!doctype html>
<html lang="es">
<head>
    @include('homePage.includes.head')
</head>

<body>
    <header>
        @include('homePage.includes.header')
    </header>
    <main>
        <div class="">
            <br>
            @yield('content')
        </div>
        <footer class="container">
            @include('homePage.includes.footer')
        </footer>
    </main>
</html>
