<!-- resources/views/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Título del Dashboard -->
    <div class="py-6">
        <h2 class="text-2xl font-semibold text-gray-800">Bienvenido, {{ Auth::user()->name }}</h2>
    </div>

    <!-- Lista de Cursos -->
    <div class="mt-4">
        <h3 class="text-lg font-medium">Lista de Cursos</h3>

        @if ($courses->isNotEmpty()) <!-- Verifica si hay cursos -->
        <table class="min-w-full table-auto border-collapse mt-4">
            <thead>
            <tr>
                <th class="px-4 py-2 border">Nombre</th>
                <th class="px-4 py-2 border">Descripción</th>
                <th class="px-4 py-2 border">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($courses as $course) <!-- Iterar sobre los cursos -->
            <tr>
                <td class="px-4 py-2 border">{{ $course->name }}</td>
                <td class="px-4 py-2 border">{{ $course->description }}</td>
                <td class="px-4 py-2 border">
                    <!-- Acciones -->
                    <a href="{{ route('courses.edit', $course->id) }}" class="text-blue-500">Editar</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        @else
        <p>No hay cursos disponibles.</p>
        @endif
    </div>


    <div class="mt-8">
        <h3 class="text-lg font-medium">Opciones adicionales</h3>
        <ul class="mt-4 space-y-4">
            <li>
                <a href="{{ route('profile.show') }}" class="text-blue-500">Ver mi perfil</a>
            </li>
            <li>
                <a href="{{ route('settings') }}" class="text-blue-500">Configuración de cuenta</a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <button type="submit" class="text-red-500">Cerrar sesión</button>
                </form>
            </li>
        </ul>
    </div>

    @endsection
