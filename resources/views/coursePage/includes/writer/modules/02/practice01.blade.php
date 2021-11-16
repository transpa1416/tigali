@extends('coursePage.course')

@section('content')
<p><b>Bienvenido a la practica 02 titulada “Jugemos con estilos"</b></p>
<p>Por favor, sigue los siguientes pasos</p>

<ul class="list-group">
    {{-- Ejercicio 01 --}}
    <li class="list-group-item list-group-item-success">
        Ejercicio 01 Muestranos tus habilidades
    </li>
    <li class="list-group-item">
        <i class="fas fa-circle"></i> Descarga el archivo <a href={{ asset('downloads\writer\module02\practice\carta-a-mi-madre.odt') }} >Carta a mi madre</a>
     </li>
    <li class="list-group-item">
        <i class="fas fa-circle"></i> Esta es una práctica libre, modifica el documento, cambiale el color, el texto, agregale un encabezado, pero sobre todo ponle imaginación
    </li>
  </ul>
@endsection
