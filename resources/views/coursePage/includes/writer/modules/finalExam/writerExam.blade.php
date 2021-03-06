@extends('coursePage.course')

@section('content')
<main>
    <div class="cotainer">
        <div class="card">
            <h3 class="card-header text-center">Bienvenido al de examen Writer </h3>
            @if(session()->has('errorValidate'))
                <div class="alert alert-danger">
                    {{ session()->get('errorValidate') }}
                </div>
            @endif
            <h4 class="text-center"> Tienes {{ $count }} /3 intentos para obtener el certificado </h4>
            <div class="card-body">
                <form method="POST" action="{{ route('writer.Exam.evaluate') }}">
                    @csrf
                    {{-- Pregunta 1 --}}
                    <div class="card">
                        <div class="card-header">
                            1.- LibreOffice Writer es compatible con una amplia gama de formatos de documentos como MicrosoftÂ® Word
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw01" id="qw01" value="A">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) .doc .docx</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw01" id="qw01" value="B">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) .xls .xls</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw01" id="qw01" value="C">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) .ppt .pptx</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw01" id="qw01" value="D">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) .doc .xls</p>
                        </div>
                    </div>
                    <br/>
                    {{-- Pregunta 2 --}}
                    <div class="card">
                        <div class="card-header">
                            2.- Para cambiar el tamaÃ±o de la Imagenâ¦
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw02" id="qw02" value="A">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) Hacemos clic sobre la imagen se activa el panel donde podemos hacer la modificaciÃ³n</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw02" id="qw02" value="B">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) Seleccionamos la imagen y presionamos la tecla P (ActivaciÃ³n de diseÃ±o)</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw02" id="qw02" value="C">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) Clic en insertar imagen, seleccionamos y aceptamos, observaos que la imagen cambia</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw02" id="qw02" value="D">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) Insertar, editar y activar</p>
                        </div>
                    </div>
                    <br/>
                    {{-- Pregunta 3 --}}
                    <div class="card">
                        <div class="card-header">
                            3.- Los encabezados y los pies de pÃ¡gina se encuentran en
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw03" id="qw03" value="A">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) La Barra de Tareas del escritorio</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw03" id="qw03" value="B">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) Los accesos de copiar y pegar</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw03" id="qw03" value="C">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) Los mÃ¡rgenes superior e inferior de la pagina</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw03" id="qw03" value="D">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) Los mÃ¡rgenes laterales del documento de la pagina editar</p>
                        </div>
                    </div>
                    <br/>
                    {{-- Pregunta 4 --}}
                    <div class="card">
                        <div class="card-header">
                            4.- Â¿QuÃ© es un marco de texto?
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw04" id="qw04" value="A">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) Una tabla de columnas y filas</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw04" id="qw04" value="B">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) Un contenedor para texto</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw04" id="qw04" value="C">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) Un editor de texto </p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw04" id="qw04" value="D">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) Un marco que utilizan las imÃ¡genes</p>
                        </div>
                    </div>
                    <br/>
                    {{-- Pregunta 5 --}}
                    <div class="card">
                        <div class="card-header">
                            5.- CombinaciÃ³n de teclas para imprimir un documento
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw05" id="qw05" value="A">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) Ctrl + P  + B</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw05" id="qw05" value="B">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) Ctrl + I</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw05" id="qw05" value="C">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) Ctrl + P++ </p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw05" id="qw05" value="D">

                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) Ctrl P</p>
                        </div>
                    </div>
                    <br/>
                    {{-- Pregunta 6 --}}
                    <div class="card">
                        <div class="card-header">
                            6.- Â¿Para quÃ© nos ayuda el corrector ortogrÃ¡fico?
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw06" id="qw06" value="A">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) Para corregir ortogrÃ¡fica y gramÃ¡tica durante la escritura</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw06" id="qw06" value="B">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) Para omitir los errores ortogrÃ¡ficos en una lectura</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw06" id="qw06" value="C">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) Para cambiar las letras que estÃ¡n en mayÃºsculas a minÃºsculas</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw06" id="qw06" value="D">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) Para la gramÃ¡tica alfanumÃ©rica</p>
                        </div>
                    </div>
                    <br/>
                    {{-- Pregunta 7 --}}
                    <div class="card">
                        <div class="card-header">
                            7.- Si se subraya una palabra en color verde hace referencia a un error
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw07" id="qw07" value="A">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) AlfanumÃ©rico</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw07" id="qw07" value="B">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) De autoforma</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw07" id="qw07" value="C">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) SintÃ¡ctico</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw07" id="qw07" value="D">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) Gramatical</p>
                        </div>
                    </div>
                    <br/>
                    {{-- Pregunta 8 --}}
                    <div class="card">
                        <div class="card-header">
                            8.- Â¿CÃ³mo activamos la barra de dibujo, si esta no estÃ¡ activa?
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw08" id="qw08" value="A">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) Ver / Barras de herramientas / Dibujo</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw08" id="qw08" value="B">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) Archivo / ConfiguraciÃ³n General / Barra de dibujo / Activar</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw08" id="qw08" value="C">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) Herramientas / General / Autoformas / Dibujo</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw08" id="qw08" value="D">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) Clic en el icono de dibujo</p>
                        </div>
                    </div>
                    <br/>
                    {{-- Pregunta 9 --}}
                    <div class="card">
                        <div class="card-header">
                            9.- Â¿En quÃ© apartado podemos modificar el formato de pÃ¡gina?
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw09" id="qw09" value="A">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) Referencia / Ver / modificar paginas
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw09" id="qw09" value="B">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) Clic en el menÃº Formato / Pagina</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw09" id="qw09" value="C">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) Clic eh Herramientas / General / Propiedades / Paginas</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw09" id="qw09" value="D">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) Clic en el icono de dibujo</p>
                        </div>
                    </div>
                    <br/>
                    {{-- Pregunta 10 --}}
                    <div class="card">
                        <div class="card-header">
                            10.- Â¿CÃ³mo insertar una imagen desde internet?
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw10" id="qw10" value="A">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; A) Referencia / Ver / modificar paginas</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw10" id="qw10" value="B">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; B) Abrir imagen, clic derecho, copiar y pegar en nuestro documento</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw10" id="qw10" value="C">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; C) Abrir el programa Google, ImÃ¡genes y ver</p>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="qw10" id="qw10" value="D">
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary"> &nbsp; D) Seleccionar imagen, clic izquierdo pegar</p>
                        </div>
                    </div>
                    {{-- BotÃ³n envio --}}
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
