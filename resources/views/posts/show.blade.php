@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    @if ($post->category_id)
    <p>Categoría: {{ $post->category->category_name ?? $post->category_id }}</p>
    @else
    <p>Este post no tiene una categoría asignada
    @endif
    </p>
    <p>{{ $post->created_at }}</p>
    <p>{{ $post->update_at }}</p>
    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Editar</a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger my-2">Eliminar</button>
    </form>
</div>
@endsection