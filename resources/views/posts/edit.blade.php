@extends('layouts.app')
@section('content')
<div class="container">
    <h3>
        Editar Publicaciones
    </h3>
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif
    <form action="{{ route('posts.update', $post->id) }}" method="POST" style="display: inline">
        @csrf
        @method('PUT')
        <div class="mb-3">
        <label for="title" class="form-label">Título de la publicación</label>
        <input type="text" name="title" id="tile" class="form-control"
            value="{{ old('title', $post->title) }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenido</label>
            <textarea name="content" id="content" rows="5" class="form-control">{{ old('content', $post->content) }}</textarea>
        </div>
        <select name="category_id" id="category_id" class="form-control mb-3">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : ''}}>{{ $category->category_name }}</option>
            @endforeach   
        </select>
        <button type="submit" class="btn btn-success mb-3 mx-1">Guardar</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Atrás</a>
    </form>
    
</div>
@endsection