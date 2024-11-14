<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::all(); // Obtener todos los cursos
        return view('courses.index', compact('courses')); // Pasarlos a la vista
    }

    public function create()
    {
        return view('courses.create'); // Mostrar formulario de creación
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Course::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('courses.index')->with('success', 'Curso creado exitosamente');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id); // Buscar curso
        return view('courses.edit', compact('course')); // Mostrar formulario de edición
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $course = Course::findOrFail($id); // Buscar curso
        $course->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('courses.index')->with('success', 'Curso actualizado exitosamente');
    }
    public function destroy($id)
    {
        // Eliminar el curso por ID
        $course = Course::findOrFail($id);
        $course->delete();

        // Redirigir de vuelta al dashboard con un mensaje de éxito
        return redirect()->route('dashboard')->with('success', 'Curso eliminado con éxito');
    }
}
