@extends('coursePage.course')

@section('content')
    Bienvenidos al curso de Writer

    Con el fin de tener una mejor compresión en el curso impartido, el mismo esta dividido en las siguientes secciones
    <ul>
        <a tabindex="0" id="writing" data-toggle="popover" data-trigger="focus" title="Información" data-content="En esta sección se mostrarán lecturas, donde se explicará el funcionamiento">
            <li class="list-group-item list-group-item-info" style="width:15%;">
                <i class="fas fa-book-reader"></i> Lecturas
            </li>
        </a>
        <a tabindex="0" id="films" data-toggle="popover" data-trigger="focus" title="Información" data-content="Se mostrarán videos explicando un tema en especifico">
            <li class="list-group-item list-group-item-info" style="width:15%;">
                <i class="fas fa-film"></i> Videos
            </li>
        </a>
        <a tabindex="0" id="practice" data-toggle="popover" data-trigger="focus" title="Información" data-content="Prácticas que el estudiante deberá realizar">
            <li class="list-group-item list-group-item-info" style="width:15%;">
                <i class="fas fa-edit"></i> Prácticas
            </li>
        </a>
        <a tabindex="0" id="exams" data-toggle="popover" data-trigger="focus" title="Información" data-content="Al termino de cada sección se contestará una prueba de práctica para corroborar sus conocimientos">
            <li class="list-group-item list-group-item-info" style="width:15%;">
                <i class="fas fa-diagnoses"></i> Examenes
            </li>
        </a>
        <a tabindex="0" id="sessions" data-toggle="popover" data-trigger="focus" title="Información" data-content="En esta sección se mostrarán las sesiones tomadas con el instructor">
            <li class="list-group-item list-group-item-info" style="width:15%;">
                <i class="fas fa-video"></i> Sesiones grabadas
            </li>
        </a>
    </ul>
    <i class="fas fa-info-circle"></i> Click para ver la descripción
@endsection
