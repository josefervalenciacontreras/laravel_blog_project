@extends('layouts.app')
@section('content')
<div class="container">
    <h3>
        Editar Publicaciones
    </h3>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group
        @error('post_name')
        has-error
        @enderror">
        <label for="post_name">Nombre de la publicación</label>
        <input type="text" name="post_name" id="post_name" class="form-control"
            value="{{ $post->post_name }}">
        @error('post_name')
        <span class="help-block">{{ $message }}</span>
        @enderror
        </div>
       <div class="form-group">
            <label for="active">Estado</label>
            <select name="active" id="active" class="form-control">
                <option value="1" {{ $post->active ? 'selected' : '' }}>Activa</option>
                <option value="0" {{ !$post->active ? 'selected' : '' }}>Inactiva</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success my-3">Guardar</button>
    </form>
</div>
@endsection