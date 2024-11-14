<?php

// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course; // Si estás usando un modelo como Course

class DashboardController extends Controller
{
    public function index()
    {
        // Ejemplo de cargar algunos cursos para el dashboard
        $courses = Course::all(); // Puedes ajustarlo según tu necesidad

        // Retorna la vista 'dashboard', pasando la variable $courses
        return view('dashboard', compact('courses'));
    }
}
