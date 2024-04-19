@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Lista de Categorías</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoría</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->category_name}}</td>
                <td>
                    @if ($category->active)
                        Activa
                    @else
                        Inactiva
                    @endif
                </td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary ">Editar</a>
                    <a href="{{ route('categories.destroy', $category->id) }}" class="btn btn-danger mx-2">Eliminar</a>
                </td>
            </tr>
            @endforeach
                <a href="{{ route('categories.create') }}" class="btn btn-secondary my-3">Crear</a>
                <a href="{{ route('home') }}" class="btn btn-secondary mx-5">Home</a>
        </tbody>
    </table>
</div>
@endsection