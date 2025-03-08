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
    Schema::create('usuarios', function (Blueprint $table) {
        $table->id('user_id');
        $table->string('nombre');
        $table->string('email')->unique();
        $table->string('contrasena');
        $table->timestamps();
        $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');
        $table->foreignId('grupo_id')->nullable()->constrained('grupos')->onDelete('set null');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
