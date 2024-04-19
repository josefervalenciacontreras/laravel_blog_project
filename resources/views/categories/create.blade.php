@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('categories.store')}}" method="post">
       @csrf
       <div class="form-group">
            <div class="mb-3">
                <label for="category_name" class="form-label">Nombre Categoría</label>
                <input class="form-control" type="text" name="category_name" id="category_name" placeholder="Category Name">
            </div>
            <div class="mb-3">
                <label for="active">Activa</label>
                <input class="form-check-input" type="checkbox" name="active" id="active" value="1">
            </div>
            
            <button class="btn btn-primary mb-3"  type="submit">Guardar</button> 
       </div>
    </form>
</div>
@endsection