<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @php
        $student_name = "Jhon Doe";
        $student_age = 25;
    @endphp
    <div>
        <h1> Bienvenido, {{$student_name}}</h1>
        <p>Tu edad es, {{$student_age}}</p>
    </div>
</body>
</html>