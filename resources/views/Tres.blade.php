<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Personal</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts - Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Estilos CSS -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            color: #333;
            background-color: black; /* Fondo negro */
        }
        .container {
            padding: 20px;
        }
        h1 {
            color: #1a202c;
            font-size: 50px;
            font-weight: 900;
            margin-bottom: 20px;
            text-transform: uppercase;
        }
        nav {
            background-color: #D177DF; /* Color de fondo del menú */
            padding: 20px;
            border-radius: 5px;
        }
        nav .nav-item {
            margin-right: 10px;
        }
        nav .nav-link {
            color: #333;
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

<body>
<!-- Contenido principal -->
<div class="container">
    <div class="introduction">
        
    </div>
</div>
</body>

<!-- Pie de página -->
<footer class="fixed-bottom">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    <p> Estudiante: Gimena Vargas Tolentino</p>
</footer>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</html>
