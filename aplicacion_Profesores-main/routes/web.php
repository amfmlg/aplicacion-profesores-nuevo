<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingsController;

Route::middleware('auth')->group(function () {
    // Rutas de cursos
    Route::get('/courses', [CoursesController::class, 'index'])->name('courses.index');
    Route::get('/courses/create', [CoursesController::class, 'create'])->name('courses.create');
    Route::post('/courses', [CoursesController::class, 'store'])->name('courses.store');
    Route::get('/courses/edit/{id}', [CoursesController::class, 'edit'])->name('courses.edit');
    Route::put('/courses/{id}', [CoursesController::class, 'update'])->name('courses.update');
    Route::delete('/courses/{id}', [CoursesController::class, 'destroy'])->name('courses.destroy');
});


Route::get('/settings', [SettingsController::class, 'index'])->name('settings');

Route::middleware(['auth'])->group(function () {
    // Ruta para el dashboard de inicio
    Route::post('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Ruta para la página de inicio (pública)
Route::get('/', function () {
    return view('home');  // Cambia 'home' por el nombre de la vista que quieres mostrar
})->name('home');
