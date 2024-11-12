<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Solo mostrar el enlace a los cursos -->
            <div class="mt-4">
                <a href="{{ route('courses.index') }}" class="text-blue-500 hover:text-blue-700">Ver Cursos</a>
            </div>
        </div>
    </div>
</x-app-layout>
