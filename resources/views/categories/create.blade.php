<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <form action="{{route('categories.store')}}" method="post">
       @csrf
       <label for="category_name">Nombre Categoría</label>
       <input type="text" name="category_name" id="category_name" placeholder="Category Name">
       <label for="active">Activa</label>
       <input type="checkbox" name="active" id="active" value="0">
       <button type="submit">Guardar</button> 
    </form>
</body>
</html>