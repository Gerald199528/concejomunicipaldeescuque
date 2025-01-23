<!-- resources/views/news/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Noticias</h1>
        <a href="{{ route('news.create') }}" class="btn btn-primary">
            <i class="fas fa-bullhorn"></i> Crear Nueva Noticia
        </a>
    </div>
    @if($news->isEmpty())
        <p>No hay noticias disponibles.</p>
    @else
        <div class="row">
            @foreach ($news as $new)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('storage/' . $new->image) }}" class="card-img-top" alt="{{ $new->title }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $new->title }}</h5>
                            <p class="card-text">{{ $new->description }}</p>
                            @if ($new->video)
                                <div class="embed-responsive embed-responsive-16by9">
                                    <video class="embed-responsive-item" width="100%" controls>
                                        <source src="{{ asset('storage/' . $new->video) }}" type="video/mp4">
                                        Tu navegador no soporta la etiqueta de video.
                                    </video>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
