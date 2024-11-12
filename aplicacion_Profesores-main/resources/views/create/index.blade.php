<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .description{
            background-color: blue;
        }
    </style>
</head>
<body>
    <ul>
        @forelse($create as $create)
            <li><a href="">{{ $create->title }}</a>|<a href="">EDIT</a>|<a href="">delte</a></li>
            <li class="description">{{ $create->description }}</li>
            <li><a href=" "></a></li>
        @empty
            <p>No data</p>
        @endforelse
    </ul>
    <form method="POST" action="{{ route('courses.creation') }}">
        @csrf
        <label for="CourseName">Nombre del curso</label>
        <input type="text" name="title" id="CourseName">
        <label for="CouseDesc">Descripcion del Curso</label>
        <input type="text" name="description" id="CourseDesc">
        <input type="submit" value="Crear Curso">
    </form>
</body>
</html>
