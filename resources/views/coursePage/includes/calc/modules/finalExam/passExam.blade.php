@extends('coursePage.course')

@section('content')
<main>
    <div class="cotainer">
        <div class="card">
            <h3 class="card-header text-center">En horabuena, has pasado el examen, por favor descarga tu certificado</h3>
            <div class="card-body">
                <div class="d-flex mb-3">
                    <a class="btn btn-success" href="{{ URL::to('course/calc/create-pdf') }}">Imprimir PDF</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
