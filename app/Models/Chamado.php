<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Chamado extends Model
{
    protected $primaryKey = 'id_chamado';

    // Define o relacionamento 1:1. Um chamado se relaciona com professor de disciplina específica
    public function professorDisciplinaTurma(): HasOne
    {
        return $this->hasOne(ProfessorDisciplinaTurma::class, 'id_professor_disciplina_turma','id_professor_disciplina_turma');
    }


    // Define o relacionamento 1:1. Um chamado é para um aluno específico
    public function Aluno(): HasOne
    {
        return $this->hasOne(Aluno::class, 'id_aluno','id_aluno');
    }
}
