<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Consejo Municipal</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(209, 19, 19, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .navbar .btn-primary {
            margin-left: auto;
        }

        .navbar-brand img {
            height: 60px;
            margin-right: 20px;
        }

        .main-header h3 {
            font-size: 2rem;
            margin-top: 20px;
        }

        .container h1 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #fff;
            text-align: center;
        }

        .input-group {
            max-width: 600px;
            margin: 0 auto;
        }

        .table {
            margin-top: 20px;
            background-color: #f8f9fa;
            border: 2px solid #dee2e6;
        }

        .table th,
        .table td {
            text-align: center;
        }

        .table th {
            background-color: rgb(218, 26, 26);
            color: #fff;
        }

        .table tbody tr:nth-child(even) {
            background-color: #e9ecef;
        }

        .table tbody tr:nth-child(odd) {
            background-color: #fff;
        }

        .table tbody tr:hover {
            background-color: #d1ecf1;
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            margin-top: 40px;
        }

        footer ul {
            padding-left: 0;
            list-style: none;
        }

        footer .list-inline-item:not(:last-child) {
            margin-right: 10px;
        }

        footer .list-inline-item a {
            color: #333;
            text-decoration: none;
        }

        footer .list-inline-item a:hover {
            text-decoration: underline;
        }

        footer .small {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    
<section class="intro-section py-3 animate__animated"></section>
    <section class="intro-section py-8 animate__animated"></section>
    <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
    <a class="navbar-brand" href="/login">
        <img src="{{ asset('img/logo.png') }}" alt="Camara Municipal de Escuque" style="height: 80px; margin-right: 20px;" />
    </a>
    <a class="btn btn-primary" href="{{ url('/') }}" style="margin-right: 15px;">Inicio</a>
    <!-- Menú desplegable -->
    <div class="dropdown" style="margin-right: 15px;">
        <button class="btn btn-primary dropdown-toggle">Instrumentos Legales</button>
        <div class="dropdown-content">
            <a href="{{ url('/legales') }}">Ordenanzas</a>
            <a href="{{ url('/cetas') }}">Gacetas</a>
            <a href="{{ url('/resol') }}">Resoluciones</a>
            <a href="{{ url('/acue') }}">Acuerdos</a>
        </div>
    </div>
</div>
    </nav>

    <header class="main-header text-center animate__animated">
        <h3>Bienvenido! Conozca un Poco Sobre los Acuerdos del Municipio Escuque.</h3>
    </header>

    <section class="intro-section py-3 animate__animated"></section>

    <div class="container mt-5">
        <h1 class="mb-4">Acuerdos Municipales</h1>

        <!-- Formulario de búsqueda -->
        <form action="{{ route('acues.search') }}" method="GET">
            <div class="input-group mb-3">
                <input type="text" name="query" class="form-control" placeholder="Buscar por título, fecha o categoría">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </div>
            </div>
        </form>

        <!-- Tabla para listar documentos -->
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($acue as $acue)
                <tr>
                    <td>{{ $acue->nombre }}</td>
                    <td><a href="{{ asset(Storage::url($acue->ruta)) }}" class="btn btn-primary btn-sm" target="_blank">Descargar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <footer class="footer bg-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Contact</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; Camara Municipal de Escuque 2025. Todos los Derechos Reservados.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-4"><a href="#!"><i class="bi-facebook fs-3"></i></a></li>
                        <li class="list-inline-item me-4"><a href="#!"><i class="bi-twitter fs-3"></i></a></li>
                        <li class="list-inline-item"><a href="#!"><i class="bi-instagram fs-3"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <section class="intro-section py-3 animate__animated"></section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
