<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $titulo }}</title>
    <style>
        body {
            font-family: sans-serif;
        }
        .logo {
            width: 150px;
            margin-bottom: 20px;
        }
        .contenedor {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <!-- Prueba una imagen con ruta absoluta -->
        <img src="{{ asset('img/logo.jpg')}}" alt="BTS">        
        <!-- Título -->
        <h1>{{ $titulo }}</h1>

        <!-- Prueba un texto simple -->
        <p>Este es un PDF básico generado con DOMPDF.</p>
    </div>
</body>
</html>

