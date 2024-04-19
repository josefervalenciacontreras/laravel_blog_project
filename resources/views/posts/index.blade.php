@extends('layouts.app')
@section('content')
<div class="container">
    <h5>Lista de publicaciones</h5>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Crear publicación</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Contenido</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->category_id }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info mx-1">Ver</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('posts.destroy', $post->id) }}"  type="button" class="btn btn-danger my-2">Eliminar</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection