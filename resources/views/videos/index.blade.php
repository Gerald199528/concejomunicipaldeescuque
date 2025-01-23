<!-- resources/views/videos/index.blade.php -->

@extends('layouts.app')

@section('content')
<section class="videos-section py-5 animate__animated">
    <div class="container">
        <h2 class="text-center mb-5">Videos Destacados</h2>
        <div id="featured-videos" class="row">
            <!-- Videos destacados se cargarán aquí -->
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
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
});
</script>
@endsection
