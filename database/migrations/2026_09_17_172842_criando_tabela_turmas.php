<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('turmas', function (Blueprint $table) {
            $table->id('id_turma');
            $table->string('nome');
            $table->integer('numero');
            $table->foreignId('id_instituicao_ensino')->constrained('instituicao_ensino','id_instituicao_ensino');
            $table->foreignId('id_curso')->constrained('cursos','id_curso');
            $table->foreignId('id_conselheiro')->constrained('usuarios','id_usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turmas');
    }
};
