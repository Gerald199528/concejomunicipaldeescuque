<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Concejo Municipal</title>
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
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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
       
    /* Ajustar el tamaño de la sección */
    .events-section {
        padding-top: 1rem;  /* Reduce el padding superior */
        padding-bottom: 1rem;  /* Reduce el padding inferior */
    }
    /* Ajustar el tamaño de la imagen */
    .events-section img {
        max-height: 400px;  /* Establece una altura máxima para la imagen */
        object-fit: cover;  /* Asegura que la imagen se recorte si es necesario para ajustarse */
        width: 100%;  /* Asegura que la imagen ocupe todo el ancho del contenedor */
    }

    </style>
</head>
<body>
    <section class="intro-section py-3 animate__animated"></section>
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
      

            <a class="navbar-brand" href="/login">
                <img src="{{ asset('img/logo.png') }}" alt="Camara Municipal de Escuque" style="height: 80px; margin-right: 20px;" />
            </a>
           
   

    <!-- ... -->
    
    <!-- Menú desplegable -->
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle">Instrumentos Legales</button>
        <div class="dropdown-content">
            <a href="{{ url('/legales') }}">Ordenanzas</a>
            <a href="{{ url('/cetas') }}">Gacetas</a>
            <a href="{{ url('/resol') }}">Resoluciones</a>
            <a href="{{ url('/acue') }}">Acuerdos</a>
        </div>
    </div>
    @yield('content')
    <!-- ... -->



        </div>
    </nav>
    
    <header class="main-header text-center animate__animated">     
        <h3>Bienvenidos al Concejo Municipal de Escuque.</h3>
    </header>
    
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6"></div>
            </div>
        </div>
    </header>
    
    <section class="intro-section py-5 animate__animated"></section>
    
    <section class="description py-5 animate__animated animate__fadeIn" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="mb-4" style="font-weight: bold; color: #343a40;">Sobre Nosotros</h2>
                    <p class="lead mb-4" style="color: #6c757d;">
                        Nuestra alcaldía se dedica a servir a la comunidad con responsabilidad y transparencia. Conozca más sobre nuestros proyectos y actividades.
                    </p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm border-light">
                                <div class="card-body text-center">
                                    <i class="bi bi-check-circle-fill" style="font-size: 2rem; color: #007bff;"></i>
                                    <h5 class="card-title mt-3">Transparencia</h5>
                                    <p class="card-text">Estamos implementando un sistema de gestión que asegura que la información esté siempre disponible.          </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm border-light">
                                <div class="card-body text-center">
                                    <i class="bi bi-people-fill" style="font-size: 2rem; color: #007bff;"></i>
                                    <h5 class="card-title mt-3">Participación Ciudadana</h5>
                                    <p class="card-text">Facilitamos la participación ciudadana en la toma de decisiones a través de nuestra plataforma.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm border-light">
                                <div class="card-body text-center">
                                    <i class="bi bi-file-earmark-text-fill" style="font-size: 2rem; color: #007bff;"></i>
                                    <h5 class="card-title mt-3">Acceso a Documentos</h5>
                                    <p class="card-text">Los ciudadanos podrán consultar y descargar ordenanzas y otros documentos legales de manera rápida y sencilla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#more-info" class="btn btn-primary mt-4">Aprender Más</a>
                </div>
            </div>
        </div>
    </section>
    <section class="intro-section py-5 animate__animated"></section>
   
    <section class="events-section py-2 animate__animated" style="background-color:rgb(189, 203, 216);">
    <div class="row">
        <div class="col-12">
            <img src="{{ asset('img/iglesia3.jpg') }}" alt="Descripción de la imagen" class="img-fluid" style="width: 100%; height: auto;" />
        </div>
    </div>
</section>



    <section class="intro-section py-5 animate__animated"></section>

    <section class="events-section py-5 animate__animated" style="background-color:rgb(189, 203, 216);">
        <div class="container">
            <h2 class="text-center mb-5" style="font-weight: bold; color: #343a40;">Noticias</h2>
            <div id="events" class="row"></div>
            <div class="text-center mt-4">
                <a href="#more-news" class="btn btn-primary">Ver Más Noticias</a>
            </div>
        </div>
    </section>

    <section class="intro-section py-5 animate__animated"></section>

    <section class="events-section py-5 animate__animated" style="background-color:rgb(189, 203, 216)">
        <div class="container">
            <h2 class="text-center mb-5">Eventos Destacados</h2>
            <div id="featured-videos" class="row">
                <!-- Videos destacados se cargarán aquí -->
            </div>
        </div>
    </section>
    


    <section class="map-section py-5 animate__animated">
        <div class="container">
            <h2 class="text-center">Ubicación de la Alcaldía</h2>
            <div id="map" class="rounded" style="height: 400px;"></div>
        </div>
    </section>

    <section class="events-section py-2 animate__animated" style="background-color:rgb(189, 203, 216);">
    <div class="row">
        <div class="col-12">
            <img src="{{ asset('img/iglesia3.jpg') }}" alt="Descripción de la imagen" class="img-fluid" style="width: 100%; height: auto;" />
        </div>
    </div>
</section>

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


    <script>
document.addEventListener('DOMContentLoaded', function() {
    // Definir la variable videos usando let
    let videos = [
     
        // Añade más videos aquí
    ];

    let videoContainer = document.getElementById('featured-videos');
    if (videoContainer) {
        // Vaciar el contenedor antes de insertar los nuevos videos
        videoContainer.innerHTML = '';

        // Mostrar todos los videos de la lista
        videos.forEach(video => {
            let videoElement = `
                <div class="col-12 text-center">
                    <div class="video-item">
                        <h3>${video.title}</h3>
                        <video width="100%" controls>
                            <source src="${video.url}" type="video/mp4">
                            Tu navegador no soporta la etiqueta de video.
                        </video>
                    </div>
                </div>
            `;
            videoContainer.insertAdjacentHTML('beforeend', videoElement);
        });
    } else {
        console.error('El contenedor de videos no existe.');
    }
});
</script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Cargar Noticias
            fetch('/api/news')
                .then(response => response.json())
                .then(data => {
                    const eventsContainer = document.getElementById('events');
                    data.forEach(news => {
                        const newsCard = document.createElement('div');
                        newsCard.classList.add('col-md-4', 'mb-4');
                        newsCard.innerHTML = `
                            <div class="card h-100 shadow-sm">
                                <img src="/storage/${news.image}" class="card-img-top" alt="${news.title}" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">${news.title}</h5>
                                    <p class="card-text text-muted">${news.description}</p>
                                    ${news.video ? `
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <video class="embed-responsive-item" controls>
                                                <source src="/storage/${news.video}" type="video/mp4">
                                                Tu navegador no soporta la etiqueta de video.
                                            </video>
                                        </div>
                                    ` : ''}
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Publicado el ${new Date(news.created_at).toLocaleDateString()}</small>
                                </div>
                            </div>
                        `;
                        eventsContainer.appendChild(newsCard);
                    });
                })
                .catch(error => console.error('Error fetching news:', error));

            // Cargar Videos
            fetch('/api/videos')
                .then(response => response.json())
                .then(data => {
                    const videosContainer = document.getElementById('featured-videos');
                    data.forEach(video => {
                        const videoCard = document.createElement('div');
                        videoCard.classList.add('col-md-6', 'mb-4');
                        videoCard.innerHTML = `
                            <div class="card h-100 shadow-sm">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <video class="embed-responsive-item" controls>
                                        <source src="/storage/${video.video}" type="video/mp4">
                                        Tu navegador no soporta la etiqueta de video.
                                    </video>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">${video.title}</h5>
                                    <p class="card-text text-muted">${video.description}</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Publicado el ${new Date(video.created_at).toLocaleDateString()}</small>
                                </div>
                            </div>
                        `;
                        videosContainer.appendChild(videoCard);
                    });
                })
                .catch(error => console.error('Error fetching videos:', error));

            // Inicializar mapa
            var alcaldiaLocation = [9.295833, -70.672778];
            var map = L.map('map').setView(alcaldiaLocation, 15);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap'
            }).addTo(map);
            L.marker(alcaldiaLocation).addTo(map)
                .bindPopup('Ubicación de la Alcaldía')
                .openPopup();

            // Animar el encabezado al cargar la página
            $('.main-header').addClass('animate__animated animate__fadeIn');
            // Animar las secciones cuando se desplazan hacia ellas
            $(window).on('scroll', function() {
                $('.description, .filter-form, .map-section, .events-section').each(function() {
                    var elementTop = $(this).offset().top;
                    var windowBottom = $(window).scrollTop() + $(window).height();
                    if (elementTop < windowBottom) {
                        $(this).addClass('animate__animated animate__fadeInUp');
                    }
                });
            });
        });

      

    </script>
</body>
</html>






