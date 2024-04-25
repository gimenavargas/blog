<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            color: #fff; /* Color de texto blanco */
            background-image: url("https://media.istockphoto.com/id/1460853312/es/foto/puntos-y-l%C3%ADneas-conectados-abstractos-concepto-de-tecnolog%C3%ADa-de-ia-movimiento-del-flujo-de.jpg?s=612x612&w=0&k=20&c=IA_d2iqqxoxc8KrV4U0uAfjusAFP-DwWBd25AIZ5Vik="); /* Fondo color negro */

        }
        .container {
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7); /* Fondo negro con opacidad */
            border-radius: 10px; /* Bordes redondeados */
        }
        h1 {
            color:  #FB19ED; /* Color rosa para el título */
            font-size: 50px;
            font-weight: 900;
            margin-bottom: 20px;
            text-transform: uppercase;
            text-align: center; /* Alineación central del título */
        }
        nav {
            background-color: #D177DF; /* Cambia el color de fondo del menú a un tono violeta claro */
            padding: 20px;
            border-radius: 5px;
        }
        nav .nav-item {
            margin-right: 10px;
        }
        nav .nav-link {
            color: #gray; /* Color de texto blanco para los enlaces del menú */
            text-decoration: none;
            transition: color 0.3s;
        }
        nav .nav-link.active {
            color: #FF2D20;
            font-weight: bold;
        }
        footer {
            margin-top: 50px;
            padding: 20px 0;
            background-color: #2d3748;
            color: #fff;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">𝐌𝐲 𝐁𝐥𝐨𝐠 &nbsp;&nbsp;&nbsp;</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('uno') }}">Introduccion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Dos') }}">Descripcion Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Tres') }}">Ocupacion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Cuatro') }}">Experiencia Profesional</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Cinco') }}">Contactos</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<br>
<h1>꧁༒☬𝓑𝓲𝓮𝓷𝓿𝓮𝓷𝓲𝓭𝓸𝓼 𝓪 𝓜𝓲 𝓑𝓵𝓸𝓰 𝓟𝓮𝓻𝓼𝓸𝓷𝓪𝓵☬༒꧂</h1>

<br>
<div class="container text-center ">
    <img src="https://i.gifer.com/Ow1T.gif" alt="Descripción de la imagen" class="img-fluid" style="width: 50%; display: block; margin: 0 auto;">
</div>
<br><br>
<section>
    <div class="container">
    
    </div>
</section>

<section>
    <div class="container">
    
    </div>
</section>

<section>
    <div class="container">
    
    </div>
</section>

<section>
    <div class="container">
    
    </div>
</section>
<section>
    <div class="container">
    
    </div>
</section>

<footer class="fixed-bottom">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    <p> Estudiante: Gimena Vargas Tolentino</p>
</footer>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
