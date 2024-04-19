@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Detalles de la categoría</h3>

    <div class="card">
        <div class="card-body">
            {{ $category->id }}
            {{ $category->category_name }}
            @if ($category->active)
                Activa
            @else
                Inactiva
            @endif
        </div>
        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary" >Editar</a>
        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline">
            @csrf 
            @method('DELETE')
            <button type="submit" class="btn btn-danger my-3">Eliminar</button>
        </form>
    </div>
</div>
@endsection