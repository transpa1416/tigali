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
                    <a class="nav-link text-light" href="/">
                        <i class="fas fa-home"></i> T.I. Gali
                    </a>
                </li>
            </ul>
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  text-light" id="navUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-cog"></i> Nombre Usuario
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
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="wrapper" class="toggled">
            <!-- Sidebar -->
            <div id="sidebar-wrapper" class="scrollbar style-1">
                <div class="accordion" id="accordionWriter">
                    <div class="card">
                        <div class="card-header">Writer</div>
                    </div>
                    {{-- Sesiones Zoom --}}
                    <div class="card">
                        <h2 class="card-header" id="zoom">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapseZoom" aria-expanded="true" aria-controls="collapseZoom">
                                Sesiones Zoom (Proximamente...)
                            </button>
                        </h2>
                        {{-- <div id="collapseZoom" class="collapse" aria-labelledby="zoom" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc">
                                        <i class="fas fa-video"></i> Primera sesión
                                    </a>
                                </div>
                            </div>
                        </div> --}}
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
                        {{-- <div id="collapse3" class="collapse" aria-labelledby="writer3" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/03/styles">
                                        <i class="fas fa-book-reader"></i> Tipos de estilos
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- Finaliza Trabajando con estilos --}}
                    {{-- 4. Paginación e impresión --}}
                    <div class="card">
                        <h2 class="card-header" id="writer4">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Módulo 4: Paginación e impresión
                            </button>
                        </h2>
                        {{-- <div id="collapse4" class="collapse" aria-labelledby="writer4" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/04/formatPage">
                                        <i class="fas fa-book-reader"></i> Formato de página
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/04/headerFooter">
                                        <i class="fas fa-book-reader"></i> Encabezados y pies de página
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/04/printerOptions">
                                        <i class="fas fa-book-reader"></i> Opciones de impresión
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/04/exportToPDF">
                                        <i class="fas fa-book-reader"></i> Exportar a PDF
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc">
                                        <i class="fas fa-edit"></i> Prácticas "Reafirma tu conocimiento"
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- Finaliza Paginación e impresión --}}
                    {{-- 5. Imagenes y formas --}}
                    <div class="card">
                        <h2 class="card-header" id="writer5">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Módulo 5: Imagenes y formas
                            </button>
                        </h2>
                        {{-- <div id="collapse5" class="collapse" aria-labelledby="writer5" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/05/insertImage">
                                        <i class="fas fa-film"></i> Insertar y ajustar una imagen
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/05/imageLink">
                                        <i class="fas fa-book-reader"></i> Anclaje y ajuste de imagenes
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/05/applyEffect">
                                        <i class="fas fa-book-reader"></i> Aplicar efectos y recortar
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- Finaliza Imagenes y formas --}}
                    {{-- 6. Herramientas de revisión y autocorrección --}}
                    <div class="card">
                        <h2 class="card-header" id="writer6">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Módulo 6: Herramientas de revisión y autocorrección
                            </button>
                        </h2>
                        {{-- <div id="collapse6" class="collapse" aria-labelledby="writer6" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/06/spelingCorrection">
                                        <i class="fas fa-book-reader"></i> Corrección ortográfica y gramatical
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- Finaliza herramientas de revisión y autocorrección --}}
                    {{-- 7.	Tablas, columnas y secciones --}}
                    <div class="card">
                        <h2 class="card-header" id="writer7">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                Módulo 7: Gráficos
                            </button>
                        </h2>
                        {{-- <div id="collapse7" class="collapse" aria-labelledby="writer7" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/07/columnsSections">
                                        <i class="fas fa-film"></i> Columnas, saltos y secciones
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/07/createTable">
                                        <i class="fas fa-film"></i> Creación de tablas
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- Finaliza tablas, columnas y secciones --}}
                    {{-- 8.	Marcos y cuadros de texto --}}
                    <div class="card">
                        <h2 class="card-header" id="writer8">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                Módulo 8: Ordenación y filtrado
                            </button>
                        </h2>
                        {{-- <div id="collapse8" class="collapse" aria-labelledby="writer8" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/08/squareText">
                                        <i class="fas fa-book-reader"></i> Insertar y editar marcos
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- Finaliza Marcos y cuadros de texto --}}
                    {{-- 9. Vinculos y referencias --}}
                    <div class="card">
                        <h2 class="card-header" id="writer9">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                Módulo 9: Funciones avanzadas
                            </button>
                        </h2>
                        {{-- <div id="collapse9" class="collapse" aria-labelledby="writer9" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/09/hyperlink">
                                        <i class="fas fa-book-reader"></i> Crear hiperenlaces
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/09/crossReference">
                                        <i class="fas fa-book-reader"></i> Referencias cruzadas
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- Finaliza Vinculos y referencias --}}
                    {{-- 10. Herramientas de correspondencia --}}
                    <div class="card">
                        <h2 class="card-header" id="writer10">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                Módulo 10: Formatos condicionales
                            </button>
                        </h2>
                        {{-- <div id="collapse10" class="collapse" aria-labelledby="writer10" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/10/tags">
                                        <i class="fas fa-book-reader"></i> Asistente de etiquetas y tarjetas de visita
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/10/matchingTool">
                                        <i class="fas fa-book-reader"></i> Asistente para combinar correspondencia
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- Finaliza Herramientas de correspondencia --}}
                    {{-- 10. Herramientas de correspondencia --}}
                    <div class="card">
                        <h2 class="card-header" id="writer10">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                Módulo 11: Tablas dinámicas
                            </button>
                        </h2>
                        {{-- <div id="collapse10" class="collapse" aria-labelledby="writer10" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/10/tags">
                                        <i class="fas fa-book-reader"></i> Asistente de etiquetas y tarjetas de visita
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc/module/10/matchingTool">
                                        <i class="fas fa-book-reader"></i> Asistente para combinar correspondencia
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- Finaliza Herramientas de correspondencia --}}
                    {{-- Examen final --}}
                    <div class="card">
                        <h2 class="card-header" id="writer10">
                            <button class="btn text-left" data-toggle="collapse" data-target="#collapseExam" aria-expanded="false" aria-controls="collapseExam">
                                Evaluaciones y resultados
                            </button>
                        </h2>
                        {{-- <div id="collapseExam" class="collapse" aria-labelledby="writer10" data-parent="#accordionWriter">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc">
                                        <i class="fas fa-diagnoses"></i> Examen final
                                    </a>
                                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/course/calc">
                                        <i class="fas fa-poll-h"></i> Resultados
                                    </a>
                                </div>
                            </div>
                        </div> --}}
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