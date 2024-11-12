<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
</head>
<body>
    <h1>Create a New Course</h1>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <label for="name">Course Name</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="description">Description</label>
        <textarea name="description" id="description" rows="4" required></textarea><br><br>

        <button type="submit">Create Course</button>
    </form>
</body>
</html>
