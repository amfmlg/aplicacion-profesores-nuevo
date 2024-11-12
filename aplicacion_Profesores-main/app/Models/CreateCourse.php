namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CreateCourse extends Controller
{
public function index()
{
$courses = Course::all(); // Obtener todos los cursos
return view('courses.index', compact('courses'));
}

public function create()
{
return view('courses.create'); // Mostrar el formulario para crear un curso
}

public function store(Request $request)
{
$validated = $request->validate([
'name' => 'required|string|max:255',
'description' => 'required|string',
]);

Course::create($validated); // Crear el nuevo curso
return redirect()->route('courses.index')->with('success', 'Course created successfully.');
}

public function edit($id)
{
$course = Course::findOrFail($id); // Buscar el curso por ID
return view('courses.edit', compact('course')); // Mostrar formulario para editar el curso
}

public function update(Request $request, $id)
{
$validated = $request->validate([
'name' => 'required|string|max:255',
'description' => 'required|string',
]);

$course = Course::findOrFail($id);
$course->update($validated); // Actualizar el curso
return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
}
}
