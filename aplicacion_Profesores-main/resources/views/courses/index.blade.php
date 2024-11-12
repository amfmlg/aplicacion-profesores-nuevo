<!-- resources/views/courses/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses List</title>
</head>
<body>
<h1>Courses</h1>

@if(session('success'))
<p>{{ session('success') }}</p>
@endif

<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    @foreach($courses as $course)
    <tr>
        <td>{{ $course->name }}</td>
        <td>{{ $course->description }}</td>
    </tr>
    @endforeach
    </tbody>
</table>

<a href="{{ route('courses.create') }}">Create a New Course</a>
</body>
</html>
