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
        Schema::create('chamados', function (Blueprint $table) {
            $table->id('id_chamado');
            $table->date('data');
            $table->text('observacao_diaglogo_com_pais');
            $table->foreignId('id_aluno')->constrained('alunos','id_aluno');
            $table->foreignId('id_professor_disciplina_turma')->constrained('professor_disciplina_turma','id_professor_disciplina_turma');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chamados');
    }
};
