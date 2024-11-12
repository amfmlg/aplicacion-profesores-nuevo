<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        @csrf
        <label for="">title</label>
        <input type="text" name="title" value="{{ $create->title }}">
        <label for="">Description</label>
        <input type="text" name="description" value="{{ $create->description }}">
        <input type="submit" value="Update">
    </form>
</body>
</html>
