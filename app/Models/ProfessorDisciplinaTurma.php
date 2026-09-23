<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProfessorDisciplinaTurma extends Model
{
    
    protected $primaryKey = 'id_professor_disciplina_turma';


    // Define o relacionamento 1:1 da tabela associativa com disciplina
    public function Disciplina(): HasOne
    {
        return $this->hasOne(Disciplina::class, 'id_discplina','id_disciplina');
    }

    // Define o relacionamento 1:1 da tabela associativa com turma
    public function Turma(): HasOne
    {
        return $this->hasOne(Turma::class, 'id_turma','id_turma');
    }

    // Define o relacionamento 1:1 da tabela associativa com usuario
    public function Usuario(): HasOne
    {
        return $this->hasOne(Usuario::class, 'id_usuario','id_usuario');
    }
    
}
