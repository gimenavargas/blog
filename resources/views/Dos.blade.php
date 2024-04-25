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
    background-image: url("https://img.freepik.com/vector-gratis/fondo-futurista-tecnologia-degradada_23-2149122416.jpg?size=626&ext=jpg&ga=GA1.1.1687694167.1714003200&semt=ais");
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
            text-align: center;
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
            margin-bottom: 20px; /* Agregado margen inferior */
            padding: 20px 0;
            background-color: #2d3748;
            color: #fff;
            text-align: center;
        }
    </style>
</head>

<body>
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

    <div class="container">
        <h1>Descripción Personal</h1>
        <p>Actualmente soy Estudiante de Ig.Software con IA.</p>
        <p>Me apasiona la tecnologia y el diseño, y he estado trabajando en el desarrollo de aplicaciones web tanto Frontend y Backend.</p>
        <p>Algunas de mis habilidades incluyen:</p>
        <ul>
            <li>Diseño</li>
            <li>Logica de Programacion</li>
            
            <!-- Agrega más habilidades según sea necesario -->
        </ul>
        <p>Mis habilidades tecnológicas incluyen (Nivel junior):</p>
        <ul>
            <li>Lenguajes de programación: Python , Java , php , c#</li>
            <li>Frameworks y bibliotecas:
        <ul>
            <li>Frontend: React.js , Vue.js , Angular </li>
            <li>Backend: , Express.js , Django , Ruby on Rails </li>
            <li>Otros: jQuery , Bootstrap , TensorFlow </li>
        </ul>
    </li>
            <li>Bases de datos: MySql , Oracle Database , PostgreSql , SqLite</li>
            <!-- Agrega más habilidades tecnológicas según sea necesario -->
        </ul>
        <p>En mi tiempo libre, disfruto de dibujar , leer obras literarias.</p>
        <p>Estoy interesado en especializarme en el desarrollo de software .</p>
    </div>
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    <!-- Pie de página -->

    <footer class="fixed-bottom">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        <p> Estudiante: Gimena Vargas Tolentino</p>
    </footer>
</html>
