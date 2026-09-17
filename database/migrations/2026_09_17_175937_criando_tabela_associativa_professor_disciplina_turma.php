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
         Schema::create('professor_disciplina_turma', function (Blueprint $table) {
            $table->id('id_professor_disciplina_turma');
            $table->foreignId('id_professor')->constrained('usuarios','id_usuario');
            $table->foreignId('id_disciplina')->constrained('disciplinas','id_disciplina');
            $table->foreignId('id_turma')->constrained('turmas','id_turma');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professor_disciplina_turma');
    }
};
