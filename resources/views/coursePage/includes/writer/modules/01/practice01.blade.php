@extends('coursePage.course')

@section('content')
<p><b>Bienvenido a la practica 01 titulada “Conociendo el entorno de trabajo"</b></p>
<p>Por favor, sigue los siguientes pasos</p>

<ul class="list-group">
    {{-- Ejercicio 01 --}}
    <li class="list-group-item list-group-item-success">
        Ejercicio 01 Juega sin miedo.
    </li>
    <li class="list-group-item">
        <i class="fas fa-circle"></i> Pulsa sobre algunos menús y observa como se despliegan sus diferentes opciones.
    </li>
    <li class="list-group-item">
        <i class="fas fa-circle"></i> Identifica las barras de herramientas Estándar y Formato.  Activa y desactiva algunas otras barras de herramientas desde el menú Ver > Barras de herramientas.  En este momento no importa si no conoces su utilidad.
    </li>
    <li class="list-group-item">
        <i class="fas fa-circle"></i> Pulsa sobre diferentes iconos de la Barra lateral y comprueba como cambian las herramientas que se muestran en el Panel lateral.
    </li>
    {{-- Ejercicio 02 --}}
    <li class="list-group-item list-group-item-success">
        Ejercicio 02 Creemos documentos.
    </li>
    <li class="list-group-item">
        <i class="fas fa-circle"></i> Inicia el programa LibreOffice y pulsa sobre Documento de Writer.
    </li>
    <li class="list-group-item">
       <i class="fas fa-circle"></i> En el nuevo documento, pulsa sobre el botón Nuevo de la barra de herramientas Estándar.
    </li>
    <li class="list-group-item">
        <i class="fas fa-circle"></i> En el nuevo documento creado, selecciona Archivo > Nuevo > Documento de texto.
    </li>
    <li class="list-group-item">
        <i class="fas fa-circle"></i> Pulsa la combinación de teclas Ctrl+U.
    </li>
    {{-- Ejercicio 03 --}}
    <li class="list-group-item list-group-item-success">
        Ejercicio 03 Guardemos y abramos documentos
    </li>
    <li class="list-group-item">
        <i class="fas fa-circle"></i> Crea un nuevo documento de Writer e introduce cualquier texto.
    </li>
    <li class="list-group-item">
       <i class="fas fa-circle"></i> Guarda el documento con el nombre Primeras prácticas.odt y cierralo.
    </li>
    <li class="list-group-item">
        <i class="fas fa-circle"></i> Abre el documento Primeras prácticas.odt editalo y guárdalo de nuevo, pero cambiando su nombre a Más prácticas.odt.
    </li>
    <li class="list-group-item">
        <i class="fas fa-circle"></i> Excelente, hemos terminado
    </li>
    {{-- Ejercicio 04 --}}
    <li class="list-group-item list-group-item-success">
        Ejercicio 04 Jugaremos "Piedra, Papel o Tijera"
    </li>
    <li class="list-group-item">
        <i class="fas fa-circle"></i> Juan Gabriel necesita tu ayuda, está en pleno concierto y no se sabe la canción
    </li>
    <li class="list-group-item">
       <i class="fas fa-circle"></i> Descarga el archivo <a href={{ asset('downloads\writer\module01\practice\el-noa-noa.odt') }} >El Noa noa</a>
    </li>
    <li class="list-group-item">
        <i class="fas fa-circle"></i> Ordena la canción, copiando y pegando las estrofas, para que quede como se muestra a continuación
    </li>
    <li class="list-group-item">
        Cuándo quieras tu, divertirte más <br>
        Y bailar sin fin, yo sé de un lugar <br>
        Que te llevaré <br>
        (Vamos al noa) <br>
        Y disfrutarás <br>
        (Vamos al noa) <br>
        De una noche que nunca olvidarás <br>
        ¿Quieres bailar esta noche? <br>
        Vamos al noa, noa, noa <br>
        Noa, noa, noa, noa, noa <br>
        Noa, noa, noa vamos a bailar <br>
        Vamos al noa, noa, noa <br>
        Noa, noa, noa, noa, noa <br>
        Noa, noa, noa vamos a bailar <br>
        Este es un lugar de ambiente donde todo es diferente <br>
        Donde siempre alegremente bailarás toda la noche ahí <br>
        Este es un lugar de ambiente donde todo es diferente <br>
        Donde siempre alegremente bailarás toda la noche ahí <br>
        Esta noche te invito a bailar esta noche mi amor <br>
        ¿Quieres bailar esta noche? <br>
        Vamos al noa, noa, noa <br>
        Noa, noa, noa, noa, noa <br>
        Noa, noa, noa vamos a bailar <br>
        Vamos al noa, noa, noa <br>
        Noa, noa, noa, noa, noa <br>
        Noa, noa, noa vamos a bailar <br>
        Vamos al noa, noa, noa <br>
        Noa, noa, noa, noa, noa <br>
        Noa, noa, noa vamos a bailar <br>
        Vamos al noa, noa, noa <br>
        Noa, noa, noa, noa, noa <br>
        Noa, noa, noa vamos a bailar <br>
        Vamos al noa, noa, noa <br>
        Vamos al noa a bailar <br>
        Vamos al noa, noa, noa <br>
        Vamos al noa a bailar <br>
    </li>
  </ul>
@endsection
