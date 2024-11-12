<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio</title>
</head>
<body>
<h1>¡Bienvenido a la aplicación!</h1>

<!-- Enlace para iniciar sesión -->
<a href="{{ route('login') }}">Iniciar sesión</a>

<!-- Enlace para registrarse -->
<a href="{{ route('register') }}">Registrarse</a>
</body>
</html>
