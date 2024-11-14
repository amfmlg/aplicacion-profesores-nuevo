<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-6">
    <header class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Bienvenido a la Aplicación de Profesores</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="{{ route('dashboard') }}" class="text-blue-600">Dashboard</a></li>
                <li><a href="{{ route('courses.index') }}" class="text-blue-600">Cursos</a></li>
                <li><a href="{{ route('logout') }}" class="text-blue-600">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2 class="text-xl font-semibold mb-4">Información general</h2>
        <p class="mb-4">Bienvenido al sistema de gestión de cursos. Desde aquí puedes gestionar tus cursos y acceder a otras opciones importantes del sistema.</p>

        <!-- Aquí puedes agregar más contenido dinámico o estático -->
        <div class="bg-white p-4 rounded shadow-md">
            <h3 class="font-medium text-lg">Próximos cursos</h3>
            <p>Ver los cursos que están próximos a comenzar.</p>
        </div>
    </main>
</div>
</body>
</html>
