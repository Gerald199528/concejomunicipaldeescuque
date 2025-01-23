<!-- resources/views/videos/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card mb-4">
        <div class="card-header">
            <h2>Subir Video</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Título:</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Descripción:</label>
                    <textarea id="description" name="description" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="video">Video:</label>
                    <input type="file" id="video" name="video" class="form-control-file" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Subir Video</button>
            </form>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            <h2>Videos Subidos</h2>
        </div>
        <div class="card-body">
            @if($videos->isEmpty())
                <p>No hay videos disponibles.</p>
            @else
                <ul class="list-group">
                    @foreach ($videos as $video)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h5>{{ $video->title }}</h5>
                                <p>{{ $video->description }}</p>
                                <video width="100px" controls style="display:block; margin-top: 10px;">
                                    <source src="{{ asset('storage/' . $video->video) }}" type="video/mp4">
                                    Tu navegador no soporta la etiqueta de video.
                                </video>
                            </div>
                            <form action="{{ route('videos.destroy', $video->id) }}" method="POST" style="margin: 0;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@endsection
