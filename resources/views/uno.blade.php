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
            background-image: url("https://img.freepik.com/vector-gratis/fondo-realista-estilo-futurista_23-2149129125.jpg");
            background-size: cover; /* Para cubrir todo el fondo */
            background-position: center; /* Para centrar la imagen */
            background-repeat: no-repeat; /* Para evitar que se repita */
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        .white {
    background-color: white;
    color: black; /* Cambia el color del texto a negro */
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
    </div>
</header>
<br> 
<body>
<section class="bg-image">
<div class="container text-center border border-white p-4 rounded-color white">
        <h2 class="text-primary mb-4">¡𝐁𝐢𝐞𝐧𝐯𝐞𝐧𝐢𝐝𝐨 𝐚 𝐦𝐢 𝐛𝐥𝐨𝐠 𝐩𝐞𝐫𝐬𝐨𝐧𝐚𝐥!</h2>
        <br> <br> 
        <p class="text-black ">
            ¡𝐇𝐨𝐥𝐚 𝐚 𝐭𝐨𝐝𝐨𝐬! 𝐌𝐢 𝐧𝐨𝐦𝐛𝐫𝐞 𝐞𝐬 𝐆𝐢𝐦𝐞𝐧𝐚 𝐲 𝐞𝐬𝐭𝐨𝐲 𝐞𝐦𝐨𝐜𝐢𝐨𝐧𝐚𝐝a 𝐝𝐞 𝐝𝐚𝐫𝐭𝐞 𝐥𝐚 𝐛𝐢𝐞𝐧𝐯𝐞𝐧𝐢𝐝𝐚 𝐚 𝐦𝐢 𝐛𝐥𝐨𝐠 𝐩𝐞𝐫𝐬𝐨𝐧𝐚𝐥. 𝐄𝐬𝐭𝐞 𝐞𝐬𝐩𝐚𝐜𝐢𝐨 𝐞𝐬 𝐝𝐨𝐧𝐝𝐞 𝐜𝐨𝐦𝐩𝐚𝐫𝐭𝐨 𝐦𝐢𝐬 𝐩𝐞𝐧𝐬𝐚𝐦𝐢𝐞𝐧𝐭𝐨𝐬, 𝐞𝐱𝐩𝐞𝐫𝐢𝐞𝐧𝐜𝐢𝐚𝐬, 𝐲 𝐫𝐞𝐟𝐥𝐞𝐱𝐢𝐨𝐧𝐞𝐬 𝐬𝐨𝐛𝐫𝐞 𝐮𝐧𝐚 𝐯𝐚𝐫𝐢𝐞𝐝𝐚𝐝 𝐝𝐞 𝐭𝐞𝐦𝐚𝐬 𝐪𝐮𝐞 𝐦𝐞 𝐚𝐩𝐚𝐬𝐢𝐨𝐧𝐚𝐧.
        </p>
        <p class="text-black">
            𝐃𝐞𝐬𝐝𝐞 𝐬𝐢𝐞𝐦𝐩𝐫𝐞 𝐡𝐞 𝐬𝐢𝐝𝐨 𝐮𝐧 𝐚𝐩𝐚𝐬𝐢𝐨𝐧𝐚𝐝𝐨 𝐩𝐨𝐫 𝐥𝐚 𝐓𝐞𝐜𝐧𝐨𝐥𝐨𝐠𝐢𝐚 𝐲 𝐞𝐥 𝐃𝐢𝐬𝐞ñ𝐨. 𝐄𝐬𝐭𝐞 𝐛𝐥𝐨𝐠 𝐞𝐬 𝐦𝐢 𝐦𝐚𝐧𝐞𝐫𝐚 𝐝𝐞 𝐜𝐨𝐦𝐩𝐚𝐫𝐭𝐢𝐫 𝐞𝐬𝐚 𝐩𝐚𝐬𝐢ó𝐧 𝐜𝐨𝐧𝐭𝐢𝐠𝐨 𝐲 𝐜𝐨𝐧 𝐨𝐭𝐫𝐨𝐬 𝐞𝐧𝐭𝐮𝐬𝐢𝐚𝐬𝐭𝐚𝐬 𝐪𝐮𝐞 𝐜𝐨𝐦𝐩𝐚𝐫𝐭𝐞𝐧 𝐢𝐧𝐭𝐞𝐫𝐞𝐬𝐞𝐬 𝐬𝐢𝐦𝐢𝐥𝐚𝐫𝐞𝐬.
        </p>
        <p class="text-black">
            𝐀𝐪𝐮í 𝐞𝐧𝐜𝐨𝐧𝐭𝐫𝐚𝐫á𝐬 𝐮𝐧𝐚 𝐚𝐦𝐩𝐥𝐢𝐚 𝐠𝐚𝐦𝐚 𝐝𝐞 𝐜𝐨𝐧𝐭𝐞𝐧𝐢𝐝𝐨, 𝐝𝐞𝐬𝐝𝐞 𝐚𝐫𝐭í𝐜𝐮𝐥𝐨𝐬 𝐢𝐧𝐟𝐨𝐫𝐦𝐚𝐭𝐢𝐯𝐨𝐬 𝐲 𝐭𝐮𝐭𝐨𝐫𝐢𝐚𝐥𝐞𝐬 𝐡𝐚𝐬𝐭𝐚 𝐫𝐞𝐟𝐥𝐞𝐱𝐢𝐨𝐧𝐞𝐬 𝐩𝐞𝐫𝐬𝐨𝐧𝐚𝐥𝐞𝐬 𝐲 𝐫𝐞𝐬𝐞ñ𝐚𝐬 𝐝𝐞 𝐥𝐢𝐛𝐫𝐨𝐬, 𝐩𝐞𝐥í𝐜𝐮𝐥𝐚𝐬 𝐨 𝐩𝐫𝐨𝐝𝐮𝐜𝐭𝐨𝐬 𝐪𝐮𝐞 𝐡𝐞 𝐞𝐧𝐜𝐨𝐧𝐭𝐫𝐚 𝐢𝐧𝐭𝐞𝐫𝐞𝐬𝐚𝐧𝐭𝐞𝐬. 𝐄𝐬𝐩𝐞𝐫𝐨 𝐪𝐮𝐞 𝐞𝐧𝐜𝐮𝐞𝐧𝐭𝐫𝐞𝐬 𝐚𝐥𝐠𝐨 𝐪𝐮𝐞 𝐭𝐞 𝐢𝐧𝐬𝐩𝐢𝐫𝐞, 𝐭𝐞 𝐞𝐧𝐜𝐨𝐧𝐭𝐫𝐚𝐫𝐚 𝐨 𝐭𝐞 𝐚𝐲𝐮𝐝𝐞 𝐝𝐞 𝐚𝐥𝐠𝐮𝐧𝐚 𝐦𝐚𝐧𝐞𝐫𝐚.
        </p>
        <p class="text-black">
            𝐌𝐞 𝐞𝐧𝐜𝐚𝐧𝐭𝐚𝐫í𝐚 𝐪𝐮𝐞 𝐭𝐞 𝐭𝐨𝐦𝐚𝐫𝐚𝐬 𝐮𝐧 𝐦𝐨𝐦𝐞𝐧𝐭𝐨 𝐩𝐚𝐫𝐚 𝐞𝐱𝐩𝐥𝐨𝐫𝐚𝐫 𝐞𝐥 𝐛𝐥𝐨𝐠 𝐲 𝐬𝐮𝐦𝐞𝐫𝐠𝐢𝐫𝐭𝐞 𝐞𝐧 𝐥𝐨𝐬 𝐝𝐢𝐟𝐞𝐫𝐞𝐧𝐭𝐞𝐬 𝐭𝐞𝐦𝐚𝐬 𝐪𝐮𝐞 𝐜𝐮𝐛𝐫𝐨. 𝐓𝐚𝐦𝐛𝐢é𝐧 𝐚𝐧𝐢𝐦𝐨 𝐚 𝐥𝐨𝐬 𝐥𝐞𝐜𝐭𝐨𝐫𝐞𝐬 𝐚 𝐩𝐚𝐫𝐭𝐢𝐜𝐢𝐩𝐚𝐫 𝐝𝐞𝐣𝐚𝐧𝐝𝐨 𝐜𝐨𝐦𝐞𝐧𝐭𝐚𝐫𝐢𝐨𝐬, 𝐜𝐨𝐦𝐩𝐚𝐫𝐭𝐢𝐞𝐧𝐝𝐨 𝐬𝐮𝐬 𝐩𝐫𝐨𝐩𝐢𝐚𝐬 𝐞𝐱𝐩𝐞𝐫𝐢𝐞𝐧𝐜𝐢𝐚𝐬 𝐨 𝐢𝐝𝐞𝐚𝐬, 𝐲 𝐜𝐨𝐧𝐞𝐜𝐭𝐚𝐧𝐝𝐨 𝐚 𝐭𝐫𝐚𝐯é𝐬 𝐝𝐞 𝐥𝐚𝐬 𝐫𝐞𝐝𝐞𝐬 𝐬𝐨𝐜𝐢𝐚𝐥𝐞𝐬.
        </p>
        <p class="text-black">
            𝐆𝐫𝐚𝐜𝐢𝐚𝐬 𝐩𝐨𝐫 𝐯𝐢𝐬𝐢𝐭𝐚𝐫 𝐦𝐢 𝐛𝐥𝐨𝐠 𝐲 𝐬𝐞𝐫 𝐩𝐚𝐫𝐭𝐞 𝐝𝐞 𝐞𝐬𝐭𝐚 𝐜𝐨𝐦𝐮𝐧𝐢𝐝𝐚𝐝. ¡𝐄𝐬𝐩𝐞𝐫𝐨 𝐪𝐮𝐞 𝐝𝐢𝐬𝐟𝐫𝐮𝐭𝐞𝐬 𝐝𝐞𝐥 𝐜𝐨𝐧𝐭𝐞𝐧𝐢𝐝𝐨 𝐲 𝐭𝐞 𝐬𝐢𝐞𝐧𝐭𝐚𝐬 𝐢𝐧𝐬𝐩𝐢𝐫𝐚𝐝𝐨 𝐩𝐚𝐫𝐚 𝐬𝐞𝐠𝐮𝐢𝐫 𝐞𝐱𝐩𝐥𝐨𝐫𝐚𝐧𝐝𝐨 𝐲 𝐚𝐩𝐫𝐞𝐧𝐝𝐢𝐞𝐧𝐝𝐨 𝐣𝐮𝐧𝐭𝐨 𝐚 𝐦í!
        </p>
        <p class="text-black">
            ¡𝐍𝐨𝐬 𝐯𝐞𝐦𝐨𝐬 𝐞𝐧 𝐥𝐨𝐬 𝐚𝐫𝐭í𝐜𝐮𝐥𝐨𝐬!
        </p>
    </div>
</section>
</body>

<!-- Pie de página -->
<footer class="fixed-bottom">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    <p> Estudiante: Gimena Vargas Tolentino</p>
</footer>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</html>
