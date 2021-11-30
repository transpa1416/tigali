<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Curso de Calc" />
        <meta name="author" content="mandixsoft" />
        <title>Curso Calc</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">
        <!-- Archivos Bootstrap Javascrip -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/courses/courses.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
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
                        @if(auth()->user())
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navUser">
                                <a class="dropdown-item" href="/dashboard">
                                    <i class="fas fa-chalkboard-teacher"></i> Mi aprendizaje
                                </a>
                                <a class="dropdown-item" href="/config">
                                    <i class="fas fa-cog"></i> Configuración de la cuenta
                                </a>
                                <a class="dropdown-item" href="/signout">
                                    <i class="fas fa-user-times"></i> Cerrar sesión
                                </a>
                            </div>
                        @else
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navUser">
                                <a class="dropdown-item" href="/login">
                                    <i class="fas fa-chalkboard-teacher"></i> Iniciar sesión
                                </a>
                            </div>
                        @endif
                    </li>
                </ul>
            </div>
        </nav>
        <div id="wrapper" class="toggled">
            <!-- Sidebar -->
            <div id="sidebar-wrapper" class="scrollbar style-1">
                <div class="accordion" id="accordionWriter">
                    <div class="card">
                        <div class="card-header">Calc</div>
                    </div>
                    {{-- Sesiones Zoom --}}
                    <div class="card">
                        <h2 class="card-header" id="zoom">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapseZoom" aria-expanded="true" aria-controls="collapseZoom">
                                Sesiones Zoom
                            </button>
                        </h2>
                        <div id="collapseZoom" class="collapse" aria-labelledby="zoom" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/zoom/24nov">
                                        <i class="fas fa-video"></i> Sesión del 24 de Noviembre del 2021
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/zoom/25nov">
                                        <i class="fas fa-video"></i> Sesión del 25 de Noviembre del 2021
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/zoom/26nov">
                                        <i class="fas fa-video"></i> Sesión del 26 de Noviembre del 2021
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Finaliza Sesiones Zoom --}}
                    {{-- 0. Elemento: Presentacion --}}
                    <div class="card">
                        <h2 class="card-header" id="writer0">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse0" aria-expanded="false" aria-controls="collapse0">
                                Introducción al curso
                            </button>
                        </h2>
                        <div id="collapse0" class="collapse" aria-labelledby="writer0" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc">
                                        <i class="fas fa-book-reader"></i> Presentación
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Finaliza elemento presentación --}}
                    {{-- 1. Entorno de trabajo --}}
                    <div class="card">
                        <h2 class="card-header" id="writer1">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                Módulo 1: Entorno de trabajo
                            </button>
                        </h2>
                        <div id="collapse1" class="collapse" aria-labelledby="writer1" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/01/introduction">
                                        <i class="fas fa-film"></i> Introducción
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/01/environment">
                                        <i class="fas fa-book-reader"></i> Componentes de calc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Finaliza Entorno de trabajo --}}
                    {{-- 2. Formato de texto --}}
                    <div class="card">
                        <h2 class="card-header" id="writer2">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Módulo 2: Edición de filas, columnas y hojas
                            </button>
                        </h2>
                        <div id="collapse2" class="collapse" aria-labelledby="writer2" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/02/basicFunctions">
                                        <i class="fas fa-book-reader"></i> Edición y otras características
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/02/practice">
                                        <i class="fas fa-film"></i> Ejercicio factura
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Finaliza Formato de texto --}}
                    {{-- 3. Trabajando con estilos --}}
                    <div class="card">
                        <h2 class="card-header" id="writer3">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Módulo 3: Funciones básicas
                            </button>
                        </h2>
                        <div id="collapse3" class="collapse" aria-labelledby="writer3" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/03/basicFunctions">
                                        <i class="fas fa-book-reader"></i> Funciones
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/03/practice">
                                        <i class="fas fa-film"></i> Ejercicio factura
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Finaliza Trabajando con estilos --}}
                    {{-- 4. Paginación e impresión --}}
                    <div class="card">
                        <h2 class="card-header" id="writer4">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Módulo 4: Paginación e impresión
                            </button>
                        </h2>
                        <div id="collapse4" class="collapse" aria-labelledby="writer4" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/04/page">
                                        <i class="fas fa-book-reader"></i> Páginación
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/04/formatPage">
                                        <i class="fas fa-book-reader"></i> Formato de página
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/04/practice">
                                        <i class="fas fa-film"></i> Ejercicio factura
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Finaliza Paginación e impresión --}}
                    {{-- 5. Imagenes y formas --}}
                    <div class="card">
                        <h2 class="card-header" id="writer5">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Módulo 5: Imagenes y formas
                            </button>
                        </h2>
                        <div id="collapse5" class="collapse" aria-labelledby="writer5" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/05/image">
                                        <i class="fas fa-book-reader"></i> Imagenes y formas
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/05/formatImage">
                                        <i class="fas fa-book-reader"></i> Aplicar formato a las imágenes
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/05/barImage">
                                        <i class="fas fa-book-reader"></i> Barra de imagen
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/05/practice">
                                        <i class="fas fa-film"></i> Ejercicio factura
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Finaliza Imagenes y formas --}}
                    {{-- 6. Herramientas de revisión y autocorrección --}}
                    <div class="card">
                        <h2 class="card-header" id="writer6">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Módulo 6: Herramientas de revisión y autocorrección
                            </button>
                        </h2>
                        <div id="collapse6" class="collapse" aria-labelledby="writer6" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/06/spelingCorrection">
                                        <i class="fas fa-book-reader"></i> Autocorrección y ortografía
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/06/practice">
                                        <i class="fas fa-film"></i> Ejercicio factura
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Finaliza herramientas de revisión y autocorrección --}}
                    {{-- 7.	Tablas, columnas y secciones --}}
                    <div class="card">
                        <h2 class="card-header" id="writer7">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                Módulo 7: Gráficos
                            </button>
                        </h2>
                        <div id="collapse7" class="collapse" aria-labelledby="writer7" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/07/graphs">
                                        <i class="fas fa-book-reader"></i> Tipos de gráficos
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/07/practice">
                                        <i class="fas fa-film"></i> Ejercicio factura
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Finaliza tablas, columnas y secciones --}}
                    {{-- 8.	Marcos y cuadros de texto --}}
                    <div class="card">
                        <h2 class="card-header" id="writer8">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                Módulo 8: Ordenación y filtrado
                            </button>
                        </h2>
                        <div id="collapse8" class="collapse" aria-labelledby="writer8" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/08/filter">
                                        <i class="fas fa-book-reader"></i> Ordenado y filtrado de información
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Finaliza Marcos y cuadros de texto --}}
                    {{-- 9. Vinculos y referencias --}}
                    <div class="card">
                        <h2 class="card-header" id="writer9">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                Módulo 9: Funciones avanzadas
                            </button>
                        </h2>
                        <div id="collapse9" class="collapse" aria-labelledby="writer9" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/09/advancedFunctions">
                                        <i class="fas fa-book-reader"></i> Funciones avanzadas
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/09/logic">
                                        <i class="fas fa-book-reader"></i> Expresiones lógicas
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Finaliza Vinculos y referencias --}}
                    {{-- 10. Herramientas de correspondencia --}}
                    <div class="card">
                        <h2 class="card-header" id="writer10">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                Módulo 10: Formatos condicionales
                            </button>
                        </h2>
                        <div id="collapse10" class="collapse" aria-labelledby="writer10" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/10/conditional">
                                        <i class="fas fa-book-reader"></i> Formatos condicionales
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Finaliza Herramientas de correspondencia --}}
                    {{-- 10. Herramientas de correspondencia --}}
                    <div class="card">
                        <h2 class="card-header" id="writer10">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                Módulo 11: Tablas dinámicas
                            </button>
                        </h2>
                        <div id="collapse11" class="collapse" aria-labelledby="writer11" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/11/dinamic">
                                        <i class="fas fa-book-reader"></i> Tablas dinámicas
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Finaliza Herramientas de correspondencia --}}
                    {{-- Examen final --}}
                    <div class="card">
                        <h2 class="card-header" id="writer10">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapseExam" aria-expanded="false" aria-controls="collapseExam">
                                Evaluaciones y resultados
                            </button>
                        </h2>
                        <div id="collapseExam" class="collapse" aria-labelledby="writer10" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/finalEvaluation">
                                        <i class="fas fa-diagnoses"></i> Examen final
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Finaliza Examen final --}}
                </div>
            </div>
            <!-- /#sidebar-wrapper -->
            <!-- main Content -->
                <main>
                    <div class="container-fluid vh-100">
                        <div class="paper">
                            <div class="paper-content paper-content-textarea scrollbar style-1">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </main>
            <!-- /#main-content -->
        </div>
    </body>
</html>
