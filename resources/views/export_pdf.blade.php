<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Certificado Writer</title>
</head>

<body>
    <svg width="26.5cm" height="19cm"  xmlns="http://www.w3.org/2000/svg" version="1.2">
        <style>
            @page{
                size: landscape;
                max-height: 100%;
                max-width: 100%;
            }
            svg{
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
                display: block;

            }
        </style>
        <rect x=-1 y=-1 width="100%" height="100%" style="fill:rgb(250, 250, 250); stroke-width:4; stroke:rgb(43, 222, 221);" />
        <image xlink:href="{{ asset('images/certificate/writer.png') }}" height="100%" width="100%"/>
        <g font-face="sans-serif">
            <text fill="#161515" x="50%" y="5%" lengthAdjust="spacing" text-anchor="middle" dominant-baseline="middle" font-size="28"> SOLUCIONES Y SERVICIOS EN TECNOLOGÍAS </text>
            <text fill="#161515" x="50%" y="10%" lengthAdjust="spacing" text-anchor="middle" dominant-baseline="middle" font-size="28"> DE LA INFORMACIÓN </text>
            <text fill="#161515" x="50%" y="20%" lengthAdjust="spacing" text-anchor="middle" dominant-baseline="middle" font-size="28"> Otorga la presente </text>
            <text fill="#1d3379" x="50%" y="30%" lengthAdjust="spacing" text-anchor="middle" dominant-baseline="middle" font-size="32"> CONSTANCIA </text>
            <text fill="#161515" x="50%" y="35%" lengthAdjust="spacing" text-anchor="middle" dominant-baseline="middle" font-size="28"> a </text>
            <text fill="#161515" x="50%" y="40%" lengthAdjust="spacing" text-anchor="middle" dominant-baseline="middle" font-size="28"> {{ $name; }} </text>
            <text fill="#161515" x="50%" y="45%" lengthAdjust="spacing" text-anchor="middle" dominant-baseline="middle" font-size="28"> Por  haber concluido satisfactoriamente el curso </text>
            <text fill="#1d3379" x="50%" y="50%" lengthAdjust="spacing" text-anchor="middle" dominant-baseline="middle" font-size="32"> {{ $course; }} </text>
            <text fill="#161515" x="50%" y="60%" lengthAdjust="spacing" text-anchor="middle" dominant-baseline="middle" font-size="28"> con una calificación de {{ $score; }} </text>
            <text fill="#161515" x="50%" y="65%" lengthAdjust="spacing" text-anchor="middle" dominant-baseline="middle" font-size="28"> en modalidad a distancia con una duración de 20 horas </text>
            <text fill="#161515" x="80%" y="90%" lengthAdjust="spacing" text-anchor="middle" dominant-baseline="middle" font-size="18"> Constancia sin valor curricular </text>
        </g>
   </svg>
</body>

</html>

