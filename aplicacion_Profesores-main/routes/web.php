<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

Route::middleware('auth')->get('/home', [HomeController::class, 'index'])->name('home');

// Ruta principal (inicio público)
Route::get('/', function () {
    return view('welcome');  // O la vista que quieras mostrar
});

// Agrega esta ruta si no está definida
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Rutas de cursos
Route::get('/courses', [CoursesController::class, 'index'])->name('courses.index');
Route::get('/courses/create', [CoursesController::class, 'create'])->name('courses.create');
Route::post('/courses', [CoursesController::class, 'store'])->name('courses.store');
Route::get('/courses/edit/{id}', [CoursesController::class, 'edit'])->name('courses.edit');
Route::put('/courses/{id}', [CoursesController::class, 'update'])->name('courses.update');
