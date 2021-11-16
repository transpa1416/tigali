@extends('coursePage.course')

@section('content')
    <b>Bienvenidos al curso de Writer el procesador de texto de LibreOffice</b><br><br>

    <b>¿Que es un procesador de texto?</b> <p>Un procesador de texto es una aplicación informática que permite crear y editar documentos de texto en una computadora. Se trata de un software de múltiples funcionalidades para la redacción, con diferentes tipografías, tamaños de letra, colores, tipos de párrafos, efectos artísticos y otras opciones.</p>
    <b>Objetivo del curso:</b><p>El objetivo del curso es lograr que el estudiante aprenda las herramientas y opciones que tiene Writer, para poder redactar documentos de forma rápida.</p>

    <b>Estructura del curso</b>
    <p>Con el fin de tener una mejor compresión en el curso impartido, el mismo esta dividido en las siguientes secciones</p>
    <ul>
        <a tabindex="0" id="writing" data-toggle="popover" data-trigger="focus" title="Información" data-content="">
            <li class="list-group-item list-group-item-info" style="width:15%;">
                <i class="fas fa-book-reader"></i> Lecturas
            </li>
            <li id="writing"><p>En esta sección se mostrarán lecturas, donde se explicará de forma clara la forma en como funciona Writer, así como consejos y tips para mejorar en la redacción de documentos.</p></li>
        </a>
        <a tabindex="0" id="films" data-toggle="popover" data-trigger="focus" title="Información" data-content="">
            <li class="list-group-item list-group-item-info" style="width:15%;">
                <i class="fas fa-film"></i> Videos
            </li>
            <li id="writing"><p>Sabiendo que la mejor forma de aprender un tema es mediante el uso herramienta audioviduales, en estas secciones se proyectarán videos para una mejor comprensión de un tema en especifico.</p></li>
        </a>
        <a tabindex="0" id="practice" data-toggle="popover" data-trigger="focus" title="Información" data-content="">
            <li class="list-group-item list-group-item-info" style="width:15%;">
                <i class="fas fa-edit"></i> Prácticas
            </li>
            <li id="writing"><p>Sección creada para los estudiantes, donde pondrán a prueba sus conocimientos (No es una evaluación pero es importante para prácticar lo aprendido)</p></li>
        </a>
        <a tabindex="0" id="sessions" data-toggle="popover" data-trigger="focus" title="Información" data-content="En esta sección se mostrarán las sesiones tomadas con el instructor">
            <li class="list-group-item list-group-item-info" style="width:15%;">
                <i class="fas fa-video"></i> Sesiones grabadas
            </li>
            <li id="writing"><p>Al termino de cada sesión se habilitará el acceso a la sesión de Zoom, para que los estudiantes que no hallan podido ingresar, puedan hacerlo posteriormente.</p></li>
        </a>
        <a tabindex="0" id="exams" data-toggle="popover" data-trigger="focus" title="Información" data-content="">
            <li class="list-group-item list-group-item-info" style="width:15%;">
                <i class="fas fa-diagnoses"></i> Examenn Final
            </li>
            <li id="writing"><p>Al termino del curso se realizará una evaluación final, en la cual será necesario obtener el 85% para acceder al certificado.</p></li>
        </a>
    </ul>
    <i class="fas fa-info-circle"></i> Durante la impartición del curso, día tras día se estarán habilitando, los temas, con la finalidad de crear una sana competencia, entre los etudiantes.
@endsection
