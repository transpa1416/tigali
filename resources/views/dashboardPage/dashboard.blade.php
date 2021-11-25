<!DOCTYPE html>
<html lang="es">
<html>
    <head>
        @include('homePage.includes.head')
    </head>

    <body>
        <nav class="navbar navbar-expand-md fixed-top bg-secondary" navbar-scroll="true">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" href="/dashboard">
                        <i class="fas fa-home"></i> T.I. Gali
                    </a>
                </li>
            </ul>
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  text-light" id="navUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-cog"></i> @if(auth()->user()) {{ Auth::user()->name }} @else Nombre Usuario @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navUser">
                            <a class="dropdown-item" href="/listCourses">
                                <i class="fas fa-chalkboard-teacher"></i> Mi aprendizaje
                            </a>
                            <a class="dropdown-item" href="/config">
                                <i class="fas fa-cog"></i> Configuración de la cuenta
                            </a>
                            <a class="dropdown-item" href="/">
                                <i class="fas fa-user-times"></i> Cerrar sesión
                            </a>
                            {{-- @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                                </li>
                            @endguest --}}
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <br/>
        <h2> Cursos disponibles </h2>
        <div class="container-fluid">
            <!-- Card -->
            <div class="card card-image" style="background-image: url(https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg); background-repeat: no-repeat; background-size: 100% auto;">
                <!-- Content -->
                <div class="rgba-black-strong py-5 px-4">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-10 col-xl-8">
                            <!--Accordion wrapper-->
                            <div class="accordion md-accordion accordion-5" id="accordionEx5" role="tablist" aria-multiselectable="true">
                                <!-- Accordion card -->
                                <div class="card mb-4">
                                    <!-- Card header -->
                                    <div class="card-header p-0 z-depth-1"  role="tab" id="heading30">
                                        <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse30" aria-expanded="true"aria-controls="collapse30">
                                            <svg class="bd-placeholder-img rounded-circle" width="60" height="60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 40x40">
                                                <image href="{{ asset('images/homepage/courses_logo/Writer.png') }}" height="60" width="60"/>
                                            </svg>
                                            Writer
                                        </a>
                                    </div>
                                    <!-- Card body -->
                                    <div id="collapse30" class="collapse show" role="tabpanel" aria-labelledby="heading30" data-parent="#accordionEx5">
                                        <div class="card-body rgba-black-light white-text z-depth-1">
                                            <p class="card-text">LibreOffice Writer es el componente procesador de texto de código abierto del paquete de software LibreOffice, que compite con el MS Word y que esta en rápido crecimiento en el mundo. Cada vez son más las personas como tú desean aprender de él y más si es en muy corto tiempo</p>
                                            <p class="card-text"><a class="btn btn-secondary" href="/course/writer" role="button">Ingresar</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
                                <!-- Accordion card -->
                                <div class="card mb-4">
                                    <!-- Card header -->
                                    <div class="card-header p-0 z-depth-1" role="tab" id="heading31">
                                        <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse31" aria-expanded="true" aria-controls="collapse31">
                                            <svg class="bd-placeholder-img rounded-circle" width="60" height="60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 40x40">
                                                <image href="{{ asset('images/homepage/courses_logo/Calc.png') }}" height="60" width="60"/>
                                            </svg>
                                            Calc
                                        </a>
                                    </div>
                                    <!-- Card body -->
                                    <div id="collapse31" class="collapse" role="tabpanel" aria-labelledby="heading31" data-parent="#accordionEx5">
                                        <div class="card-body rgba-black-light white-text z-depth-1">
                                            <p class="card-text">El curso de Libreoffice Calc para principiantes es sobre como aprender a usar una hoja de cálculo de manera fácil y aplicar lo aprendido en la vida diaria a través de ejemplos prácticos y sencillos. El curso es específicamente sobre el Libreoffice Calc, la hoja de cálculo que hace parte de la suite de herramientas de oficina de software libre, Libreoffice</p>
                                            <p class="card-text"><a class="btn btn-secondary" href="/course/calc" role="button">Ingresar</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
                            </div>
                            <!--/.Accordion wrapper-->
                        </div>
                    </div>
                </div>
                <!-- Content -->
            </div>
            <!-- Card -->
        </div>


        @yield('content')

    </body>

</html>
