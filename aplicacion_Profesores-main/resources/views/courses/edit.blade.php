@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar curso: {{ $course->nombre }}</h2>
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del curso</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $course->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" required>{{ $course->descripcion }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar curso</button>
    </form>
</div>
@endsection
