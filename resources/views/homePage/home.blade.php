<!doctype html>
<html lang="es">
<head>
    @include('homePage.includes.head')
</head>

<body>
    <header>
        @include('homePage.includes.header')
    </header>
    <main role="main">
        @include('homePage.includes.carrousel')
        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <hr class="featurette-divider">
        @include('homePage.includes.courses')
        <hr class="featurette-divider">
        <div class="container">
            <!-- begin Gmaps -->
            <div class="embed-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2696.489109582515!2d-96.75094414372195!3d17.101416814146575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c721e1fe3a3caf%3A0x14ed8f8e3ed16bbd!2sC.%2019%20de%20Enero%20128%2C%20Col%20del%20Maestro%2C%2068010%20Oaxaca%20de%20Ju%C3%A1rez%2C%20Oax.!5e0!3m2!1ses-419!2smx!4v1635646927255!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div><!-- end Gmaps -->
        </div><!-- /.container -->
        <hr class="featurette-divider">
        <!-- FOOTER -->
        <footer class="container">
            @include('homePage.includes.footer')
        </footer>
    </main>
</html>
