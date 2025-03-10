<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('cursos', function (Blueprint $table) {
        $table->id('curso_id');
        $table->string('nombre');
        $table->text('contenido');
        $table->string('robotics_kit');
        $table->string('portada');
        $table->timestamps();
        $table->foreignId('grupo_id')->constrained('grupos')->onDelete('cascade');
        $table->foreignId('material_id')->constrained('materiales')->onDelete('cascade');
        $table->foreignId('inscripcion_id')->constrained('inscripciones')->onDelete('cascade');
  
    });
}




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
