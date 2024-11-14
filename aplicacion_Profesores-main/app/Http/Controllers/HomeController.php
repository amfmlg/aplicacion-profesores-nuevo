<?php

// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use App\Models\Course; // Asegúrate de importar el modelo Course
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Obtener todos los cursos (o ajustar según tus necesidades)
        $courses = Course::all(); // Puedes usar un método adecuado como `Course::where()` si quieres filtrar cursos

        // Pasar los cursos a la vista 'dashboard'
        return view('dashboard', compact('courses'));
    }
}
