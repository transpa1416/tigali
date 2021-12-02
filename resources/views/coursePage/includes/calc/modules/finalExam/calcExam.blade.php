@extends('coursePage.course')

@section('content')
<main>
    <div class="cotainer">
        <div class="card">
            <h3 class="card-header text-center">Bienvenido al de examen Calc</h3>
            @if(session()->has('errorValidate'))
                <div class="alert alert-danger">
                    {{ session()->get('errorValidate') }}
                </div>
            @endif
            <h4 class="text-center"> Tienes {{ $count }} /3 intentos para obtener el certificado </h4>
            <div class="card-body">
                <form method="POST" action="{{ route('calc.Exam.evaluate') }}">
                    @csrf
                    {{-- Pregunta 1 --}}
                    <div class="card">
                        <div class="card-header">
                            1.- ¿Cómo se le llama a los documentos en Libre Office Calc?
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc01" id="qc01" value="A">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) Hojas de calculo</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc01" id="qc01" value="B">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) Libros de datos</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc01" id="qc01" value="C">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) Documentos de Calc</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc01" id="qc01" value="D">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) Calc </p>
                        </div>
                    </div>
                    <br/>
                    {{-- Pregunta 2 --}}
                    <div class="card">
                        <div class="card-header">
                            2.- ¿Cuál es la combinación de teclas para abrir una hoja existente?
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc02" id="qc02" value="A">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) Ctrl + B</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc02" id="qc02" value="B">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) Ctrl + G</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc02" id="qc02" value="C">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) Ctrl + X</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc02" id="qc02" value="D">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) Ctrl + A</p>
                        </div>
                    </div>
                    <br/>
                    {{-- Pregunta 3 --}}
                    <div class="card">
                        <div class="card-header">
                            3.- Para crear una lista personalizada accedemos al menú
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc03" id="qc03" value="A">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) Archivo / Opciones / Calc /</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc03" id="qc03" value="B">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) Herramientas / Diseño / Crear /</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc03" id="qc03" value="C">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) Herramientas / Opciones / LibreOffice / Calc / Lista de ordenamiento</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc03" id="qc03" value="D">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) Herramientas / Opciones / LibreOffice / Calc / Lista de ordenadores</p>
                        </div>
                    </div>
                    <br/>
                    {{-- Pregunta 4 --}}
                    <div class="card">
                        <div class="card-header">
                            4.- ¿Cómo ocultar filas?
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc04" id="qc04" value="A">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) Selecciona desde el menú Formato / Filas / Ocultar para las filas</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc04" id="qc04" value="B">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) Seleccionar desde el menú Formato / Ocultar / Ocultar fila </p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc04" id="qc04" value="C">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) Ctrl + F</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc04" id="qc04" value="D">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) Archivo /Formato / Ocultar / Filas columnas / </p>
                        </div>
                    </div>
                    <br/>
                    {{-- Pregunta 5 --}}
                    <div class="card">
                        <div class="card-header">
                            5.- En la pestaña fondo ¿Cómo se le llama al cuadro de colores?
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc05" id="qc05" value="A">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) Lista de colores</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc05" id="qc05" value="B">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) Paleta de colores</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc05" id="qc05" value="C">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) Colores</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc05" id="qc05" value="D">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) RGB</p>
                        </div>
                    </div>
                    <br/>
                    {{-- Pregunta 6 --}}
                    <div class="card">
                        <div class="card-header">
                            6.- El operador de intersección es:
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc06" id="qc06" value="A">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) ¡</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc06" id="qc06" value="B">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) +</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc06" id="qc06" value="C">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) Y</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc06" id="qc06" value="D">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) !</p>
                        </div>
                    </div>
                    <br/>
                    {{-- Pregunta 7 --}}
                    <div class="card">
                        <div class="card-header">
                            7.- Operadores aritméticos:
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc07" id="qc07" value="A">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) /  * (S)</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc07" id="qc07" value="B">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B)  X Y Z</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc07" id="qc07" value="C">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) + - / *</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc07" id="qc07" value="D">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) * - * 0</p>
                        </div>
                    </div>
                    <br/>
                    {{-- Pregunta 8 --}}
                    <div class="card">
                        <div class="card-header">
                            8.- Si necesitamos saber el número de celdas vacías en un rango, lo haremos con esta función:
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc08" id="qc08" value="A">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) CONTAR </p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc08" id="qc08" value="B">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) CONTAR.NULL</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc08" id="qc08" value="C">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) CONTAR.SUMA</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc08" id="qc08" value="D">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) CONTAR.BLANCO</p>
                        </div>
                    </div>
                    <br/>
                    {{-- Pregunta 9 --}}
                    <div class="card">
                        <div class="card-header">
                            9.- La Previsualización de impresión del documento nos permite:
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc09" id="qc09" value="A">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) Ver en pantalla el aspecto que tendrá nuestro documento
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc09" id="qc09" value="B">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) Imprimir un documento sin márgenes y sin celdas</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc09" id="qc09" value="C">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) Ver el objeto a manipular, previo a darle diseño en una pagina</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc09" id="qc09" value="D">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) Extraer información de una hoja de cálculo, la cual permite imprimir la información deseada</p>
                        </div>
                    </div>
                    <br/>
                    {{-- Pregunta 10 --}}
                    <div class="card">
                        <div class="card-header">
                            10.- ¿Como ponemos un formato condicional por fecha?
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc10" id="qc10" value="A">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) Accederemos al menú Formato / Ver / fecha</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc10" id="qc10" value="B">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) Accederemos al menú Archivo / General / Ver / Mes</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc10" id="qc10" value="C">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) Ctrl + F + V</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qc10" id="qc10" value="D">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) Accederemos al menú Formato > Formato condicional > Fecha...</p>
                        </div>
                    </div>
                    {{-- Botón envio --}}
                    <br/>
                    <div class="d-grid mx-auto">
                        <button type="submit" class="btn btn-dark btn-block">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
