<!-- resources/views/news/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card mb-4">
        <div class="card-header">
            <h2>Crear Nueva Noticia</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
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
                    <label for="image">Imagen:</label>
                    <input type="file" id="image" name="image" class="form-control-file" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Noticias Subidas</h2>
        </div>
        <div class="card-body">
            @if($news->isEmpty())
                <p>No hay noticias disponibles.</p>
            @else
                <ul class="list-group">
                    @foreach ($news as $new)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h5>{{ $new->title }}</h5>
                                <p>{{ $new->description }}</p>
                                <img src="{{ asset('storage/' . $new->image) }}" alt="{{ $new->title }}" style="height: 50px; object-fit: cover;">
                            </div>
                            <form action="{{ route('news.destroy', $new->id) }}" method="POST" style="margin: 0;">
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
