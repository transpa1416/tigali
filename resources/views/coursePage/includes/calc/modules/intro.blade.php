@extends('coursePage.includes.calc.course')

@section('content')
    <b>Bienvenidos al curso de Calc la hoja de cálculo de LibreOffice</b><br><br>

    <b>¿Que es una hoja de cálculo?</b> <p>Una hoja de cálculo es un programa para la manipulación de datos dispuestos en forma de tablas, con la finalidad de efectuar operaciones complejas con fórmulas y funciones</p>
    <b>Objetivo del curso:</b><p>El participante utilizará técnicas para la automatización de cálculos mediante fórmulas y funciones, además de representar información de manera gráfica para optimizar su presentación.</p>

    <b>Estructura del curso</b>
    <p>Con el fin de tener una mejor compresión en el curso impartido, el mismo esta dividido en las siguientes secciones</p>
    <ul>
        <a tabindex="0" id="writing" data-toggle="popover" data-trigger="focus" title="Información" data-content="">
            <li class="list-group-item list-group-item-info" style="width:25%;">
                <i class="fas fa-book-reader"></i> Lecturas
            </li>
            <li id="writing"><p>En esta sección se mostrarán lecturas, donde se explicará de forma clara la forma en cómo funciona Writer, así como consejos y tips para mejorar en la redacción de documentos.</p></li>
        </a>
        <a tabindex="0" id="films" data-toggle="popover" data-trigger="focus" title="Información" data-content="">
            <li class="list-group-item list-group-item-info" style="width:25%;">
                <i class="fas fa-film"></i> Videos
            </li>
            <li id="writing"><p>Sabiendo que la mejor forma de aprender un tema es mediante el uso herramienta audiovisuales, en estas secciones se proyectarán videos para una mejor comprensión de un tema en específico.</p></li>
        </a>
        <a tabindex="0" id="practice" data-toggle="popover" data-trigger="focus" title="Información" data-content="">
            <li class="list-group-item list-group-item-info" style="width:25%;">
                <i class="fas fa-edit"></i> Prácticas
            </li>
            <li id="writing"><p>Sección creada para los estudiantes, donde pondrán a prueba sus conocimientos (No es una evaluación pero es importante para pra cticar lo aprendido)</p></li>
        </a>
        <a tabindex="0" id="sessions" data-toggle="popover" data-trigger="focus" title="Información" data-content="En esta sección se mostrarán las sesiones tomadas con el instructor">
            <li class="list-group-item list-group-item-info" style="width:25%;">
                <i class="fas fa-video"></i> Sesiones grabadas
            </li>
            <li id="writing"><p>Al término de cada sesión se habilitará el acceso a la sesión de Zoom, para que los estudiantes que no hayan podido ingresar, puedan hacerlo posteriormente.</p></li>
        </a>
        <a tabindex="0" id="exams" data-toggle="popover" data-trigger="focus" title="Información" data-content="">
            <li class="list-group-item list-group-item-info" style="width:25%;">
                <i class="fas fa-diagnoses"></i> Examen Final
            </li>
            <li id="writing"><p>Al término del curso se realizará una evaluación final, en la cual será necesario obtener el 85% para acceder a la constancia del curso.</p></li>
        </a>
    </ul>
    <i class="fas fa-info-circle"></i> Durante la impartición del curso, día tras día se estarán habilitando, los temas, con la finalidad de crear una sana competencia, entre los etudiantes.
@endsection
