<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Certificado Writer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <style>
        .static {
            top: 50%;
            left: 33%;

            position:absolute;
            z-index: 1;
            background-size: cover;
            background-position: 0 -150px;
            background-repeat: no-repeat;
            font-size: 45px;
        }

    </style>
</head>

<body class="antialiased container mt-5">

    <div id="image-container">
        <img id="image" src="{{ asset('images/certificate/writer.jpg') }}" alt=""/>
    </div>
    <div class="static">
        {{ $name; }} <br/>
        Con una calificación de {{ $score; }}
    </div>
</body>

</html>

