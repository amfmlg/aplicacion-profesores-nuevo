<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration // Asegúrate de que la clase tenga este nombre
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('profesor_id')
                  ->constrained('users')
                  ->onDelete('cascade');
            $table->foreignId('curso_id')
                  ->constrained('cursos')
                  ->onDelete('cascade');
            $table->timestamps();
            $table->string('title', 255);
            $table->string('password', 255);
            $table->boolean('EsProfe')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
}
